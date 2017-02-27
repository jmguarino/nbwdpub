<?php
 
/*
 * Fetch names of other members in party
 */
 
session_start();

if( $_SESSION["hasAuthed"] == "true") {
    $partySize = $_POST['partySize'];

    $passedNames = $_POST['partyNames']; //TODO Likely have to use json encode on js side then jsparse on this side

    $namesArr = explode(",", $passedNames);

    $guests = array();
    for($i = 0; $i<$partySize; $i++ ){
        $attending = $_POST["guest$i"];
        $firstLast = explode(" ", $namesArr[$i]);
        $fName = $firstLast[0]; //First name
        $lName = $firstLast[1]; //Last name
        array_push($guests, array("fName"=>$fName, "lName"=>$lName, "attending"=>$attending));
    }

    // include db connect class
    require_once __DIR__ . '/db_connect.php';
     
    // connecting to db
    $db = new DB_CONNECT();

    $result = array();

    // rsvp for each guest
    for($i = 0; $i<$partySize; $i++) {
        $query = "CALL setRsvpByName('" . $guests[$i]["fName"] . "','" . $guests[$i]["lName"] . "','" . (int)$guests[$i]["attending"] . "');";
        $result[$i] = mysql_query($query) or die(mysql_error());
        $logFile = fopen("wedding_sql.log", "a");
        $time = date('Y-m-d H:i:s');
	$ip = $_SERVER['REMOTE_ADDR'];
        $queryLog = $time . " " . $ip . "  " . $query . "\n";
        fwrite($logFile, $queryLog);
    }

    echo json_encode($result);
}
?>

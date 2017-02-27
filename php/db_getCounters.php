<?php
 
/*
 * Following code will list all the agency
 */
 
session_start();

if( $_SESSION["hasAuthed"] == "true") {
    // array for JSON response
    $response = array();
     
    // include db connect class
    require_once __DIR__ . '/db_connect.php';
     
    // connecting to db
    $db = new DB_CONNECT();
     
    // get counts for display
    $query = mysql_query("CALL getCounts()") or die(mysql_error());

    // check for empty result
    if (mysql_num_rows($query) > 0) {
            $row = mysql_fetch_array($query);

            $leftCount = intval($row["leftCount"]);
            $response["leftCount"] = $leftCount;

            $attendingCount = intval($row["attendingCount"]);
            $response["attendingCount"] = $attendingCount;

            $response["success"] = 1;

            echo json_encode($response);

    } else {
        // no names found
        $response["success"] = 0;
        $response["message"] = "No names found";
     
        // echo no users JSON
        echo json_encode($response);
    } 
}
?>

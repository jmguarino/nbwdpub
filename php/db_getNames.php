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
     
    // get all first and last names from guests table
    $result = mysql_query("CALL getNames()") or die(mysql_error());
     
    // check for empty result
    if (mysql_num_rows($result) > 0) {

        while ($row = mysql_fetch_array($result)) {
            $guest = $row["fname"] . " " . $row["lname"];
            array_push($response, $guest);
        }
     
        // echoing JSON response
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

<?php
$mysqli = new mysqli("localhost", "root", "", "meal");
 
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
$number = $mysqli->real_escape_string($_REQUEST['number']);
$zone = $mysqli->real_escape_string($_REQUEST['zone']);
 
$sql = "INSERT INTO orders (fname, lname, number, zone) VALUES ('$first_name', '$last_name', '$number', '$zone')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
$mysqli->close();
?>
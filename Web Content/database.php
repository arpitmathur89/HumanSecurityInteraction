<?php

$host = 'localhost';
$user = 'hsiuser1';
$pass = 'HumanSecurity1';
$db = 'incident_database';
$mysqli = new mysqli($host,$user,$pass,$db);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
//$mysqli->close();
?>
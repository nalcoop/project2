<?php
//path to get to this file
// /home/MAIN/nic4340/connection.db.php
$username="nic4340";
$password="Piston5-camper";

$hostname="localhost";
$databaseName="nic4340";

//use mysqli to avoid getting hacked in mysql

$mysqli = new mysqli($hostname,$username,$password,$databaseName);

?>
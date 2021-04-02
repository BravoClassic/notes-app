<?php
$serverName ="localhost";
$user="root";
$password="brav123";
$dbName="notes-app-db";

//Create connection
$conn = mysqli_connect($serverName,$user,$password,$dbName);

//Check for errors in connection
if(!$con){
    die("Connection failed:". mysqli_connect_error());
}echo "Connected successfully";

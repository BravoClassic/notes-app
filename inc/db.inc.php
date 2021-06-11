<?php
$serverName ="localhost";//servername
$user="root";
$password="123456";
$dbName="notes-app-db";

//Create connection
$conn = mysqli_connect($serverName,$user,$password,$dbName);

//Check for errors in connection
if(!$conn){
    die("Connection failed:". mysqli_connect_error());
}

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logging";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname );

// Check connection
if (!$conn && !$dbname) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";




///         create data

/*$data="CREATE DATABASE logging";

if(mysqli_query($conn,$data)){

}else{
    die('no connection');
}*/
//$table="INSERT INTO users (fname,lname,email,password) VALUES('asd','ert','fgfrf','efrr')";
//$table="INSERT INTO users () VALUES () ";
//mysqli_query($conn,$table);


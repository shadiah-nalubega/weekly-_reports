<?php
$host= "localhost"; //database server
$username = "root"; //mysql username
$password = "1234";//mysql password
$dbname = "internship2026"; //database name

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){ // If $conn is false (connection failed), execute the code inside the braces.
  
die("Connection failed: " . mysqli_connect_error());

};
//echo "Connected successfully!";




//mysqli_connect() → connect to MySQL.
//mysqli_connect_error() → get the connection error message.
//die() → stop execution and display a message.
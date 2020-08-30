<?php

$servername="us-cdbr-east-02.cleardb.com";
$username="bbf45313cdcae5";
$password="8aa480ec";
$dbname="heroku_9589008d54b8835";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

//echo "Connected successfully";

?>
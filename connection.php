<?php
 
 
function Connect()
{
 $dbhost = "localhost:8080";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "xpatrol";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
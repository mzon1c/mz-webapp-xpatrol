<?php
 
require 'connection.php';
include("auth.php"); 
$conn    = Connect();


$full_name    = $conn->real_escape_string($_POST['full_name']);
$address    = $conn->real_escape_string($_POST['address']);
$rfid_no    = $conn->real_escape_string($_POST['rfid_no']);
$reg_no    = $conn->real_escape_string($_POST['reg_no']);
$chassis_no    = $conn->real_escape_string($_POST['chassis_no']);
$email    = $conn->real_escape_string($_POST['email']);
$phone_no    = $conn->real_escape_string($_POST['phone_no']);
$submittedby = $_SESSION["username"];


$query   = "INSERT into registrations (reg_date,full_name,address,rfid_no,reg_no,chassis_no,email,phone_no,tax_date,insurance_date,pollution_date,submitted_by) VALUES(date(now()),
'" .$full_name. "' , '" .$address. "','" .$rfid_no. "','" .$reg_no. "','" .$chassis_no. "','" .$email. "','" .$phone_no. "', DATE_ADD(date(now()) , INTERVAL 365 DAY), DATE_ADD(date(now()) , INTERVAL 365 DAY),DATE_ADD(date(now()) , INTERVAL 365 DAY),'".$submittedby."')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
 
$conn->close();
 
header('Refresh: 1;url=tax.php');

?>
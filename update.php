<?php
include("auth.php");
require 'connection.php';
$connect    = Connect();
if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE registrations SET ".$_POST["column_name"]."='".$value."',submitted_by='" . $_SESSION['username'] . "' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 
 }
}
?>

<?php
$connect = mysqli_connect("localhost", "root", "", "xpatrol");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM registrations WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
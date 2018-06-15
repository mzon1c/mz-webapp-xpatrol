<?php
$connect = mysqli_connect("localhost", "root", "", "xpatrol");
if(isset($_POST["id"]))
{
 $query = "UPDATE registrations set tax_date=DATE_ADD(date(now()) , INTERVAL 365 DAY)   WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Renewed Successfully';
 }
}
?>
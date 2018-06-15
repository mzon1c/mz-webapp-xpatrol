<?php
require 'connection.php';
$connect    = Connect();
$output = '';


$query = "SELECT registrations.id,sensor1.keys1,sensor1.rfid,registrations.full_name FROM sensor1,registrations where sensor1.rfid like registrations.rfid_no and registrations.tax_date<date(now())";

$result = mysqli_query($connect, $query);	
//echo $result;

if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>RFID.no</th>
							<th>Reg.no</th>
						
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["keys1"].'</td>
				<td>'.$row["rfid"].'</td>
				<td>'.$row["full_name"].'</td>
				
		
				
			</tr>
		';
		$connect    = Connect();

$query   = "INSERT into fine_rec (rfid_1,date,name,remarks) VALUES('" .$row["rfid"]. "' , '" .$row["keys1"]. "','" .$row["full_name"]. "','expired pollution')";

$success = $connect->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$connect->error);
 
}

	}
	echo $output;


}
else
{
	echo 'Data Not Found';
}
?>
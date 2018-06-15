<?php
require 'connection.php';
$connect    = Connect();
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM registrations 
	WHERE full_name LIKE '%".$search."%'
	OR chassis_no LIKE '%".$search."%' 
	OR rfid_no LIKE '%".$search."%' 
	OR reg_no LIKE '%".$search."%' 
	OR email LIKE '%".$search."%'
	";
}
else
{

$query = "SELECT * FROM registrations ORDER BY reg_date";
}
$result = mysqli_query($connect, $query);	

if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>RFID.no</th>
							<th>Reg.no</th>
							<th>Chassis.no</th>
							<th>Reg.Date</th>
							<th>Phone.no</th>
							<th>Email.id</th>
							<th>Insurance</th>
							<th>Registered By</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["full_name"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["rfid_no"].'</td>
				<td>'.$row["reg_no"].'</td>
				<td>'.$row["chassis_no"].'</td>
				<td>'.$row["reg_date"].'</td>
				<td>'.$row["phone_no"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["insurance_date"].'</td>
				<td>'.$row["submitted_by"].'</td>
				
			</tr>
		';
	}
	echo $output;


}
else
{
	echo 'Data Not Found';
}
?>
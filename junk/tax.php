<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<html>
<head>
<title>X-Patrol</title>
<link rel="stylesheet" type="text/css" href="css/global.css"/>
<meta name="viewport" content="width=device-width, initial-scale= 1.0, user-scalable=0" />
<!-- <meta http-equiv="refresh" content="1" > -->
<script src="jquery/jquery-3.1.1.min.js"></script>
<script src="jquery/general.js"></script>
<link href="css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

	<div id="header">
		<div class="logo"> <a href="#">X<span>patrol</span></a></div>
		<li class="login_ico"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
		<li>Welcome <?php echo $_SESSION['username']; ?>!</li>
		
	</div>

	<a class="mobile" href="#">MENU</a>

	<div id="container">
		 <div class="sidebar">
		 	<ul id="nav">
		 	<li><a class="selected" href="index.html">X-Patrol</a></li>
		 	<li><a href="dashbaord.php" target="_blank">Visit Website</a></li>
		 	<li><a href="#">General Settings</a>
		 		<div class="general">
		 			<ul id="gen">
        			<li><a href="">Insurance</a></li>
        			
      				</ul>
      			</div>
		 	</li>
		 	<li><a href="#">Vehicle</a>
		 		<div class="shipment">		
		 			<ul id="ship">
        				<li><a href="">Details</a></li>
        				
      				</ul>
      		</li>

		 	<li><a href="#">Management</a>
		 		<div class="pickup">
		 			<ul>
		 				<li><a href="">Generate Memo</a></li>
		 				
		 			</ul>
		 		</div>
		 	</li>
		 	<li><a href="#">FAQ</a>
		 		<div class="cod">
		 			<ul>
		 				<li><a href="">More 1</a></li>
		 				<li><a href="">More 2</a></li>
		 			</ul>
		 		</div>
		 	</li>
		 	
		 	<li><a href="#">Settings</a>
		 		<div class="zone">
		 			<ul>
		 				<li><a href="">Settings 1</a></li>
		 				<li><a href="">Settings 2</a></li>
		 			</ul>
		 		</div>
		 	</li>
		 	<li><a href="login.php">Login</a></li>
		 	</ul>
		 </div>

		 <div class="content">
		 	<h1>Dashboard</h1>
		 	<p>Here is the stuff! </p>
		 	<div id="box">
		 		<div class="box-top"> <i class="fa fa-truck" aria-hidden="true"></i>  Vehicle details </div>
		 		<div class="box-panel">
		 			Status of Vehicle
		 			<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "xpatrol");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM sensor1";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>date</th>";
                echo "<th>RFID</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['keys1'] . "</td>";
                echo "<td>" . $row['rfid'] . "</td>";
               
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

		 		</div>
		 	</div>
		 	<div id="box">
		 		<div class="box-top"><i class="fa fa-book" aria-hidden="true"></i> Update </div>
		 		<div class="box-panel">
		 			Update menu

		 		</div>
		 	</div>
		 	<div id="box">
		 		<div class="box-top"> <i class="fa fa-truck" aria-hidden="true"></i> List  </div>
		 		<div class="box-panel">
		 			List Menu
		 		</div>
		 	</div>

		 </div>
	</div>

</body>
</head>
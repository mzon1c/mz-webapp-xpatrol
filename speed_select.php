<?php  
require 'connection.php';
header('refresh:10; url=speed_select.php');
 $connect = Connect();
 $output = '';  
 $sql = "SELECT registrations.id,sensor1.keys1 as rfid1, sensor2.keys1 as rfid2, abs(TIMESTAMPDIFF(MINUTE,(SELECT sensor1.keys1),(SELECT sensor2.keys1))) as time,sensor1.rfid,registrations.full_name,settings_loc.speed from registrations,sensor1,sensor2,settings_loc,settings_rfid where sensor1.rfid like sensor2.rfid2 and sensor1.rfid like registrations.rfid_no and sensor1.rfid_id like settings_rfid.rfid_id";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="20%">rfid1</th>
                     <th width="20%">rfid2</th>
                     <th width="20%">time</th>  
                     <th width="20%">rfid</th>
                     <th width="20%">full_name</th>
                    

                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["rfid1"].'</td> 
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["rfid2"].'</td> 
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["time"].'</td>
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["rfid"].'</td> 
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["full_name"].'</td>  
                     
                </tr>  
           ';  


//start of speed check

           include 'speed_val.php';


          if($row["time"]<$row["speed"])
           {

              $connect    = Connect();

$query   = "INSERT into fine_speed (rfid_1,date,name,remarks) VALUES('" .$row["rfid"]. "' , '" .$row["rfid1"]. "','" .$row["full_name"]. "','speeding over 80')";

$success = $connect->query($query);
 
if (!$success) {
   // die("Couldn't enter data: ".$connect->error);
 
}




           }//end of pol check


          


      }  

 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 //echo $output;  
 ?>

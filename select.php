<?php  
require 'connection.php';
 $connect = Connect();
 $output = '';  
 $sql = "SELECT sensor1.id,time(sensor1.keys1) as time,date(sensor1.keys1) as date,registrations.full_name,registrations.rfid_no,registrations.tax_date,registrations.insurance_date,registrations.pollution_date,sensor1.rfid_id FROM registrations,sensor1 where registrations.rfid_no like sensor1.rfid";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="20%">Time</th>
                     <th width="20%">Date</th>
                     <th width="20%">Full Name</th>  
                     <th width="20%">Rf-id</th>
                     <th width="10%">Tax Date</th>
                     <th width="10%">Insurance Date</th>
                     <th width="10%">Pollution Date</th>

                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["time"].'</td> 
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["date"].'</td> 
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["full_name"].'</td> 
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["rfid_no"].'</td>  
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["tax_date"].'</td>
                      <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["insurance_date"].'</td> 
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["pollution_date"].'</td> 
                </tr>  
           ';  
//start of pol check
               if($row["pollution_date"]<$row["date"])
           {

              $connect    = Connect();

$query   = "INSERT into fine_pol (rfid_1,date,time,name,remarks,fined_by) VALUES('" .$row["rfid_no"]. "' , '" .$row["date"]. "','" .$row["time"]. "','" .$row["full_name"]. "','expired pollution','" .$row["rfid_id"]. "')";


$success = $connect->query($query);
  
 

 
if (!$success) {
   // die("Couldn't enter data: ".$connect->error);
 
}




           }//end of pol check


           //start of tax check
               if($row["tax_date"]<$row["date"])
           {

              $connect    = Connect();

$query   = "INSERT into fine_tax (rfid_1,date,time,name,remarks,fined_by) VALUES('" .$row["rfid_no"]. "' , '" .$row["date"]. "','" .$row["time"]. "','" .$row["full_name"]. "','expired tax','" .$row["rfid_id"]. "')";



$success = $connect->query($query);
 


if (!$success) {
   // die("Couldn't enter data: ".$connect->error);
 
}




           }//end of tax check



           //start of insurance check
               if($row["insurance_date"]<$row["date"])
           {

              $connect    = Connect();

$query   = "INSERT into fine_ins (rfid_1,date,time,name,remarks,fined_by) VALUES('" .$row["rfid_no"]. "' , '" .$row["date"]. "','" .$row["time"]. "','" .$row["full_name"]. "','expired insurance','" .$row["rfid_id"]. "')";




$success = $connect->query($query);
 
if (!$success) {
   // die("Couldn't enter data: ".$connect->error);
 
}




           }//end of insurance check


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
 echo $output;  
 ?>

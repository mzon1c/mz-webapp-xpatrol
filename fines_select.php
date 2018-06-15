<?php  
require 'connection.php';
 $connect = Connect();
 $output = '';  
 $sql = "SELECT * FROM fine_ins UNION SELECT * from fine_tax UNION select * from fine_pol UNION select id,rfid_1,rfid_2,date(date) as date,time(date) as time,name,remarks,fined_by from fine_speed order by time";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="20%">RFID</th>
                     <th width="20%">Date</th>
                     <th width="20%">Time</th>  
                     <th width="20%">Name</th>
                     <th width="10%">Remarks</th>
                     <th width="10%">Ticketed By</th>
                  

                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["rfid_1"].'</td> 
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["date"].'</td> 
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["time"].'</td> 
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["remarks"].'</td>
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["fined_by"].'</td>
                    
                </tr>  
           ';  



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

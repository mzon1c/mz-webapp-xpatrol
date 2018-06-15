<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/

//include("auth.php");
$id=$_REQUEST['id'];


//if "email" variable is filled out, send email
 if(1==1)
 {
  
  //Email information
  $admin_email = "zon1c.mw@gmail.com";
  $email = "akhilomanakuttan96@gmail.com";
  $subject = "Fine";
  $comment = "You jasdhkjasd have been spotted!";
  
  //send email
  mail($id, "$subject", $comment, "From:" . $admin_email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

<!-- <form method="post">

  Email: <input name="email" type="text" />

  <!--Subject: <input name="subject" type="text" />

  //Message:

  //<textarea name="comment" rows="15" cols="40"></textarea> -->
<!--
  <input type="submit" value="Submit" />
  </form>
  -->
<?php
  }
?>
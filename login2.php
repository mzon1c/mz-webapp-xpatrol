<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="assets/css/login.css">

  
</head>

<body>

  <?php
  require('db.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
    
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

// test code starts

      $access = $username[0];
      $tax = "t";
      $insurance = "i";
      $pollution = "p";
      $admin = "a";
      $customer= "$";




      echo "$access";


        if(strcmp($access,$tax)==0)
        {

            //Checking is user existing in the database or not
       $query = "SELECT * FROM `login` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: tax.php"); // Redirect user to index.php
            }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }





        }

        elseif((strcmp($access,$insurance)==0))
        {

            //Checking is user existing in the database or not
        $query = "SELECT * FROM `login` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: insurance.php"); // Redirect user to index.php
            }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }





        }

        elseif((strcmp($access,$pollution)==0))
        {



            //Checking is user existing in the database or not
        $query = "SELECT * FROM `login` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: pollution.php"); // Redirect user to index.php
            }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }




        }elseif((strcmp($access,$admin)==0))
        {



            //Checking is user existing in the database or not
        $query = "SELECT * FROM `login` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: portal.php"); // Redirect user to index.php
            }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }




        }elseif((strcmp($access,$customer)==0))
        {



            //Checking is user existing in the database or not
        $query = "SELECT * FROM `login` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: customer_portal.php"); // Redirect user to index.php
            }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }




        }










    //test code ends






    
  //Checking is user existing in the database or not
      /*  $query = "SELECT * FROM `login` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: index.php"); // Redirect user to index.php
            }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }*/
    }else{}
?>

  <body class="align">
    <img align="middle" height="40%" width="20%" src="images/logo.png">
    <h1 align="center" style="color:#1abc9c;">“SURVEILLANCE WITHOUT DALLIANCE”</h1>    
<br>
<br>
  <div class="grid">



    <form action="" method="POST" name="login" class="form login">


      <div class="form__field">
        <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
        <input id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
      </div>

      <div class="form__field">
        <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label>
        <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
      </div>

      <div class="form__field">
        <input type="submit" value="Sign In" name="submit">
      </div>

    </form>

    

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>

</body>
  
  

</body>

</html>

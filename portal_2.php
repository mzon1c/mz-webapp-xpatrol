<?php


include("auth.php"); ?>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The RFID based Surveillance System by team #projectinfamous">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>X-Patrol | Surveillance without Dalliance</title>

        <link rel="stylesheet" href="../plugins/morris/morris.css">
        <link href="css/font-awesome.css" rel="stylesheet">
        

           <script type="text/javascript">

            var popupWindow=null;

                function child2_open()
                    { 

                        popupWindow =window.open('portal_speed.php',"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=1920, height=1080,top=200,left=200",'fullscreen="yes"');

                        }
                        function parent_disable() {
                        if(popupWindow && !popupWindow.closed)
                        popupWindow.focus();
                        }   
                        </script>

         <script type="text/javascript">

            var popupWindow=null;

                function child1_open()
                    { 

                        popupWindow =window.open('fines.php',"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=1920, height=1080,top=200,left=200",'fullscreen="yes"');

                        }
                        function parent_disable() {
                        if(popupWindow && !popupWindow.closed)
                        popupWindow.focus();
                        }   
                        </script>

        <script type="text/javascript">

            var popupWindow=null;

                function child_open()
                    { 

                        popupWindow =window.open('rfid_2.php',"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=1920, height=1080,top=200,left=200",'fullscreen="yes"');

                        }
                        function parent_disable() {
                        if(popupWindow && !popupWindow.closed)
                        popupWindow.focus();
                        }   
                        </script>
        
  
 
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><i class="fa fa-car icon-c-logo"></i><span>X-PATROL</span></a>
                       
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                               
                                
                            </a>
                            
                        </li>

                        <li class="list-inline-item notification-list">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="dripicons-expand noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="images/users/user.svg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome <?php echo $_SESSION['username']; ?>!</small> </h5>
                                </div>

                                <!-- item-->
                                

                                <!-- item-->
                                <a href="portal_settings.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                              

                                <!-- item-->
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                            <li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="portal.php" class="waves-effect"><i class="ti-rss-alt"></i> <span> RFID 1 > EM18_1</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">

                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="portal_2.php" class="waves-effect"><i class="ti-rss-alt"></i> <span>RFID 2 > EM18_2</span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                            
                                    
                                </ul>
                            </li>

                          

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i> <span> More </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="portal_settings.php">Settings</a></li>
                                    <li><a href="portal_about.php">About X-Patrol</a></li>
                                    
                                </ul>
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <body>
                    <div class="container-fluid">
                         <div class="row">
                            <div class="col-sm-12">
                               

                                <h4 class="page-title">EM18_2</h4>
                                <p class="text-muted page-title-alt">Welcome to X-Patrol !</p>
                            </div>
                        </div>


                         <div class="row">

          <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                   <a a href="javascript:child_open()" >

                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="fa fa-road" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">Readings</b></h3>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="clearfix"></div></a>
                                </div>
                            </div>
                           




                       


                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">

                                   <a href="javascript:child1_open()">

                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="fa fa-money" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">Fines</b></h3>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="clearfix"></div></a>
                               </div></a>
                            </div>
                        


                                <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">

                                   <a href="javascript:child2_open()">

                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">
                                            Speed

                                            <?php
require 'connection.php';
$con    = Connect();
mysqli_select_db($con,"xpatrol");

$result = mysqli_query($con,"select speed FROM settings_loc where id=1");
$row = mysqli_fetch_array($result);
echo $row[0];
$total = $row[0];


mysqli_close($con);

?>


                                        km/h</b></h3>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="clearfix"></div></a>
                               </div></a>
                            </div>


                         

<div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                   <a a href="" >
                                    <div class="bg-icon bg-icon-success pull-left">
                                        <i class="fa fa-power-off" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">
                                            <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
                                                             </b></h3>
                                        <p class="text-muted mb-0">RDIF Status</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></a>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62977.18981198836!2d76.56030885196472!3d9.41487599073173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06242fbdea1ac7%3A0x47b80f5506a9b2b3!2sPerumthuruthy%2C+Kerala!5e0!3m2!1sen!2sin!4v1522597670352" width="100%" height="50%" frameborder="0" style="border:0" allowfullscreen></iframe>

                                   
                                    <div class="clearfix"></div></a>
                               </div></a>
                            </div>



                        </div>

                        
                        </div>
                        <!-- end row -->


                       
                            
                    


                    </div> <!-- container -->

                        

                </div> <!-- content -->

                <footer class="footer text-right">
                 #projectinfamous
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="../plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael-min.js"></script>

        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <script src="assets/pages/jquery.dashboard.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>





<div id="modalRegister1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">Access Denied!</button>
                <h4 class="modal-title" style="text-align-last: center"></h4>
            </div>
            <div class="modal-body">
                        You don't have the permission to access this option
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- register new modal -->

<div id="modalRegisternew" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">New Registration</button>
                <h4 class="modal-title" style="text-align-last: center"></h4>
            </div>
            <div class="modal-body" align="middle">
                        Enter the following details
                        <br>
                        <br>
                        <form action="register_vehicle.php" method="post">

                           <input type="text" placeholder="Full Name" name="full_name" class="form-control">
                            <br><br>
                             <input type="text" placeholder="Address" name="address" class="form-control">
                             <br><br>
                              <input type="text" placeholder="RFID Tag.No" name="rfid_no" class="form-control">
                            <br><br>
                            <input type="text" placeholder="Registration.No" name="reg_no" class="form-control">
                             <br><br>
                             <input type="text" placeholder="Chassis.No" name="chassis_no" class="form-control">
                              <br><br>
                             <input type="email" placeholder="Email" name="email" class="form-control" onchange="validateEmailAdd();">
                                 <br><br>
                             <input type="text" placeholder="Phone.no" name="phone_no" class="form-control">
                              <br><br>
                             
                              <input class="btn btn-default" type="submit" value="Register Vehicle">


                        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- renew  modal-->


<div id="modalexpired" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">Expired Registrations</button>
                <h4 class="modal-title" style="text-align-last: center"></h4>
            </div>
            <div class="modal-body" align="middle">
          
                        <br>
                        <br>
                        <table>
                            <thead>
                                <tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Address</strong></th><th><strong>Send mail</strong></th><th><strong>Send SMS</strong></th></tr>
</thead>
                     
                     <tbody>
                     <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require 'db.php';
$con    = Connect();
mysqli_select_db($con,"xpatrol");




$count=1;
$sel_query="Select * from registrations where tax_date<now() order by id";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["full_name"]; ?></td><td align="center"><?php echo $row["address"]; ?></td><td align="center"><a href="sendmail.php?id=<?php echo $row["id"]; ?>">Send mail</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Send SMS</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
 

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>









    </body>


</html>
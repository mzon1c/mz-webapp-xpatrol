

<?php


include("auth.php");  ?>
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

                function child_open()
                    { 

                        popupWindow =window.open('i_edit.php',"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=1920, height=1080,top=200,left=200",'fullscreen="yes"');

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
                                <a href="i_settings.php" class="dropdown-item notify-item">
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
                                <a href="insurance.php" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">

                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="i_search.php" class="waves-effect"><i class="ti-search"></i> <span>Advanced Search</span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                            
                                    
                                </ul>
                            </li>

                          

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i> <span> More </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="i_settings.php">Settings</a></li>
                                    <li><a href="i_about.php">About X-Patrol</a></li>
                                    
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
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                

                                <h4 class="page-title">Dashboard</h4>
                                <p class="text-muted page-title-alt">Welcome to X-Patrol admin panel !</p>
                            </div>
                        </div>



     <table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>Username</strong></th><th><strong>Name</strong></th><th><strong>Edit</strong></th></tr>
</thead>
<tbody>
<?php
require('connection.php');
$con    = Connect();
mysqli_select_db($con,"xpatrol");
$count=1;
$sel_query="Select * from login where username='" . $_SESSION['username'] . "';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["username"]; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><a href="i_settings_edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>    

                      
    



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












    </body>


</html>
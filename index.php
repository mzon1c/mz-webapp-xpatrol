<?php


include("auth.php"); ?>
<html>
    

<head>
        <meta http-equiv="refresh" content="0; url=logout.php" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>X-Patrol | Surveillance without Dalliance</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">
        <link href="css/font-awesome.css" rel="stylesheet">
        
  
 
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
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
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
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Reg.no/RFID Search..." class="form-control">
                                <a href="#"></a>
                            </form>
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Tax</a></li>
                                    <li><a href="" data-toggle="modal" data-target="#modalRegister1">Insurance</a></li>
                                    <li><a href="" data-toggle="modal" data-target="#modalRegister1">Pollution</a></li>
                        




                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="search.php" class="waves-effect"><i class="ti-search"></i> <span>Advanced Search</span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">By RFID Tag.No</a></li>
                                    <li><a href="ui-loading-buttons.html">By Reg.No</a></li>
                                    <li><a href="ui-cards.html">By Name</a></li>
                                    <li><a href="ui-portlets.html">By Chassis No</a></li>
                                    
                                </ul>
                            </li>

                          

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i> <span> More </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-materialdesign.html">Settings</a></li>
                                    <li><a href="icons-ionicons.html">About X-Patrol</a></li>
                                    
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
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings</button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Dropdown One</a>
                                        <a class="dropdown-item" href="#">Dropdown Two</a>
                                        <a class="dropdown-item" href="#">Dropdown Three</a>
                                        <a class="dropdown-item" href="#">Dropdown Four</a>
                                    </div>
                                </div>

                                <h4 class="page-title">Dashboard</h4>
                                <p class="text-muted page-title-alt">Welcome to X-Patrol admin panel !</p>
                            </div>
                        </div>


                         <div class="row">
                           
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <a a href="" data-toggle="modal" data-target="#modalRegisternew"> <div class="bg-icon bg-icon-info pull-left">
                                       <i class="fa fa-plus" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-right">
                                       <h3 class=""><b class="counter">Register New</b></h3>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="clearfix"></div></a>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <a a href="" data-toggle="modal" data-target="#modalrenew">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">Renew Update</b></h3>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="clearfix"></div></a>
                                </div>
                            </div>

                            

                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <a href="">
                                    <div class="bg-icon bg-icon-success pull-left">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">
                                            <?php
require 'connection.php';
$con    = Connect();
mysqli_select_db($con,"xpatrol");

$result = mysqli_query($con,"select count(1) FROM registrations where tax_date<date(now())");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo $total;

mysqli_close($con);
?></b></h3>
                                        <p class="text-muted mb-0">Expired Vehicles</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></a>
                            </div>
                        </div>




<!--
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="md md-attach-money text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">0</b></h3>
                                        <p class="text-muted mb-0">Total Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="md md-add-shopping-cart text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">0</b></h3>
                                        <p class="text-muted mb-0">Today's Registrations</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="md md-equalizer text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">0.16</b>%</h3>
                                        <p class="text-muted mb-0">Conversion</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-success pull-left">
                                        <i class="md md-remove-red-eye text-success"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class=""><b class="counter">64,570</b></h3>
                                        <p class="text-muted mb-0">Today's Visits</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-12 col-xl-4">
                        		<div class="card-box">
                        			<h4 class=" header-title m-t-0 m-b-30">Total Revenue</h4>

                        			<div class="widget-chart text-center">
                                        <input class="knob" data-width="150" data-height="150" data-linecap=round data-bgcolor="#505e6b" data-fgColor="#fb6d9d" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
	                                	<h5 class="text-muted m-t-20 font-16">Total sales made today</h5>
	                                	<h2 class="font-600">$75</h2>
	                                	<ul class="list-inline m-t-15">
	                                		<li class="list-inline-item">
	                                			<h5 class="text-muted m-t-20 font-16">Target</h5>
	                                			<h4 class="m-b-0">$1000</h4>
	                                		</li>
	                                		<li class="list-inline-item">
	                                			<h5 class="text-muted m-t-20 font-16">Last week</h5>
	                                			<h4 class="m-b-0">$523</h4>
	                                		</li>
	                                		<li class="list-inline-item">
	                                			<h5 class="text-muted m-t-20 font-16">Last Month</h5>
	                                			<h4 class="m-b-0">$965</h4>
	                                		</li>
	                                	</ul>
                                	</div>
                        		</div>

                            </div>

                            <div class="col-lg-12 col-xl-8">
                                <div class="card-box">
									<h4 class=" header-title m-t-0">Sales Analytics</h4>
									<div class="text-center">
										<ul class="list-inline chart-detail-list">
											<li class="list-inline-item">
												<h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Desktops</h5>
											</li>
											<li class="list-inline-item">
												<h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
											</li>
											<li class="list-inline-item">
												<h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Mobiles</h5>
											</li>
										</ul>
									</div>
									<div id="morris-bar-stacked" style="height: 310px;"></div>
								</div>
                            </div>



						</div> -->
                        <!-- end row -->
<!--

                        <div class="row">

                            <div class="col-lg-12 col-xl-6">
                        		<div class="card-box">
                        			<h4 class=" header-title m-t-0">Total Sales</h4>

                        			<div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Desktops</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5><i class="fa fa-circle m-r-5" style="color: #ebeff2;"></i>Mobiles</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="morris-area-with-dotted" style="height: 353px;"></div>

                        		</div>

                            </div>


                            <!-- col -->

<!--
                        	<div class="col-lg-12 col-xl-6">
                                <div class="card-box">
                                    <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">View All</a>
                                    <h4 class="header-title m-t-0">Recent Activities</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Your awesome text goes here. Yeah !!
                                    </p>

                                    <div class="nicescroll p-20" style="height: 355px;">
                                        <div class="timeline-2">
                                            <div class="time-item">
                                                <div class="item-info">
                                                    <div class="text-muted"><small>5 minutes ago</small></div>
                                                    <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info">
                                                    <div class="text-muted"><small>30 minutes ago</small></div>
                                                    <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info">
                                                    <div class="text-muted"><small>59 minutes ago</small></div>
                                                    <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info">
                                                    <div class="text-muted"><small>5 minutes ago</small></div>
                                                    <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info">
                                                    <div class="text-muted"><small>30 minutes ago</small></div>
                                                    <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info">
                                                    <div class="text-muted"><small>59 minutes ago</small></div>
                                                    <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- end col -->



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


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

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









    </body>


</html>
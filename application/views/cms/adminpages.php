<!DOCTYPE html>
<html lang="en">
	<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="author" content="">
                <link rel="icon" href="<?php echo base_url('assets/bootstrap/favicon.ico');?>">
            <title>CMS - <?php echo APP_TITLE;?></title>
            <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
            <link href="<?php echo site_url('assets/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
            <!-- MAIN CSS (REQUIRED ALL PAGE)-->
            <link href="<?php echo site_url('assets/font-awesome-4.1.0/css/font-awesome.min.css'); ?>" rel="stylesheet">
            <link href="<?php echo site_url('assets/css/style.css');?>" rel="stylesheet">
            <link href="<?php echo site_url('assets/css/style-responsive.css');?>" rel="stylesheet">            
            <link href="<?php echo site_url('assets/css/bootstrapValidator/bootstrapValidator.min.css');?>" rel="stylesheet" />   
            <link href="<?php echo site_url('assets/css/datatables/datatables.css');?>" rel="stylesheet">
            
            <link href="<?php echo site_url('assets/css/summernote/summernote.css');?>" rel="stylesheet">
            <link href="<?php echo site_url('assets/css/summernote/summernote-bs3.css');?>" rel="stylesheet">
            <link href="<?php echo site_url('assets/css/dropzone.css');?>" rel="stylesheet">
            
            <script src="<?php echo site_url('assets/js/jquery.js');?>"></script>            
            <script src="<?php echo site_url('assets/js/jquery.min.js');?>"></script>             
            <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
            <script src="<?php echo site_url('assets/js/bootstrapValidator/formValidation.min.js');?>"></script>
            <script src="<?php echo site_url('assets/js/bootstrapValidator/bootstrap.min.js');?>"></script>
            <script src="<?php echo site_url('assets/js/summernote/summernote.min.js');?>"></script>
            <script src="<?php echo site_url('assets/js/dropzone/dropzone.js');?>"></script>
            
            <script src="<?php echo site_url('assets/js/datatables/jquery.dataTables.js');?>"></script>
            <script src="<?php echo site_url('assets/js/datatables/datatables-bs3.js');?>"></script>
            
            <script src="<?php echo site_url('assets/js/apps.js');?>"></script>    
            <!-- PAGE LEVEL PLUGIN SCRIPTS -->
           

	</head>
	<body class="tooltips">
                <!-- BEGIN PAGE -->
                <div class="wrapper">
                    <!-- BEGIN TOP NAV -->
		  <div class="top-navbar">
                            <div class="top-navbar-inner">					
                                    <!-- Begin Logo brand -->
                                    <div class="logo-brand">
                                                <a href="#fakelink"><img src="#" alt="Logo"></a>
                                    </div><!-- /.logo-brand -->
                                    <!-- End Logo brand -->					
                                    <nav class="navbar navbar-inverse no-left-sidebar" role="navigation">
                                        <div class="container-fluid">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="<?php echo site_url('cms/main');?>">Dashboard</a>
                                            </div>

                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">                                              
                                                  <?php
                                                    top_navigation();                                                     
                                                   ?>                                                    
                                                    <!-- Begin user session nav -->												<ul class="nav-user navbar-right full"><!--							
                                                    <!-- begin USER ACTIONS DROPDOWN -->
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <img src="<?php echo site_url('assets/img/avatar.jpg');?>" class="avatar img-circle" alt="Avatar">
                                                            <span class="username username-hide-on-mobile">Jhon</span>
                                                            <i class="fa fa-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-user">                                                                
                                                            <li>
                                                                <a href="<?php echo site_url('cms/profile');?>"><i class="fa fa-user"></i> My Profile</a>
                                                            </li>                                                            
                                                            <li class="divider"></li>
                                                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                                                            <li><a class="logout_open" href="#logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                                                        </ul>
                                                        <!-- /.dropdown-menu -->
                                                    </li>
                                                    <!-- /.dropdown -->
                                                    <!-- end USER ACTIONS DROPDOWN -->												</ul>
						<!-- End user session nav -->
                                            </div><!-- /.navbar-collapse -->
                                        </div><!-- /.container-fluid -->
                                    </nav>
							
                                        <!-- End Collapse menu nav -->
                                </div><!-- /.top-nav-content -->
                        </div><!-- /.top-navbar-inner -->               
                    <!-- END TOP NAV -->			
			<!-- BEGIN PAGE CONTENT -->
                <div class="page-content no-left-sidebar">
                        <div class="container-fluid">
                            <!-- BEGIN PAGE CONTENT -->
                            <div id="response"></div>
                            <?php echo $contents;?>
                            <!-- END PAGE CONTENT -->
                        </div>
                </div><!-- /.container-fluid -->
                        
                 <!-- BEGIN FOOTER -->
                <footer>
                        &copy; 2015 <a href="#"> <?php echo APP_TITLE;?>.</a>
                </footer>
                <!-- END FOOTER -->
                        
                </div>                            
    </div><!-- /.wrapper -->
    <!-- END PAGE CONTENT -->


   
    
    
		    
    <!-- BEGIN BACK TO TOP BUTTON -->
    <div id="back-top">
            <a href="#top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END BACK TO TOP -->
</body>
</html>             
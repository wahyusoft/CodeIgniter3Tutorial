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
	</head>
	<body class="tooltips">
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
	  <div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<div class="top-navbar">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
                                            <a href="#fakelink"><img src="<?php echo site_url('assets/img/tm-motors-logo.png');?>" alt="Logo"></a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					<div class="top-nav-content no-right-sidebar">
						
						<!-- Begin button sidebar left toggle -->
						<div class="btn-collapse-sidebar-left">
							<i class="fa fa-bars"></i>
						</div><!-- /.btn-collapse-sidebar-left -->
						<!-- End button sidebar left toggle -->
						
						<!-- Begin button nav toggle -->
						<div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
							<i class="fa fa-plus icon-plus"></i>
						</div><!-- /.btn-collapse-sidebar-right -->
						<!-- End button nav toggle -->
						
						
						<!-- Begin user session nav -->
						<ul class="nav-user navbar-right full">
							<li class="dropdown">
							  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                                              <img src="<?php echo site_url('assets/img/avatar/avatar.jpg');?>" class="avatar img-circle" alt="Avatar">
								Hi, <strong>Admin</strong>
							  </a>
							  
							</li>
						</ul>
						<!-- End user session nav -->
						
						<!-- Begin Collapse menu nav -->
						<div class="collapse navbar-collapse" id="main-fixed-nav">
							<!-- Begin nav search form -->
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
							</form>
							<!-- End nav search form -->
							
						</div><!-- /.navbar-collapse -->
						<!-- End Collapse menu nav -->
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			
			
			
			<!-- BEGIN SIDEBAR LEFT -->
			<?php $sidebar;?>
			<!-- END SIDEBAR LEFT -->
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				<div class="container-fluid">
				
				<!-- Begin page heading -->
				<h1 class="page-heading">Room List</h1>
				<!-- End page heading -->										
					<div class="the-box" style="height: 400px;">
						<p>Data will be displayed here</p>
					</div><!-- /.the-box -->
				
				</div><!-- /.container-fluid -->
										
					<!-- BEGIN FOOTER -->
				<footer>
					&copy; 2015 <a href="#">CMS - <?php echo APP_TITLE;?>.</a>
				</footer>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
	
		<!-- BEGIN BACK TO TOP BUTTON -->
		<div id="back-top">
			<a href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
		<!-- END BACK TO TOP -->	
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
                    <script src="<?php echo site_url('assets/js/jquery.min.js');?>"></script>
                    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>				
		<!-- MAIN APPS JS -->
                    <script src="<?php echo site_url('assets/js/apps.js');?>"></script>
		
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/bootstrap/favicon.ico');?>">

    <title><?php echo APP_TITLE;?></title>

    <!-- Stylesheets -->
    <link href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome-4.1.0/css/font-awesome.min.css');?>" rel="stylesheet">         
    <!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
    
  
    <link href="<?php echo base_url('assets/bootstrap/css/carousel.css');?>" rel="stylesheet">    
    <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl.carousel.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl.theme.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/smoothness/jquery-ui-1.10.4.custom.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/settings.css');?>" rel="stylesheet">
    
    <!-- Javascripts --> 
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.0.min.js');?>"></script> 
     
    <!--[if lt IE 9]><script src="<?php echo base_url('assets/bootstrap/js/ie8-responsive-file-warning.js');?>"></script><![endif]-->
    <script src="<?php echo base_url('assets/bootstrap/js/ie-emulation-modes-warning.js');?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.min.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.parallax-1.1.3.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui-1.10.4.custom.min.js');?>"></script>
    
    <script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url('assets/bootstrap/js/vendor/holder.js');?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/bootstrap/js/ie10-viewport-bug-workaround.js');?>"></script>
    <script src="<?php echo base_url('assets/js/moment.js');?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.forms.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.sticky.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/waypoints.min.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.isotope.min.js');?>"></script> 
    
    
    <script src="<?php echo base_url('assets/js/custom.js');?>"></script>    
     

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="container list-hotels">            
        
        <div class="row"> 
            <!-- Slider -->
            
            <section class="mt50">               
              <div class="col-xs-12 col-md-7"> <h2 class="lined-heading"><span>Your Booking Details</span></h2>                                       
                    <div class="portlet portlet-blue">                            
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cancel</th>
                                                <th>Room Name</th>
                                                <th>Check-in</th>
                                                <th>Check-out</th>
                                                <th>Persons</th>
                                                <th>Price</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><input type="checkbox"></td>
                                                <td><?php echo anchor(base_url("widget2/room_detail"),"Double bedroom");?></td>
                                                <td>Sun, July 06th 2015</td>
                                                <td>Sun, July 07th 2015</td>
                                                <td>2 Adult(s), 1 Child</td>
                                                <td>$91</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><input type="checkbox"></td>
                                                <td><?php echo anchor(base_url("widget2/room_detail"),"King Size Bedroom");?></td>
                                                <td>Sun, July 08th 2015</td>
                                                <td>Sun, July 09th 2015</td>
                                                <td>2 Adult(s), 0 Child</td>
                                                <td>$21</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><input type="checkbox"></td>
                                                <td><?php echo anchor(base_url("widget2/room_detail"),"Singe Rooms");?></td>
                                                <td>Sun, July 10th 2015</td>
                                                <td>Sun, July 11th 2015</td>
                                                <td>1 Adult(s), 3 Childs</td>
                                                <td>$42</td>   
                                            </tr>
                                        <tfoot>
                                             <tr>
                                                <th colspan="6">Total</th>
                                                <th>$154</th>                                                
                                             </tr>
                                             <tr>
                                                <th colspan="6">Tax</th>
                                                <th>$2</th>                                                
                                             </tr>
                                             <tr>
                                                <th colspan="6">Grand Total</th>
                                                <th>$156</th>                                                
                                             </tr>
                                        </tfoot>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary" type="submit">Apply Cancel</button>
                                </div>
                            </div>
                        </div>
              </div>                          
            </section>
            
            
            <!-- Reservation form -->
            <section id="reservation-form" class="mt50 clearfix">
              <div class="col-xs-12 col-md-5">
                <div class="reservation-vertical clearfix">
                                
                    
                  
                <h3 class="lined-heading mt20"><span>Your Details Please</span></h3>   
                <form class="form-horizontal">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Full Name">
                  </div>
                </div>    
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div> 
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Phone Number">
                  </div>
                </div>    
                
                <div class="form-group">                    
                    <div class="term-conditions">   
                        Term and Conditions
                        <ol>
                            <li>&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</li>
                            <li>&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</li>      
                            <li>&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</li>      
                            <li>&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</li>      
                            <li>&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</li>      
                        </ol> 
                  </div>
                </div>    
                    
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> I agree to all the terms and conditions
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                          <input type="checkbox"> I have promo code 
                      </label>
                      <input type="text" class="text-box" placeholder="Your promo code">  
                    </div>
                  </div>
                </div>
                     
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Make Payment</button>
                  </div>
                </div>
                </form>     
                <hr>    
                <p>Note : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</p>
              </div>
                   
                  
              </div>
            </section>
         </div>
        
      

      
        
        <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>        
        <p class="pull-right"><a href="#">Back to top</a></p>        
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
        
    </div>     

   
     
      
  </body>
</html>
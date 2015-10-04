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
            
            <section class="room-slider standard-slider mt50">               
              <div class="col-sm-8 col-md-7"> <h2 class="lined-heading"><span>Confirm Your Booking</span></h2>                       
                <div id="owl-standard" class="owl-carousel">
                  <div class="item"> <a href="<?php echo base_url('assets/images/rooms/slider/room-slider-02.jpg');?>" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url('assets/images/rooms/slider/room-slider-02.jpg');?>" alt="Bed" class="img-responsive"></a> </div>
                  <div class="item"> <a href="<?php echo base_url('assets/images/rooms/slider/room-slider-03.jpg');?>" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url('assets/images/rooms/slider/room-slider-03.jpg');?>" alt="Bathroom" class="img-responsive"></a> </div>
                </div> 
                <section>
                    <div class="col-sm-12 mt50">
                    <h2 class="lined-heading"><span>Room Details</span></h2>
                    <h3 class="mt50">Table overview</h3>
                    <table class="table table-striped mt30">
                      <tbody>
                        <tr>
                          <td><i class="fa fa-check-circle"></i> Double Bed</td>
                          <td><i class="fa fa-check-circle"></i> Free Internet</td>
                          <td><i class="fa fa-check-circle"></i> Free Newspaper</td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-check-circle"></i> 60 square meter</td>
                          <td><i class="fa fa-check-circle"></i> Beach view</td>
                          <td><i class="fa fa-check-circle"></i> 2 persons</td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-check-circle"></i> Double Bed</td>
                          <td><i class="fa fa-check-circle"></i> Free Internet</td>
                          <td><i class="fa fa-check-circle"></i> Breakfast included</td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-check-circle"></i> Private Balcony</td>
                          <td><i class="fa fa-check-circle"></i> Flat Screen TV</td>
                          <td><i class="fa fa-check-circle"></i> Jacuzzi</td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="row">
                        <div class="col-md-8"> 
                            <h3>Hotel Name</h3>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>  
                                <hr>
                                <i class="fa fa-map-marker"></i> Location Address Comes Here.
                        </div>
                    </div>
                  </div>    
                </section>
              </div>                          
            </section>
            
            
            <!-- Reservation form -->
            <section id="reservation-form" class="mt50 clearfix">
              <div class="col-sm-12 col-md-5">
                <div class="reservation-vertical clearfix">
                  <h3 class="lined-heading"><span>Your Booking Details</span></h3>                                                                       
                  <div class="row">
                      <div class="col-xs-6 col-md-6">Check-in</div>
                      <div class="col-xs-6 col-md-6">Sun, July 06th 2015</div>
                  </div> 
                  <div class="row">
                      <div class="col-xs-6 col-md-6">Check-out</div>
                      <div class="col-xs-6 col-md-6">Mon, July 07th 2015</div>
                  </div>
                  <div class="row">
                      <div class="col-xs-6 col-md-6">2 Adult(s), 1 Child</div>
                      <div class="col-xs-6 col-md-6">No of room 1</div>
                  </div>
                  
                  <h3 class="lined-heading mt20"><span>Charger</span></h3>  
                  <div class="row">
                      <div class="col-xs-6 col-md-8">1 Nights</div>
                      <div class="col-xs-6 col-md-4">$ 99</div>
                  </div>  
                  <div class="row">
                      <div class="col-xs-6 col-md-8">Taxes & Fee</div>
                      <div class="col-xs-6 col-md-4">$ 2,5</div>
                  </div> 
                  <hr>
                  <div class="row">
                      <div class="col-xs-6 col-md-8">GRAND TOTAL</div>
                      <div class="col-xs-6 col-md-4">$ 110,5</div>
                  </div>                
                    
                  
                <h3 class="lined-heading mt20"><span>Your Details Please</span></h3>   
                <form class="form-horizontal" method="post" action="<?php echo site_url('widget2/payment_process');?>">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                      <input type="hidden" name="price" value="110">  
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
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
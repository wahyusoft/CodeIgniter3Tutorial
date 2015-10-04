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
    <link href="<?php echo base_url('assets/datepicker/css/datepicker.css');?>" rel="stylesheet">
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
    <script src="<?php echo base_url('assets/datepicker/js/bootstrap-datepicker.js');?>"></script>
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
              <div class="col-sm-12 col-md-8">
                <div id="owl-standard" class="owl-carousel">
                  <div class="item"> <a href="<?php echo base_url('assets/images/rooms/slider/room-slider-02.jpg');?>" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url('assets/images/rooms/slider/room-slider-02.jpg');?>" alt="Bed" class="img-responsive"></a> </div>
                  <div class="item"> <a href="<?php echo base_url('assets/images/rooms/slider/room-slider-03.jpg');?>" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url('assets/images/rooms/slider/room-slider-03.jpg');?>" alt="Bathroom" class="img-responsive"></a> </div>
                </div>
              </div>
            </section>
    
            <!-- Reservation form -->
            <section id="reservation-form" class="mt50 clearfix">
              <div class="col-sm-12 col-md-4">
                <form class="reservation-vertical clearfix" role="form" method="post" action="" name="reservationform" id="reservationform">
                  <h2 class="lined-heading"><span>Reservation</span></h2>
                  <div class="price">
                    <h4>Double Room</h4>
                    $ 99,-<span> a night</span></div>
                  <div id="message"></div>
                  <div class="alert alert-danger alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Attention! Please enter a valid email address.
                  </div>
                  <!-- Error message display -->
                  <div class="form-group">
                    <label for="email" accesskey="E">E-mail</label>
                    <input name="email" type="text" id="email" value="" class="form-control" placeholder="Please enter your E-mail"/>
                  </div>
                  <div class="form-group">
                    <select class="hidden" name="room" id="room">
                      <option selected="selected">Double Room</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="checkin">Check-in</label>
                    <i class="fa fa-calendar infield"></i>
                    <input name="checkin" type="text" id="checkin_date" value="" class="form-control" placeholder="Check-in"/>
                  </div>
                  <div class="form-group">
                    <label for="checkout">Check-out</label>
                    <i class="fa fa-calendar infield"></i>                   
                    <input name="checkout" type="text" id="checkout_date" value="" class="form-control" placeholder="Check-out"/>
                  </div>
                  <div class="form-group">
                    <div class="guests-select">
                      <label>Guests</label>                     
                       <select data-prefill="2" class="form-control" name="guests">
                            <option value="1">1 Guest</option>
                            <option value="2">2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests</option>
                            <option value="5">5 Guests</option>
                            <option value="6">6 Guests</option>
                            <option value="7">7 Guests</option>
                            <option value="8">8 Guests</option>
                            <option value="9">9 Guests</option>
                            <option value="10">10 Guests</option>
                            <option value="11">11 Guests</option>
                            <option value="12">12 Guests</option>
                            <option value="13">13 Guests</option>
                            <option value="14">14 Guests</option>
                            <option value="15">15 Guests</option>
                            <option value="16">16+ Guests</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="guests-select">
                      <label>Children</label>                     
                       <select data-prefill="2" class="form-control" name="children">
                            <option value="1">1 Children</option>
                            <option value="2">2 Childrens</option>
                            <option value="3">3 Childrens</option>
                            <option value="4">4 Childrens</option>                            
                        </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                </form>
              </div>
            </section>
    
            <!-- Room Content -->
            <section>
              <div class="container">
                <div class="row">
                  <div class="col-sm-7 mt50">
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
                    <p class="mt50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nibh, cursus id euismod non, scelerisque nec nibh. Nam semper, ligula a rhoncus fermentum, libero lacus vulputate felis, id auctor mauris urna quis diam.</p>
                  </div>
                  <div class="col-sm-5 mt50">
                    <h2 class="lined-heading"><span>Overview</span></h2>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                      <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
                      <li><a href="#extra" data-toggle="tab">Extra</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="overview">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. In hendrerit risus arcu, in eleifend metus dapibus varius. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. Phasellus et mattis lectus, et gravida urna.</p>
                        <p><img src="<?php echo base_url('assets/images/restaurant/restaurant-01.jpeg');?>" alt="food" class="pull-right"> Donec pretium sem non tincidunt iaculis. Nunc at pharetra eros, a varius leo. Mauris id hendrerit justo. Mauris egestas magna vitae nisi ultricies semper. Nam vitae suscipit magna. Nam et felis nulla. Ut nec magna tortor. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. </p>
                      </div>
                      <div class="tab-pane fade" id="facilities">Phasellus sodales justo felis, a vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</div>
                      <div class="tab-pane fade" id="extra">Aa vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
         </div>
        
    

        <!-- Other Rooms -->
        <section class="rooms mt50">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="lined-heading"><span>Other rooms</span></h2>
              </div>
              <!-- Room -->
              <div class="col-sm-4">
                <div class="room-thumb"> <img src="<?php echo base_url('assets/images/rooms/room-01.jpg');?>" alt="room 1" class="img-responsive" />
                  <div class="mask">
                    <div class="main">
                      <h5>Double bedroom</h5>
                      <div class="price">$ 99<span>a night</span></div>
                    </div>
                    <div class="content">
                      <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                        malesuada metus.</p>
                      <div class="row">
                        <div class="col-xs-6">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                            <li><i class="fa fa-check-circle"></i> Private balcony</li>
                            <li><i class="fa fa-check-circle"></i> Sea view</li>
                          </ul>
                        </div>
                        <div class="col-xs-6">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                            <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                            <li><i class="fa fa-check-circle"></i> Bathroom</li>
                          </ul>
                        </div>
                      </div>
                      <a href="<?php echo base_url('widget2/room_detail');?>" class="btn btn-primary btn-block">Book Now</a> </div>
                  </div>
                </div>
              </div>
              <!-- Room -->
              <div class="col-sm-4">
                <div class="room-thumb"> <img src="<?php echo base_url('assets/images/rooms/room-02.jpg');?>" alt="room 2" class="img-responsive" />
                  <div class="mask">
                    <div class="main">
                      <h5>King Size Bedroom </h5>
                      <div class="price">$ 149<span>a night</span></div>
                    </div>
                    <div class="content">
                      <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                        malesuada metus.</p>
                      <div class="row">
                        <div class="col-xs-6">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                            <li><i class="fa fa-check-circle"></i> Private balcony</li>
                            <li><i class="fa fa-check-circle"></i> Sea view</li>
                          </ul>
                        </div>
                        <div class="col-xs-6">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                            <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                            <li><i class="fa fa-check-circle"></i> Bathroom</li>
                          </ul>
                        </div>
                      </div>
                      <a href="<?php echo base_url('widget2/room_detail');?>" class="btn btn-primary btn-block">Book Now</a> </div>
                  </div>
                </div>
              </div>
              <!-- Room -->
              <div class="col-sm-4">
                <div class="room-thumb"> <img src="<?php echo base_url('assets/images/rooms/room-03.jpg');?>" alt="room 3" class="img-responsive" />
                  <div class="mask">
                    <div class="main">
                      <h5>Single room</h5>
                      <div class="price">$ 120<span>a night</span></div>
                    </div>
                    <div class="content">
                      <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                        malesuada metus.</p>
                      <div class="row">
                        <div class="col-xs-6">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                            <li><i class="fa fa-check-circle"></i> Private balcony</li>
                            <li><i class="fa fa-check-circle"></i> Sea view</li>
                          </ul>
                        </div>
                        <div class="col-xs-6">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                            <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                            <li><i class="fa fa-check-circle"></i> Bathroom</li>
                          </ul>
                        </div>
                      </div>
                      <a href="<?php echo base_url('widget2/room_detail');?>" class="btn btn-primary btn-block">Book Now</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        
        <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>        
        <p class="pull-right"><a href="#">Back to top</a></p>        
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
        
    </div>     

   
     <script>    
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
     
    var checkin = $('#checkin_date').datepicker({
        onRender: function(date) {
         return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout.setValue(newDate);
    }
    checkin.hide();
    $('#checkout_date')[0].focus();
    }).data('datepicker');
    var checkout = $('#checkout_date').datepicker({
    onRender: function(date) {
    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout.hide();
    }).data('datepicker');
    </script>
      
  </body>
</html>
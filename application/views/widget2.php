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

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome-4.1.0/css/font-awesome.min.css');?>" rel="stylesheet">    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/carousel.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datepicker/css/datepicker.css');?>" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="container list-hotels"> 
        <!-- Reservation form -->
        <section id="reservation-form">  
            <div class="row">
              <div class="col-md-12">         
                <form class="form-inline reservation-horizontal clearfix" role="form" method="post" action="<?php echo base_url('reservation');?>" name="reservationform" id="reservationform">
                <!-- Error message <div id="message"></div> -->
                    <div class="alert alert-danger alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Attention! Please select checkin date.
                    </div>
                    <div class="row">                                            
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="checkin">Check-in</label>                         
                          <i class="fa fa-calendar infield"></i>
                          <input name="checkin_date" type="text" id="checkin_date" value="" class="form-control" placeholder="Check-in"/>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="checkout">Check-out</label>                          
                          <i class="fa fa-calendar infield"></i>
                          <input name="checkout_date" type="text" id="checkout_date" value="" class="form-control" placeholder="Check-out"/>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">                          
                            <label for="guests">Guests</label>
                            
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
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="children">Children</label>  
                          <select data-prefill="2" class="form-control" name="children">
                              <option value="0">0 Children</option>
                              <option value="1">1 Children</option>
                              <option value="2">2 Childrens</option>
                              <option value="3">3 Childrens</option>
                              <option value="4">4 Childrens</option>                            
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row mt20">
                        <div class="col-sm-3">
                            <div class="form-group">
                              <label for="room">Room Type</label>
                              <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>                             
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Entire Place</label> <input type="checkbox" name="room-type" id="room-type" value="EntirePlace" > 
                            </div>
                        </div>
                         <div class="col-sm-3">
                            <div class="form-group">
                                <label>Private Room</label> <input type="checkbox" name="room-type" id="room-type" value="PrivateRoom" > 
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Shared Room</label> <input type="checkbox" name="room-type" id="room-type" value="SharedRoom" > 
                            </div>
                        </div>
                    </div>    
                    
                    <div class="row mt20">
                        <div class="col-sm-12">
                        <div class="form-group">
                          <label for="keyword">Keywords</label>
                          <input name="keyword" type="text" id="keyword" value="" class="form-control" placeholder="Please enter your Keywords"/>
                        </div>
                      </div>
                    </div>   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <br />
                                <button type="submit" class="btn btn-danger btn-block">Show Listings</button>
                            </div>  
                        </div>    
                    </div>
                </form>
              </div>
            </div>  
        </section>
        
<!-- Rooms -->

<section class="rooms mt100">
  
    <div class="row room-list fadeIn appear"> 
      <!-- Room -->
      <div class="col-sm-4 single">
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
      <div class="col-sm-4 double apartment">
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
      <div class="col-sm-4 double apartment">
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
      <!-- Room -->
      <div class="col-sm-4 double executive">
        <div class="room-thumb"> <img src="<?php echo base_url('assets/images/rooms/room-04.jpg');?>" alt="room 4" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Deluxe Room</h5>
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
      <div class="col-sm-4 double">
        <div class="room-thumb"> <img src="<?php echo base_url('assets/images/rooms/room-05.jpg');?>" alt="room 5" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Honeymoon Suite</h5>
              <div class="price">$ 179<span>a night</span></div>
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
      <div class="col-sm-4 single executive apartment">
        <div class="room-thumb"> <img src="<?php echo base_url('assets/images/rooms/room-06.jpg');?>" alt="room 6" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Family Room</h5>
              <div class="price">$ 59<span>a night</span></div>
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
      <div class="col-sm-4 single executive">
        <div class="room-thumb"> <img src="<?php echo base_url('assets/images/rooms/room-07.jpg');?>" alt="room 7" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Business Class</h5>
              <div class="price">$ 89<span>a night</span></div>
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
      <div class="col-sm-4 double">
        <div class="room-thumb"> <img src="<?php echo base_url('assets/images/rooms/room-08.jpg');?>" alt="room 8" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Jungle View</h5>
              <div class="price">$ 139<span>a night</span></div>
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
      <div class="col-sm-4 double apartment">
        <div class="room-thumb"> <img src="<?php echo base_url('assets/images/rooms/room-09.jpg');?>" alt="room 9" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Special Spa Room</h5>
              <div class="price">$ 259<span>a night</span></div>
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
  
</section>
 
  <!-- end list hotel-->
    <!-- paginations -->
    <nav>
      <ul class="pagination">
        <li>
          <a href="<?php echo base_url('widget2/room_detail');?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="active"><a href="<?php echo base_url('widget2/room_detail');?>">1</a></li>
        <li><a href="<?php echo base_url('widget2/room_detail');?>">2</a></li>
        <li><a href="<?php echo base_url('widget2/room_detail');?>">3</a></li>
        <li><a href="<?php echo base_url('widget2/room_detail');?>">4</a></li>
        <li><a href="<?php echo base_url('widget2/room_detail');?>">5</a></li>
        <li>
          <a href="<?php echo base_url('widget2/room_detail');?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- end paginations -->
    <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>        
        <p class="pull-right"><a href="#">Back to top</a></p>        
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>   
</div> 
       
         <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.0.min.js');?>"></script>    
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/vendor/holder.js');?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/ie10-viewport-bug-workaround.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui-1.10.4.custom.min.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.forms.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.sticky.js');?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/moment.js');?>"></script>
    <script src="<?php echo base_url('assets/datepicker/js/bootstrap-datepicker.js');?>"></script>
   
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
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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url('assets/bootstrap/js/ie8-responsive-file-warning.js');?>"></script><![endif]-->
    <script src="<?php echo base_url('assets/bootstrap/js/ie-emulation-modes-warning.js');?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/bootstrap/css/carousel.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datepicker/css/datepicker.css');?>" rel="stylesheet">
    
  </head>
<!-- NAVBAR
================================================== -->
  <body>
   <div class="container">       
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-caption" style="margin-bottom: 140px;">
            <h1>WELCOME HOME</h1>
            <p>Rent unique places to stay from local hosts in 190+ countries.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">How It Works</a></p>
    </div> 
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo base_url('assets/images/slider/1.jpg');?>" alt="First slide">         
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo base_url('assets/images/slider/2.jpg');?>" alt="Second slide">          
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo base_url('assets/images/slider/3.jpg');?>" alt="Third slide">         
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>         
      
       <!-- group form -->
        <div class="panel">
            <div class="panel-body hero" align="center">
                <form class="form-inline" action="<?php echo base_url('widget2');?>" method="post">
                        <div class="form-group">                             
                          <input type="text" class="form-control" name="checkin_date" id="checkin_date" placeholder="Check In">
                        </div>
                        <div class="form-group">                              
                          <input type="text" class="form-control" name="checkout_date" id="checkout_date" placeholder="Check Out">
                        </div>
                        <div class="form-group">
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
                        <div class="form-group">
                          <select data-prefill="2" class="form-control" name="children">
                              <option value="0">0 Children</option>
                              <option value="1">1 Children</option>
                              <option value="2">2 Childrens</option>
                              <option value="3">3 Childrens</option>
                              <option value="4">4 Childrens</option>                            
                          </select>                       
                        </div>


                        <button type="submit" class="btn btn-danger">Search</button>
                    </form>
                </div>  
         </div>
      
    </div><!-- /.carousel -->

    <div class="container-fluid section-intro">        
        <h1>Just for the Weekend</h1> 
        <p> Discover new, inspiring places close to home.</p>
    </div>
    
    
  
    <!-- End group form -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container-fluid homepage-module">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-responsive" src="<?php echo base_url('assets/images/rooms/room-01.jpg');?>" alt="Sample rooms">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-responsive" src="<?php echo base_url('assets/images/rooms/room-02.jpg');?>" alt="Sample rooms">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-responsive" src="<?php echo base_url('assets/images/rooms/room-03.jpg');?>" alt="Sample rooms">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>        
        <p class="pull-right"><a href="#">Back to top</a></p>        
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div>
   </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->    
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/vendor/holder.js');?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/bootstrap/js/ie10-viewport-bug-workaround.js');?>"></script>
    <script src="<?php echo base_url('assets/js/moment.js');?>"></script>
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
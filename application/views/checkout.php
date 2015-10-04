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
                
            <!-- Reservation form -->
            <section id="reservation-form" class="mt50 clearfix">
              <div class="col-sm-12 col-md-6">
                  <form class="reservation-vertical clearfix" method="post" action="<?php echo site_url("checkout/send_payout");?>" >
                  <h2 class="lined-heading"><span>Payment</span></h2> 
                  <?php
                    $price = rand(99, 217);
                    $transID = rand(45532, 45632);
                  ?>
                   <div class="price">
                    <h4>Double Room</h4>
                    $ <?php echo $price;?>,-<span> a night</span></div>
                  <input type="hidden" name="price" id="price" value="<?php echo $price;?>" />
                  <input type="hidden" name="transID" id="transID" value="<?php echo $transID;?>" />
                  <!-- Error message display -->
                  <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                 <label for="cardtype" accesskey="E">Card Type</label>
                                 <select data-prefill="2" class="form-control" name="cardtype">
                                     <option value="Visa" selected="selected">Visa</option>
                                             <option value="MasterCard">MasterCard</option>
                                             <option value="American Express">American Express</option>
                                             <option value="Discover">Discover</option>                                
                                 </select>  
                            </div>
                            <div class="col-md-6">
                                 <label for="number" accesskey="E">Card Number</label>
                                 <input name="number" type="text" id="number" value=" 4987654321098769" class="form-control" placeholder="Please enter your card number"/>
                            </div>    

                       </div>
                  </div>    
                  <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                 <label for="expiryMonth" accesskey="E">Expires on</label>
                                 <select data-prefill="2" class="form-control" name="expiryMonth">
                                             <option value="0">mm</option>
                                             <option value="01">01</option>
                                             <option value="02">02</option>
                                             <option value="03">03</option>
                                             <option value="04">04</option>
                                             <option value="05" selected="selected">05</option>
                                             <option value="06">06</option>
                                             <option value="07">07</option>
                                             <option value="08">08</option>
                                             <option value="09">09</option>
                                             <option value="10">10</option>
                                             <option value="11">11</option>
                                             <option value="12">12</option>   
                                 </select>  
                            </div>
                            <div class="col-md-3"> 
                                <label for="expiryMonth" accesskey="E">&nbsp;</label>
                                 <select data-prefill="2" class="form-control" name="expiryYear">
                                             <option value="0">yyyy</option>
                                             <option value="2015">2015</option>
                                             <option value="2016">2016</option>
                                             <option value="2017" selected="selected">2017</option>
                                             <option value="2018">2018</option>
                                             <option value="2019">2019</option>
                                             <option value="2020">2020</option>
                                 </select>  
                            </div>
                            <div class="col-md-4">
                                 <label for="cvv" accesskey="E">Security Code</label>
                                 <input name="cvv" type="text" id="cvv" value="100" class="form-control" placeholder="CVV"/>
                            </div>    

                       </div>
                  </div> 
                  <hr>
                  <h2 class="lined-heading"><span>Billing Address</span></h2> 
                  <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                 <label for="firstname" accesskey="E">First Name</label>
                                 <input name="firstname" type="text" id="firstname" value="Andrew" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                 <label for="lastname" accesskey="E">Last Name</label>
                                 <input name="lastname" type="text" id="lastname" value="Chan" class="form-control" />
                            </div>    
                       </div>
                  </div> 
                  <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                 <label for="street" accesskey="E">Street address</label>
                                 <input name="street" type="text" id="street" value="Santa street 5 st" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                 <label for="apt" accesskey="E">Apt #</label>
                                 <input name="apt" type="text" id="apt" value="" class="form-control" />
                            </div>    
                       </div>
                  </div> 
                  <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                 <label for="city" accesskey="E">City</label>
                                 <input name="city" type="text" id="city" value="" class="form-control" />
                            </div>
                            <div class="col-md-3">
                                 <label for="state" accesskey="E">State</label>
                                 <input name="state" type="text" id="state" value="" class="form-control" />
                            </div> 
                            <div class="col-md-3">
                                 <label for="postalcode" accesskey="E">Postal Code</label>
                                 <input name="postalcode" type="text" id="postalcode" value="" class="form-control" />
                            </div> 
                       </div>
                  </div> 
                  
                  <button type="submit" class="btn btn-danger btn-block">Continue</button>
                </form>
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
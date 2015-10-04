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
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->         
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="container list-hotels">                    
        <br/>
            <?php 
                $string_success = $this->session->flashdata('success');
                $string_danger = $this->session->flashdata('danger');
                if(!empty($string_success)){
                    echo view_message($string_success,'success');
                }elseif(!empty ($string_danger)){
                    echo view_message($string_danger,'danger');
                }
                
            ?>
            <div class="portlet portlet-purple dropzone-portlet">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h4>Managing Files AWS S3</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body">                    
                    <form method="post" action="<?php echo site_url("s3manager/doUpload");?>" enctype="multipart/form-data">
                        <input type="file" name="file" class="btn">
                        <br />
                        <input type="checkbox" name="ckPrivate" value="Private"> Private<br /><br />
                        <input type="submit" class="btn btn-primary" value="Upload" name="btnUpload" />                       
                    </form>
                    <hr/>
                    <form method="post" action="<?php echo site_url("s3manager/doDelete");?>" enctype="multipart/form-data">
                    <div class="row">
                        <?php echo $pictures;?>                                             
                    </div>
                    <input type="submit" class="btn btn-danger" value="Delete" name="btnDelete" />
                    </form>
                </div>
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
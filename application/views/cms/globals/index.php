<!-- Begin page heading -->
<h1 class="page-heading"><?php echo $module;?></h1>
<!-- End page heading -->     
<div class="the-box">
<div class="row">    
        <div class="col-sm-3">
        <ul id="userSettings" class="nav nav-pills nav-stacked">
            <li class="active"><a href="#footerinformation" data-toggle="tab">Footer Content</a>
            </li>          
        </ul>
        </div>
        <div class="col-sm-9">
            <div id="userSettingsContent" class="tab-content">
                <div class="tab-pane fade in active" id="footerinformation">
                    <form role="form" id="frm-globals" action="<?php echo site_url('cms/globals/fillglobal');?>">                        
                        <div class="form-group">
                            <label>Copyright Notice</label>
                            <input type="text" class="form-control" name="copyright" id="copyright" placeholder="© Copyright Your Site" required="required" value="<?php echo $copyright;?>">
                        </div>
                        <div class="form-group">
                            <label>Contact Us Label</label>
                            <input type="text" class="form-control" name="contactUs" id="contactUs" placeholder="Contact Us" value="<?php echo $contactUs;?>" required="required">
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-envelope-o fa-fw"></i> Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $email;?>" placeholder="Your email" required="required">
                        </div>                        
                        <button type="submit" class="btn btn-danger">Save</button>                        
                    </form>
                </div>                               
            </div>
        </div>
    </div>    
</div>


              
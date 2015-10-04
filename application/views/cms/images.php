<!-- Begin page heading -->
<h1 class="page-heading"><?php echo $module;?></h1>
<!-- End page heading -->     
<div class="the-box">
<div class="row">    
        <div class="col-sm-3">           
            <ul id="userSettings" class="nav nav-pills nav-stacked">
                <li class="active"><a href="#tabupload" data-toggle="tab">Uploads</a></li> 
                <li><a href="#tabsiteassets" data-toggle="tab">Site Assets</a></li>          
                <li><a href="#tabcompanylogos" data-toggle="tab">Company Logos</a></li>          
                <li><a href="#tabserviceicons" data-toggle="tab">Service Icons</a></li>          
            </ul>
        </div>
        <div class="col-sm-9">
            <div id="userSettingsContent" class="tab-content">
                <div class="tab-pane fade in active" id="tabupload">
                   <form action="<?php echo site_url('cms/assets/upload');?>" class="dropzone" id="my-awesome-dropzone">                       
                   </form>
                </div> 
                <div class="tab-pane fade in" id="tabsiteassets">
                   A
                </div>
                <div class="tab-pane fade in" id="tabcompanylogos">
                   B
                </div>
                 <div class="tab-pane fade in" id="tabserviceicons">
                  C
                </div>
            </div>
        </div>
    </div>    
</div>


              
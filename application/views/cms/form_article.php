   
    <!-- End page heading -->										
    <div class="the-box">         
     <!-- Basic Tabs Example -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4><?php echo $title;?> ARTICLE</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">Data Article</a>
                                    </li>
                                    <li><a href="#profile" data-toggle="tab">Others</a>
                                    </li>                                    
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <form id="form-article" role="form" method="post" action="<?php echo site_url("cms/article/action/add");?>" enctype="multipart/formdata">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                      <input type="text" class="form-control" id="title_name" name="title_name" required="required">                            
                                                </div>
                                                <div class="form-group">
                                                      <label>Content</label>
                                                      <textarea name="content_name" id="content_name" class="form-control" required="required"></textarea>
                                                </div>
                                                <div class="form-group">
                                                      <label>Image</label>
                                                      <input type="file" name="file_name" id="file_name">                            
                                                </div>
                                                <div class="form-group">
                                                      <label>Image Caption</label>
                                                      <input type="text" class="form-control" name="imagecaption" id="imagecaption" >                            
                                                </div>  
                                                <div class="form-group">
                                                      <label>Image Align</label>
                                                      <select data-prefill="2" class="form-control" name="imalign" >
                                                      <option value="1">Left</option>
                                                      <option value="2">Right</option>
                                                      <option value="3">Above body text</option>
                                                      <option value="4">Background Images</option>                           
                                                  </select>                           
                                                </div>   
                                                 <div class="form-group">
                                                      <label>Keyword</label>
                                                      <textarea name="keyword" id="keyword" class="form-control" ng-model="keyword"></textarea>
                                                </div>                                                  
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <div class="form-group">
                                                      <label>Metadata</label>
                                                      <textarea name="metadata_name" id="content_name" class="form-control" required="required"></textarea>
                                                </div>
                                                <div class="form-group">
                                                      <label>Logo</label>
                                                      <input type="file" name="file_name" id="file_name">                            
                                                </div>
                                        </div> 
                                    <button type="submit" name="btnSubmit" class="btn btn-success"><i class="fa fa-sign-in"></i> Submit</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.portlet-body -->
                        </div>
                        <!-- /.portlet -->

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
     </div>   				
<script src="<?php echo site_url('assets/js/tinymce/tinymce.min.js');?>"></script>            
<script type="text/javascript">
        tinymce.init({
            selector: "#content_name"
        });
</script>



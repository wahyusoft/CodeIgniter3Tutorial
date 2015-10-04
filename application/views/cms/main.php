<!-- Begin page heading -->
<h1 class="page-heading"><?php echo $module;?></h1>
<!-- End page heading -->                               
<div class="row" style="height: 600px;">
    <div class="col-sm-4">
        <div class="the-box">
            <label>Post a new Articles Entry</label>
             <form  role="form" id="form-article" action="<?php echo site_url("cms/entries/filldata/article");?>" >
                    <div class="form-group">
                        <label>Title</label>
                          <input type="text" class="form-control" id="title_name" name="title_name" required="required">                            
                    </div>
                 <div class="form-group">
                     <label>Featured Images</label><br />
                     <button type="button" class="btn btn-default">+ Add an asset</button>
                 </div>
                    <div class="form-group">
                          <label>Short Description</label>
                          <textarea class="form-control" id="shortdesc" name="shortdesc" ></textarea>
                    </div>
                     <div class="form-group">
                        <label>Heading</label>
                          <input type="text" class="form-control" id="heading[]" name="heading[]" required="required">                            
                    </div>
                    <div class="form-group">
                        <label>Sub Heading</label>
                          <input type="text" class="form-control" id="subheading" name="subheading" required="required">                            
                    </div>                                     
                 <div class="form-group">                         
                     <label>Article Body</label><br/>                         
                        <div class="btn-group">                           
                            <button type="button" class="btn btn-default">+ Add a block</button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#" class="add-heading">Heading</a>
                                </li>
                                <li>
                                    <a href="#" class="add-text">Text</a>
                                </li>
                                <li>
                                    <a href="#" class="add-pullquote">Pull Quote</a>
                                </li>
                                 <li>
                                     <a href="#" class="add-image">Image</a>
                                </li>                                
                                 <li>
                                     <a href="#" class="add-quote">Quote</a>
                                </li>
                            </ul>
                        </div>
                    </div>     
                   <!-- additional -->
                  

                    <!-- The option field template containing an option field and a Remove button -->
                    <div class="form-group hide" id="opt-heading">
                        <div class="form-group">
                            <label>Heading</label>&nbsp;<a href="#" class="removeheading"><span class="glyphicon glyphicon-remove"></span></a>    
                            <input class="form-control" type="text" name="heading[]" />                                                
                        </div>
                    </div>
                    <div class="form-group hide" id="opt-thetext">
                        <div class="form-group">
                            <label>Text</label>&nbsp;<a href="#" class="removethetext"><span class="glyphicon glyphicon-remove"></span></a>    
                            <input class="form-control" type="text" name="thetext[]" />                                                    
                        </div>
                    </div>   
                    <div class="form-group hide" id="opt-pullquote">
                        <div class="form-group">
                            <label>Pull Quote</label>&nbsp; <a href="#" class="removepullquote"><span class="glyphicon glyphicon-remove"></span></a>    
                            <input class="form-control" type="text" name="pullquote[]" />                                                   
                        </div>
                    </div>
                    <div class="form-group hide" id="opt-image">
                        <div class="form-group">
                            <label>Image</label>&nbsp;<a href="#" class="removeimage"><span class="glyphicon glyphicon-remove"></span></a>    
                            <input class="form-control" type="text" name="image[]" />                                                    
                        </div>
                    </div>
                    <div class="form-group hide" id="opt-quote">
                        <div class="form-group">
                            <label>Quote</label>&nbsp;<a href="#" class="removequote"><span class="glyphicon glyphicon-remove"></span></a>    
                            <input class="form-control" type="text" name="quote[]" />                                                    
                        </div>
                    </div>
                   <!--end -->
                    <div class="btn-group">                                            
                         <button type="submit" class="btn btn-danger">Save</button>   
                    </div>
             </form>    
        </div>    
    </div>
    <div class="col-sm-4">
        <div class="the-box">
            <label>Recent Entries</label>         
        </div>
    </div>    
</div>                                



    



                         
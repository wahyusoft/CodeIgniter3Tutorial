<!-- Begin page heading -->
<h1 class="page-heading"><?php echo $module;?></h1>
<!-- End page heading -->     
<div class="the-box">
<div class="row">    
        <div class="col-sm-3">
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i> New Entry <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url('cms/entries/post/articles');?>"> Articles</a></li>               
                </ul>
            </div>
            <ul id="userSettings" class="nav nav-pills nav-stacked">
                <li class="active"><a href="#listarticle" data-toggle="tab">Articles</a></li>          
                <li><a href="#listhotels" data-toggle="tab">Hotels</a></li>          
            </ul>
        </div>
        <div class="col-sm-9">
            <div id="userSettingsContent" class="tab-content">
                <div class="tab-pane fade in active" id="listarticle">
                     <div class="portlet-body">
                           <div class="table-responsive">
                                    <table id="siteassets" class="table table-striped table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Post Title</th>
                                                <th>URI</th>
                                                <th>Post Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                        
                                    </table>
                                </div>
                                <!-- /.table-responsive -->   
                     </div>
                     <!-- /.portlet-body -->
                </div>
                
                <div class="tab-pane fade" id="listhotels">
                    list hotels
                </div>     
                
                
            </div>
        </div>
    </div>    
</div>

<script type="text/javascript" language="javascript" >
        $(document).ready(function() {            
            var dataTable = $('#siteassets').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                            url :"<?php echo site_url('cms/entries/post/article')?>", // json datasource
                            type: "post",  // method  , by default get
                            error: function(){  // error handling
                                    $(".siteassets-error").html("");
                                    $("#siteassets").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                                    $("#siteassets_processing").css("display","none");
                            }
                    }
            } );
              
        } );
</script>
              

	
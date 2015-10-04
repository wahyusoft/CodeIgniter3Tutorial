<h1 class="page-heading"></h1>
<div class="the-box">
<div class="row">    
        <div class="col-sm-3">           
            <ul id="userSettings" class="nav nav-pills nav-stacked">
                <li class="active"><a href="#tabupload" data-toggle="tab">Uploads</a></li> 
                <li><a href="#tabsiteassets" data-toggle="tab">Site Assets</a></li>                              
            </ul>
        </div>
        <div class="col-sm-9">
            <div id="userSettingsContent" class="tab-content">
                <div class="tab-pane fade in active" id="tabupload">
                   <form action="<?php echo site_url('cms/assets/upload');?>" class="dropzone" id="my-awesome-dropzone">                                              
                   </form>
                </div> 
                <div class="tab-pane fade in" id="tabsiteassets">
                    <div class="row">                           
                         <div class="col-lg-12">
                            <div class="portlet-title">
                                <h4>Site Assets</h4>
                            </div>
                            <div class="table-responsive">
                                    <table id="siteassets" class="table table-striped table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Images</th>
                                                <th>Description</th>
                                                <th>Updates</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                        
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Update Assets</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" name="imagesDescriptionold" >  
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">First Name</label>
              <div class="col-md-9">
                <input name="imagesName" placeholder="Images Name" class="form-control" type="text">
              </div>
            </div>           
            <div class="form-group">
              <label class="control-label col-md-3">Address</label>
              <div class="col-md-9">
                  <textarea name="imagesDescription" id="imagesDescription" placeholder="Description"class="form-control"></textarea>
              </div>
            </div>            
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

  <script type="text/javascript" language="javascript" >
        $(document).ready(function() {            
            var dataTable = $('#siteassets').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                            url :"<?php echo site_url('cms/assets/filldata/siteassets')?>", // json datasource
                            type: "post",  // method  , by default get
                            error: function(){  // error handling
                                    $(".siteassets-error").html("");
                                    $("#siteassets").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                                    $("#siteassets_processing").css("display","none");
                            }
                    }
            } );
              
        } );
        
        function reload_table()
        {
          dataTable.ajax.reload(null,false); //reload datatable ajax
        }
        
        function delete_assets(id)
        {
            if(confirm('Are you sure delete this data?'))
            {
              // ajax delete data to database
                $.ajax({
                  url : "<?php echo site_url('cms/assets/delete_assets')?>/"+id,
                  type: "POST",
                  dataType: "JSON",
                  success: function(data)
                  {
                     //if success reload ajax table
                     $('#modal_form').modal('hide');
//                     reload_table();
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      alert('Error adding / update data');
                  }
              });

            }
        }
            
            
        function update_asset(id)
        {
            save_method = 'update';
            $('#form')[0].reset(); // reset form on modals
            //Ajax Load data from ajax
            $.ajax({
              url : "<?php echo site_url('cms/assets/update_assets')?>/" + id,
              type: "GET",
              dataType: "JSON",
              success: function(data)
              {

                  $('[name="id"]').val(data.imagesID);
                  $('[name="imagesName"]').val(data.imagesName);
                  $('[name="imagesDescription"]').val(data.imagesDescription);             
                  $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                  $('.modal-title').text('Update Assets'); // Set title to Bootstrap modal title

              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error get data from ajax');
              }
            });
        }
        
        
        function save()
        {                    
              $.ajax({
                url :  "<?php echo site_url('cms/assets/push_update')?>",
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                   //if success close modal and reload ajax table
                   $('#modal_form').modal('hide');
                   reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {  
                    alert('Error adding / update data');
                }
            });
        }
    
        
</script>      
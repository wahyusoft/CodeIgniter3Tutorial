<!-- Begin page heading -->
<h1 class="page-heading"><?php echo $tittle;?></h1>
<!-- End page heading -->										
    <div class="the-box">
         <div id="response"></div>
          <div class="row">
                    <div class="col-lg-12">
                        <div class="portlet portlet-default">
                            <div class="portlet-body">
                                <ul id="userTab" class="nav nav-tabs">
                                    <li class="active"><a href="#connection" data-toggle="tab">Connection</a>
                                    </li>
                                    <li><a href="#listbucket" data-toggle="tab">List Buckets</a></li>
                                </ul>
                                <div id="userTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="connection">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form role="form" action="<?php echo site_url('cms/awsconfig/setconnection');?>" id="formawsconfig">                                                            
                                                    <div class="form-group">
                                                        <label>Key</label>
                                                        <input type="text" id="key" name="key" class="form-control" value="<?php echo $key;?>" placeholder="Fill Key" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Secret</label>
                                                        <input type="text" id="secret" name="secret" class="form-control" value="<?php echo $secret;?>" placeholder="Fill Secret" required="required">
                                                    </div>                                                            
                                                    <button type="submit" class="btn btn-danger">Connect</button>                                                           
                                                </form>
                                            </div>                                            
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="listbucket">
                                        <div class="row">     
                                            <div class="col-lg-12">
                                                 <form role="form" action="<?php echo site_url('cms/awsconfig/addbucket');?>"  id="frmaddbucket" >
                                                     <div class="form-group">
                                                         <label  for="bucketname">Bucket Name</label>
                                                         <input type="text" name="bucketname" id="bucketname" class="form-control" value="" placeholder="Bucket Name" required="required">
                                                     </div>                                                        
                                                     <div class="form-group">
                                                         <button type="submit" class="btn btn-success" >Add Bucket</button>
                                                     </div>
                                                  </form>                                                                                                                                                  
                                            </div>  
                                            
                                             <div class="col-lg-12">
                                                 <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover table-green">
                                                        <thead>
                                                            <tr>
                                                                <th>Bucket Name</th>
                                                                <th>Action</th>                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody id="getbucket" >                                                      
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            
                                        </div>
                                        
                                        
                                           
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /.portlet-body -->
                        </div>
                        <!-- /.portlet -->


                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
    </div><!-- /.the-box -->
</div><!-- /.container-fluid -->
										
<script type="text/javascript">
  $(document).ready(function (){
      /** LIST BUCKET **/
            var btndelete = '';
            fillbucket();
            
            function fillbucket(){
                $("#loader").show();                
                $.ajax({
                    url:'<?php echo site_url("cms/awsconfig/listbucket");?>',
                    type:'GET'
                }).done(function (data){
                    $("#getbucket").html(data);
                    $("#loader").hide();                    
                    btndelete = $("#listbucket .btndelete");
                    var deleteurl = btndelete.attr('href');                    
                    //delete record
                    btndelete.on('click', function (e){
                        e.preventDefault();
                        var deleteid = $(this).data('id');
                        if(confirm("are you sure delete "+deleteid+"  bucket?")){
                            $("#loader").show();
                            $.ajax({
                            url:deleteurl,
                            type:'POST' ,
                            data:'id='+deleteid
                            }).done(function (data){
                            $("#response").html(data);
                            $("#loader").hide();
                            fillbucket();
                            });
                        }
                    });
                });
            }
   });
</script>			
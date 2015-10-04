    <!-- Begin page heading -->
    <h1 class="page-heading">Hotel</h1>
    <!-- End page heading -->										
           <div class="the-box">
            <h4 class="small-title"><?php echo $title;?> HOTEL</h4>
                    <form role="form" id="form-hotel">
                      <div class="form-group">
                          <label>Hotel Name</label>
                          <input type="text" class="form-control" id='name' name="name" required="required">                            
                      </div>
                      <div class="form-group">
                          <label>Slug</label>
                          <input type="text" class="form-control" id='slug' name="slug" required="required">                            
                      </div>                        
                      <div class="form-group">
                            <label>Owner</label>
                            <select data-prefill="2" class="form-control" name="ownerid" id="ownerid" required="required">
                            <option value="A">A</option>                            
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>                           
                      </div>
                      <div class="form-group">
                          <label>Business Name</label>
                          <input type="text" class="form-control" id='businessname' name="businesname" required="required">                            
                      </div> 
                      <div class="form-group">
                          <label>Business Number</label>
                          <input type="text" class="form-control" id='businessnumber' name="businesnumber" required="required">                            
                      </div>   
                      <div class="form-group">
                          <label>Street 1</label>
                          <input type="text" class="form-control" id='street1' name="street1" required="required">                            
                      </div> 
                      <div class="form-group">
                          <label>Street 2</label>
                          <input type="text" class="form-control" id='street2' name="street2" required="required">                            
                      </div>   
                       <div class="form-group">
                          <label>State</label>
                          <input type="text" class="form-control" id='state' name="state" required="required">                            
                      </div>    
                      <div class="form-group">
                          <label>Post Code</label>
                          <input type="text" class="form-control" id='postcode' name="postcode" required="required">                            
                      </div>  
                      <div class="form-group">
                          <label>Country</label>
                          <input type="text" class="form-control" id='country' name="country" required="required">                            
                      </div>    
                      <div class="form-group">
                            <label>Short Description</label>
                            <textarea name="shortdesc" id='shortdesc' class="form-control" required="required"></textarea>
                      </div>
                       <div class="form-group">
                            <label>Maint Description</label>
                            <textarea name="maindesc" id='maindesc' class="form-control" required="required"></textarea>
                      </div> 
                      <div class="form-group">
                            <label>Stars</label>                            
                      </div>  
                       <div class="form-group">
                          <label>Phone 1</label>
                          <input type="text" class="form-control" id='phone1' name="phone1" required="required">                            
                      </div> 
                        <div class="form-group">
                          <label>Phone 2</label>
                          <input type="text" class="form-control" id='phone2' name="phone2" required="required">                            
                      </div>  
                       <div class="form-group">
                          <label>Email 1</label>
                          <input type="text" class="form-control" id='email1' name="email1" required="required">                            
                      </div> 
                      <div class="form-group">
                          <label>Email 2</label>
                          <input type="text" class="form-control" id='email2' name="email2" required="required">                            
                      </div>    
                      <div class="form-group">
                          <label>Fax</label>
                          <input type="text" class="form-control" id='fax' name="fax" required="required">                            
                      </div> 
                      <div class="form-group">
                          <label>Total Rooms Active</label>
                          <input type="text" class="form-control" id='tra' name="tra" required="required">                            
                      </div> 
                      <div class="form-group">
                            <label>Logo</label>
                            <input type="file" class="form-control" name='logo' id="logo">
                      </div>
                      <div class="form-group">
                            <label>Feature Image</label>
                             <input type="file" class="form-control" name='fimages' id="fimages">                        
                      </div>   
                      <div class="form-group">
                            <label>Longitude</label>
                            <input type="text" class="form-control" id='longitude' name="longitude" required="required">                         
                      </div>    
                       <div class="form-group">
                            <label>Latitude</label>
                            <input type="text" class="form-control" id='latitude' name="latitude" required="required">                         
                      </div>  
                       <div class="form-group">
                            <label>Room Total</label>
                            <input type="text" class="form-control" id='roomtotal' name="roomtotal" required="required">                         
                      </div> 
                      <div class="form-group">
                            <label>Time Zone</label>
                            <input type="text" class="form-control" id='timezone' name="timezone" required="required">                         
                      </div>
                      <div class="form-group">
                            <label>Deposit</label>
                            <input type="text" class="form-control" id='deposit' name="deposit" required="required">                         
                      </div>  
                       <div class="form-group">
                            <label>Currency</label>
                            <select data-prefill="2" class="form-control" name="ownerid" id="ownerid" required="required">
                            <option value="1">USD</option>                            
                            <option value="2">WON</option>
                            <option value="3">YEN</option>
                        </select>                           
                      </div>  
                      <button type="submit" name="btnSubmit" class="btn btn-success"><i class="fa fa-sign-in"></i> Submit</button>
                    </form>
            </div><!-- /.the-box 
				
    </div><!-- /.container-fluid -->
<script src="<?php echo site_url('assets/js/tinymce/tinymce.min.js');?>"></script>            
<script type="text/javascript">
        tinymce.init({
            selector: "#maindesc"
        });
</script>


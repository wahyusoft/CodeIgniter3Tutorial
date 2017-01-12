 <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Amazon <small>Web Service</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Amazon Web Service
                            </li>
                        </ol>
                    </div>
                </div>			
				<?php if(isset($error))echo $error;?>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<?php echo form_open_multipart('amazons3/upload');?>
						<input type="file" name="userfile" size="20" />
						<br /><br />
						<input type="submit" value="upload" />
						</form>

						<div>
							<?php 
								if(isset($upload_data))
								{
									?>
									File url : <?php echo $upload_data;?>
									<?php

								}
							?>
						</div>
					</div>
				</div>

</div>
<!-- /.container-fluid -->
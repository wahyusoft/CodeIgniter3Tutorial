<!-- Begin page heading -->
<h1 class="page-heading"><?php echo $tittle;?></h1>
<!-- End page heading -->										
    <div class="the-box">
          <div class="row">
                    <div class="col-lg-12">

                        <div class="portlet portlet-default">
                            <div class="portlet-body">
                                <ul id="userTab" class="nav nav-tabs">
                                    <li class="active"><a href="#overview" data-toggle="tab">Overview</a>
                                    </li>
                                    <li><a href="#profile-settings" data-toggle="tab">Update Profile</a>
                                    </li>
                                </ul>
                                <div id="userTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="overview">

                                        <div class="row">
                                            <div class="col-lg-2 col-md-3">
                                                <a href="#">
                                                    <span class="profile-edit">Upload Logo</span>
                                                </a>
                                                <img class="img-responsive img-profile" src="<?php echo site_url('assets/img/profile-full.jpg');?>" alt="">                                                
                                            </div>
                                            <div class="col-lg-7 col-md-5">
                                                <h1>John Dhoe</h1>
                                               
                                            </div>
                                            
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="profile-settings">

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <ul id="userSettings" class="nav nav-pills nav-stacked">
                                                    <li class="active"><a href="#basicInformation" data-toggle="tab"><i class="fa fa-user fa-fw"></i> Basic Information</a>
                                                    </li>
                                                    <li><a href="#profilePicture" data-toggle="tab"><i class="fa fa-picture-o fa-fw"></i> Profile Picture</a>
                                                    </li>
                                                    <li><a href="#changePassword" data-toggle="tab"><i class="fa fa-lock fa-fw"></i> Change Password</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-9">
                                                <div id="userSettingsContent" class="tab-content">
                                                    <div class="tab-pane fade in active" id="basicInformation">
                                                        <form role="form">
                                                            <h4 class="page-header">Personal Information:</h4>
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" class="form-control" value="John">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" class="form-control" value="Smith">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <input type="tel" class="form-control" value="1+(234) 555-2039">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" class="form-control" value="8516 Market St.">
                                                            </div>
                                                            <div class="form-inline">
                                                                <div class="form-group">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control" value="Bayville">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" class="form-control" value="FL">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>ZIP</label>
                                                                    <input type="text" class="form-control" value="55555">
                                                                </div>
                                                            </div>
                                                            <h4 class="page-header">Contact Details:</h4>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-envelope-o fa-fw"></i> Email Address</label>
                                                                <input type="email" class="form-control" value="jdhoe@website.com">
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-globe fa-fw"></i> Website</label>
                                                                <input type="url" class="form-control" value="http://www.website.com">
                                                            </div>
                                                            <h4 class="page-header">Profile Information:</h4>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-info fa-fw"></i> About</label>
                                                                <textarea class="form-control" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis.</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-building-o fa-fw"></i> Departments</label>
                                                                <select multiple class="form-control">
                                                                    <option>Accounting</option>
                                                                    <option>Customer Support</option>
                                                                    <option>Human Resources</option>
                                                                    <option selected>Management</option>
                                                                    <option selected>Marketing</option>
                                                                    <option>Production</option>
                                                                    <option>Quality Assurance</option>
                                                                    <option selected>Sales</option>
                                                                </select>

                                                            </div>
                                                            <h4 class="page-header">Social Profiles:</h4>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-facebook fa-fw"></i> Facebook Profile URL</label>
                                                                <input type="url" class="form-control" value="http://www.facebook.com/john.dhoe9324">
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-linkedin fa-fw"></i> LinkedIn Profile URL</label>
                                                                <input type="url" class="form-control" value="http://www.linkedin.com/u/john.dhoe923">
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-google-plus fa-fw"></i> Google+ Profile URL</label>
                                                                <input type="url" class="form-control" value="http://plus.google.com/john-dhoeith9993">
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-twitter fa-fw"></i> Twitter Username</label>
                                                                <input type="text" class="form-control" value="@JohnDhoe">
                                                            </div>
                                                            <button type="submit" class="btn btn-default">Update Profile</button>
                                                            <button class="btn btn-green">Cancel</button>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="profilePicture">
                                                        <h3>Current Picture:</h3>
                                                        <img class="img-responsive img-profile" src="img/profile-full.jpg" alt="">
                                                        <br>
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>Choose a New Image</label>
                                                                <input type="file">
                                                                <p class="help-block"><i class="fa fa-warning"></i> Image must be no larger than 500x500 pixels. Supported formats: JPG, GIF, PNG</p>
                                                                <button type="submit" class="btn btn-default">Update Profile Picture</button>
                                                                <button class="btn btn-green">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade in" id="changePassword">
                                                        <h3>Change Password:</h3>
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>Old Password</label>
                                                                <input type="password" class="form-control" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <input type="password" class="form-control" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Re-Type New Password</label>
                                                                <input type="password" class="form-control" value="">
                                                            </div>
                                                            <button type="submit" class="btn btn-default">Update Password</button>
                                                            <button class="btn btn-green">Cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
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
										
				
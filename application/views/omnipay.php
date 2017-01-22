 <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Paypal Integration with Omnipay
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Paypal Integration with Omnipay
                            </li>
                        </ol>
                    </div>
                </div>          
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <form action="<?php echo base_url().'stripeintegration';?>" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Card Number</label>
                                <input type="text" size="20" autocomplete="off" name="cardnumber" value="4242424242424242"  />
                            </div>                          
                            <div class="form-group">
                                <label class="control-label col-md-3">Expiration (MM/YYYY)</label>
                                <input type="text" size="2" name="expirymonth" value="8" />
                                <span> / </span>
                                <input type="text" size="4" name="expiryyear" value="2018" />
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Amount</label>                            
                                <input type="text" size="4" name="amount" />
                            </div>
                            <button type="submit" name="btnsubmit" class="btn btn-primary">Submit Payment</button>
                        </form> 
                    </div>
                </div>

</div>
<!-- /.container-fluid -->
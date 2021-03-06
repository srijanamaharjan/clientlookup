<!-- header -->


<?php include_once('includes/header.php'); 
if(isset($detail)){
  $id = $detail['id'];
  $fname = $detail['fname'];
  $lname = $detail['lname'];
  $phone = $detail['phone'];
  $membership_type = $detail['membership_type'];
  $expiry_date = $detail['expiry_date'];

  

  $address = $detail['address'];
  $mailing_address = $detail['mailing_address'];
}
?>




           	<div class="page-title">
              <div class="title_left">
                <h3>Member</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div><!-- page-title ends here -->

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>
             <?php if($action == 'edit' && isset($_GET['id'])){?>
                      Edit Member
                        <small>Edit Member</small>
                    <?php }else{?>
                        Create New Member
                        <small>Create new member</small>
                        <?php }?>
           
                        </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="member" data-parsley-validate class="form-horizontal form-label-left" action="" method="post">
<!-- id -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id">Member id 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="fidname"  class="form-control col-md-7 col-xs-12" disabled value="<?php if(isset($id)){echo $id;} ?>">
                        </div>
                      </div>

<!-- fname -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fname">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="fname" name="fname" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($fname)){echo $fname;} ?>">
                        </div>
                      </div>
<!-- lname -->                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lname">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lname" name="lname" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($lname)){echo $lname;} ?>">
                        </div>
                      </div>

<!-- phone -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="phone" name="phone" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($phone)){echo $phone;} ?>">
                        </div>
                      </div>
<!-- membership type -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="membership_type">Membership type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="membership_type"  required="required" name="membership_type" class="select2_multiple form-control" >
                            

                            <option value="silver" <?php if(isset($membership_type)){if($membership_type== "silver"){echo "selected = selected";}} ?> >Silver</option>
                            <option value="gold" <?php if(isset($membership_type)){if($membership_type== "gold"){echo "selected = selected";}} ?>>Gold</option>
                            <option value="platinum" <?php if(isset($membership_type)){if($membership_type== "platinum"){echo "selected = selected";}} ?>>Platinum</option>
                          
                           
                          </select>
                          </div>
                      </div>

<!-- expiry date -->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="expiry_date">Expiry Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 date" >
                          <input type="text" id="expiry_date" name="expiry_date" required="required" class="form-control col-md-7 col-xs-12 datepicker" value="<?php if(isset($expiry_date)){echo $expiry_date;} ?>" data-provide="datepicker">
                        </div>
                      </div>
                     

<!-- address -->

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="address" name="address" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($address)){echo $address;} ?>">
                        </div>
                      </div>
<!-- mailing address -->
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mailing_address">Mailing Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="mailing_address" name="mailing_address" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($mailing_address)){echo $mailing_address;} ?>">
                        </div>
                      </div>


                      
                      

                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <?php 
                                    if($detail['id']){
                                      echo"<input type='hidden' name='id' value='".$detail['id']."'>";
                                    }?>
                          <input type="hidden" name="formsubmit" value="true">
                         <button class="btn btn-primary" onclick="javascript:history.back()">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

           

          </div>
        </div>
        <!-- /page content -->

<!-- footer -->
<?php include('includes/foot.php'); ?>
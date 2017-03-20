<!-- header -->


<?php include_once('includes/header.php'); ?>


            <div class="page-title">
              <div class="title_left">
                <h3>Member Details</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div><!-- page-title ends here -->

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
               
                    <h2>Member ID:<?php echo $detail['id']; ?></h2>

                     <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="add_member.php?id=<?php echo $detail['id']; ?>&action=edit"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button></a></li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                   
           
                     <div class="clearfix"></div>
                   </div><!-- xtitle ends here -->
                   
                  
                  <div class="x_content">
                    <br />
                   
                    
                      <div class="col-md-12 col-sm-12 col-xs-12">
                       <h3>Name:  <?php echo $detail['fname']." ".$detail['lname'];  ?></h3>
                   
                     
                        <p>
                          <label class="control-label col-md-12 col-sm-12 col-xs-12">Phone Number: <?php echo $detail['phone']; ?> 
                        </label>
                        </p>

                        <p>
                          <label class="control-label col-md-12 col-sm-12 col-xs-12">Membership Type: <?php echo $detail['membership_type']; ?> 
                        </label>
                        </p>
                         
                        <p>
                          <label class="control-label col-md-12 col-sm-12 col-xs-12">Expiry Date: <?php echo $detail['expiry_date']; ?> 
                        </label>
                        </p>

                        <p>
                          <label class="control-label col-md-12 col-sm-12 col-xs-12">Address: <?php echo $detail['address']; ?> 
                        </label>
                        </p>
                        <p>
                          <label class="control-label col-md-12 col-sm-12 col-xs-12">Mailing Address: <?php echo $detail['mailing_address']; ?> 
                        </label>
                        </p>                     
                        
                         </div>
                        
                      </div><!-- xcontent ends here -->

                       
                   
                   
                  </div>



                </div>
               
             
              </div>

        <!-- /page content -->

<!-- footer -->
<?php include('includes/foot.php'); ?>
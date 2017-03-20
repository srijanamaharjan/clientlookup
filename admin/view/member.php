<?php include 'includes/header.php';?>
   

            <div class="page-title">
              <div class="title_left">
                <h3>Members</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <form method="post" id="form1">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="search">
                    <span class="input-group-btn">
                    <input type="hidden" name="searchclk">
                      <button class="btn btn-default" type="button" onclick="document.getElementById('form1').submit()" >Go!</button>
                    </span>
                  </div>
                </form>
                </div>
              </div>
            </div>
            </div><!-- page-title ends here -->

            <div class="clearfix"></div>
            <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Members<small>All members</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Member id</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Phone Number</th>
                          <th>Membership Type</th>
                          <th>Expiry Date</th>
                          <th>Address</th>
                          <th>Mailing Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $today = date('Y-m-d', strtotime("+30 days"));
                         foreach($members as $mem) {?>
                        <tr <?php if ($mem['expiry_date'] < $today){echo "class='danger'";} ?>>
                            <th scope="row"><?php echo $mem['id']; ?></th>
                            <td><?php echo $mem['fname']; ?></td>
                            <td><?php echo $mem['lname']; ?></td>
                            <td><?php echo $mem['phone']; ?></td>
                            <td><?php echo $mem['membership_type']; ?></td>
                            <td><?php echo $mem['expiry_date']; ?></td>
                            <td><?php echo $mem['address']; ?></td>
                            <td><?php echo $mem['mailing_address']; ?></td>
                           
                          <td><a href="member.php?id=<?php echo $mem['id'];  ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button></a>
                            
                          <a href="add_member.php?id=<?php echo $mem['id'];  ?>&action=edit"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button></a>

                          <a href="add_member.php?id=<?php echo $mem['id'];  ?>&action=delete"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle"></span></button></a>
                          
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
    
<?php include 'includes/foot.php';?>

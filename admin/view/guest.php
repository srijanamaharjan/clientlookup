<?php include 'includes/header.php';?>
   

            <div class="page-title">
              <div class="title_left">
                <h3>Guests</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div><!-- page-title ends here -->

            <div class="clearfix"></div>
            <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Guests<small>All guests</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Guest id</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                         
                          <th>Address</th>
                          <th>Mailing Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($guest as $mem) {?>
                        <tr>
                            <th scope="row"><?php echo $mem['id']; ?></th>
                            <td><?php echo $mem['fname']; ?></td>
                            <td><?php echo $mem['lname']; ?></td>
                           
                            
                            <td><?php echo $mem['address']; ?></td>
                            <td><?php echo $mem['mailing_address']; ?></td>
                           
                          <td><a href="guest.php?id=<?php echo $mem['id'];  ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button></a>
                            
                          <a href="add_guest.php?id=<?php echo $mem['id'];  ?>&action=edit"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button></a>

                          <a href="add_guest.php?id=<?php echo $mem['id'];  ?>&action=delete"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle"></span></button></a>
                          
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

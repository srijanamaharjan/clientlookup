<?php include_once '../main.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.php'; ?>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"> <span>Client LookUp</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $app_acl->getUserName();  ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li>Home
                   
                  </li>
                  <li><a><i class="fa fa-edit"></i> Members <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="member.php">View all members</a></li>
                      <li><a href="member.php?exp=true">View members expiring in 30 days</a></li>
                      <li><a href="add_member.php">Add New Member</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>Guests<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="guest.php">View guests</a></li>
                      <li><a href="add_guest.php">Add new guest</a></li>
                    </ul>
                  </li>
                 
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="changepassword.php">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $app_acl->getUserName(); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li>
                      <a href="changepassword.php">
                        <span class="badge bg-red pull-right"></span>
                        <span>Change password</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->





    <!-- page content -->
        <div class="right_col" role="main">
          <div class="full">
<?php 
if(isset($_GET['error']) && isset($_GET['message'])){

  if($_GET['error']=="true"){?>

<div class="alert alert-danger alert-dismissable errormessage">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> <?php echo $_GET['message']; ?>
</div>

<?php }else if($_GET['error']=="false"){
  ?>
<div class="alert alert-success alert-dismissable errormessage">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> <?php echo $_GET['message']; ?>
</div>
<?php  
}
}
 ?>

























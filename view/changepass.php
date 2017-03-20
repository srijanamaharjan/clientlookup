<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="changepass-box">
            <div class="header">Change Password</div>
            <form action="changepass.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                    Current Password
                        <input type="text" name="cur_password" autocomplete="off" class="form-control" placeholder="Old Password"/>
                    </div>
                    <div class="form-group">
                    New Password
                        <input type="password" name="new_password" autocomplete="off" class="form-control" placeholder="New Password"/>
                    </div>
                    <div class="form-group">
					Confirm Password
                        <input type="password" name="confirm_password" autocomplete="off" class="form-control" placeholder="New Password"/>
                    </div>             
                    <div class="form-group">
                    <?php if(isset($error) && $error){
						if(isset($error_msg))
							echo "<label class='error' style='padding-left: 20px; color: #992222;'>$error_msg</label>";
					}?>
                        <!-- <input type="checkbox" name="remember_me"/> Remember me-->
                    </div> 
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Change Password</button>  
                    
                    <p><a href="login.php">Cancel</a>
                    
                    <!--<a href="register.html" class="text-center">Register a new membership</a>-->
                </div>
            </form>

            <div class="margin text-center">
                <!--
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
				-->
            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>
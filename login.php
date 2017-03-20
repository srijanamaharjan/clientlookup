<?php
include_once 'main.php';

if(isset($_REQUEST['username'])){
	$rs = $app_acl->check($app_db, $_REQUEST['username'], $_REQUEST['password']);
	//var_dump($rs); die;
	if($rs){
				$_SESSION['username'] = $rs['username'];
              
                
                //$register_login = $admin->recordLogin($_SESSION['user_id']);
               // $reg = $app_acl->recordLogin($app_db, $_SESSION['user_id']);
        if($app_acl->roleRedirectUrl()){        
			header('Location: '.$app_acl->roleRedirectUrl());
        }else {
        	$error = true;
        	$error_msg = "Invalid User registration.";
        	include_once 'view/login.php';
        }
        
	}else{
		$error = true;
		$error_msg = "Invalid username/password";
		include_once 'view/login.php';
		//header('Location: dashboard.php');
	}
}else if($app_acl->checkSession()){
	if($app_acl->roleRedirectUrl()){        
			header('Location: '.$app_acl->roleRedirectUrl());
        }else {
        	$error = true;
        	$error_msg = "Invalid User registration.";
        	include_once 'view/login.php';
        }
}else{
	include_once 'view/login.php';
}
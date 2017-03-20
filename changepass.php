<?php
include 'main.php';
if(!$app_acl->checkSession()){
	header('Location: ../denied.php');
	exit();
}

if($_POST['cur_password']){
	$change = $app_acl->changePassword($app_db, $_POST['cur_password'], $_POST['new_password'], $_POST['confirm_password']);
	if($change) {
		header('Location: login.php');
	}else{
		$error = true;
		$error_msg = "Invalid Password.";
	}
}

include_once 'view/changepass.php';

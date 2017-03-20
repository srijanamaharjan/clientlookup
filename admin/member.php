<?php
include '../main.php';
if(!$app_acl->checkLoginAndRole('admin')){
	header('Location: ../denied.php');
	exit();
}
include '../model/Member.php';

$member_obj = new Member($app_db);



if(isset($_GET['id'])){
		$id= $_GET['id'];
		$detail = $member_obj->getMemberDetails($id);
		//die(var_dump($detail));
		include 'view/member_detail.php';
	}else if(isset($_GET['exp'])){
		$members = $member_obj->getMemberListExpiring();
		include 'view/member.php';
	}else if(isset($_POST['searchclk']) && $_POST['search']){
		$members = $member_obj->getSearchedMembers($_POST['search']);
		include 'view/member.php';

	}
	else{
		$members = $member_obj->getMemberList();
		include 'view/member.php';

	}
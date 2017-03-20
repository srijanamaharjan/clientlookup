<?php
include '../main.php';
if(!$app_acl->checkLoginAndRole('admin')){
	header('Location: ../denied.php');
	exit();
}

include '../model/Member.php';


$member = new Member($app_db);



if(isset($_POST['fname'])){
	if (isset($_POST['id'])) {
		//die(var_dump($arr));
		$update = $member->updateMember($_POST);
		if($update){
				header('Location: member.php?error=false&message=Member was successfully updated');
			}else{
				header('Location: member.php?error=true&message=Member was not updated, Please provide valid data');
			}
	
	} else {
		$add = $member->addMember($_POST);
		if($add){
				header('Location: member.php?error=false&message=Member was successfully created');
			}else{
				header('Location: add_member.php?error=true&message=Member was not created, Please provide valid data');
			}
		
	}
}
if (isset($_GET['action']))  {
	$action = $_GET['action'];
	if ($action == 'edit' && isset($_GET['id'])) {
		$id = $_GET['id'];
		$detail = $member->getMemberDetails($id);
	} elseif ($action == 'delete' && isset($_GET['id'])) {
		$id = $_GET['id'];
		$delete = $member->deleteMember($id);
		
		header("Location: member.php?error=false&message=Member was successfully deleted");
		exit();
	}
}

include 'view/add_member.php';


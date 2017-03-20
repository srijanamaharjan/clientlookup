<?php
include '../main.php';
if(!$app_acl->checkLoginAndRole('admin')){
	header('Location: ../denied.php');
	exit();
}
include '../model/Guest.php';

$guest_obj = new Guest($app_db);
$guest = $guest_obj->getGuestList();



if(isset($_GET['id'])){
		$id= $_GET['id'];
		$detail = $guest_obj->getGuestDetails($id);
		//die(var_dump($detail));
		include 'view/guest_detail.php';
	}else{
		include 'view/guest.php';
	}
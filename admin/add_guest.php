<?php
include '../main.php';
if(!$app_acl->checkLoginAndRole('admin')){
	header('Location: ../denied.php');
	exit();
}

include '../model/Guest.php';


$guest = new Guest($app_db);



if(isset($_POST['fname'])){
	if (isset($_POST['id'])) {
		//die(var_dump($arr));
		$update = $guest->updateGuest($_POST);
		if($update){
				header('Location: guest.php?error=false&message=Guest was successfully updated');
			}else{
				header('Location: guest.php?error=true&message=Guest was not updated, Please provide valid data');
			}
	
	} else {
		$add = $guest->addGuest($_POST);
		if($add){
				header('Location: guest.php?error=false&message=Guest was successfully created');
			}else{
				header('Location: add_guest.php?error=true&message=Guest was not created, Please provide valid data');
			}
		
	}
}
if (isset($_GET['action']))  {
	$action = $_GET['action'];
	if ($action == 'edit' && isset($_GET['id'])) {
		$id = $_GET['id'];
		$detail = $guest->getGuestDetails($id);
	} elseif ($action == 'delete' && isset($_GET['id'])) {
		$id = $_GET['id'];
		$delete = $guest->deleteGuest($id);
		
		header("Location: guest.php?error=false&message=Guest was successfully deleted");
		exit();
	}
}

include 'view/add_guest.php';


<?php
	include_once 'functions/include.php';
	include_once 'app_config.php';
	

	error_reporting(E_ALL);
	$app_db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$app_acl = new Acl();
	$app_base_url = "/";
?>
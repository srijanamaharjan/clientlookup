<?php
include_once 'main.php';
$app_acl->logout($app_db);
header( 'Location: index.php' ) ;
?>
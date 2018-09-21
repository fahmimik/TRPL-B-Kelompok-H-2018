<?php
session_start();
require_once('connection.php');

if (isset($_POST['controller']) && isset($_POST['action']) ) {
	$controller = $_POST['controller'];
	$action 	= $_POST['action'];

}

elseif (isset($_GET['controller']) && isset($_GET['action'])) {
	$controller=$_GET['controller'];
	$action=$_GET['action'];
}
else{
	$controller = 'login';
	$action 	= 'login';
}
// echo $action;


require_once('views/layout.php');

 ?>

<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if (isset($_POST) && !empty($_POST)) {
	
	/*userConnection
		return :
			true for connection OK
			false for fail
		$db -> 				database object
		$email -> 			field value : email
		$password -> 		field value : password
	*/
	$connect = userConnection($db, $_POST['email'],$_POST['password']);

	if($connect ==true){

		header('Location:dashboard.php');


	}

	else{
		$error= 'Mauvais identifiants'
	}


	/*
	header('Location: dashboard.php');
	*/
}

/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';
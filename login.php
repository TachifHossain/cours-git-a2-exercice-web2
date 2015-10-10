<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if (isset($_POST['email']) && !empty($_POST['email'])
	&& isset($_POST['password']) && !empty($_POST['password'])) {
	
	/*userConnection
		return :
			true for connection OK
			false for fail
		$db -> 				database object
		$email -> 			field value : email
		$password -> 		field value : password
	*/

		$email = $_POST['email'];
		$password = $_POST['password'];

	$connect = userConnection($db, $email ,$password);

	if($connect==true){

		header('Location:dashboard.php');


	}

	else{
		$error= 'Mauvais identifiants';
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
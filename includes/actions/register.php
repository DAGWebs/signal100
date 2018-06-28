<?php 
	session_start();
	require_once '../functions.php';
	if(isset($_POST['submit'])) {
		$username = escape($_POST['username']);
		$email = escape($_POST['email']);
		$password = escape($_POST['password']);
		$confirmPassword = escape($_POST['confirmPassword']);

		////////////////////////////////////////////////////////////
		//														  //
		//			   	  Check for empty values		   		  //
		//														  //
		////////////////////////////////////////////////////////////

		if(empty($username)) {
			$_SESSION['usernameEmpty'] = $username;
			url("../../register.php?username=epty");
		} else if(empty($email)) {
			$_SESSION['emailEmpty'] = $email;
			$_SESSION['username'] = $username;
			url("../../register.php?email=empty");
		} else if(empty($password)) {
			$_SESSION['passwordEmpty'] = $password;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?password=empty");
		} else if(empty($confirmPassword)) {
			$_SESSION['confirmPasswordEmpty'] = $email;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?confirmPassword=empty");
		} 

		////////////////////////////////////////////////////////////
		//														  //
		//			   	  Check for Lenght values		   		  //
		//														  //
		////////////////////////////////////////////////////////////

		if(strlen($username) <= 5) {
			$_SESSION['usernameShort'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?username=toShort");
		} else if(strlen($username) >= 11) {
			$_SESSION['usernameLong'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?username=toLong");
		} else if(strlen($password) <= 5) {
			$_SESSION['passwordShort'] = $password;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?password=toShort");
		} else if(strlen($password) >= 20) {
			$_SESSION['passwordLong'] = $password;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?password=toLong");
		} else if($password != $confirmPassword) {
			$_SESSION['passwordMatch'] = $password;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?passwordNot=toconfirmPassword");
		}

		////////////////////////////////////////////////////////////
		//														  //
		//			   	  Check for username values		   		  //
		//														  //
		////////////////////////////////////////////////////////////

		////////////////////////////////////////////////////////////
		//														  //
		//			   	  Check for email values		   		  //
		//														  //
		////////////////////////////////////////////////////////////
	} else {
		$_SESSION["Nosubmit"] = "Submit";
		url("../../register.php?Submit_Button=FALSE");

	}
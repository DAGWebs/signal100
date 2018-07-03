<?php 
	session_start();
	require_once '../functions.php';
	require_once '../db.php';
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
			exit();
		} else if(empty($email)) {
			$_SESSION['emailEmpty'] = $email;
			$_SESSION['username'] = $username;
			url("../../register.php?email=empty");
			exit();
		} else if(empty($password)) {
			$_SESSION['passwordEmpty'] = $password;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?password=empty");
			exit();
		} else if(empty($confirmPassword)) {
			$_SESSION['confirmPasswordEmpty'] = $email;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?confirmPassword=empty");
			exit();
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
			exit();
		} else if(strlen($username) >= 21) {
			$_SESSION['usernameLong'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?username=toLong");
			exit();
		} else if(strlen($password) <= 5) {
			$_SESSION['passwordShort'] = $password;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?password=toShort");
			exit();
		} else if(strlen($password) >= 21) {
			$_SESSION['passwordLong'] = $password;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?password=toLong");
			exit();
		} else if($password != $confirmPassword) {
			$_SESSION['passwordMatch'] = $password;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			url("../../register.php?passwordNot=toconfirmPassword");
			exit();
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

		////////////////////////////////////////////////////////////
		//														  //
		//			   	  Starting querries for db		   		  //
		//														  //
		////////////////////////////////////////////////////////////

		$sql = "SELECT * FROM users WHERE user_username = '$username'";
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck) {
			$_SESSION['usernameTaken'] = $username;
			$_SESSION['email'] = $email;

			url("../../register.php?username=taken");
			exit();
			
		} else {
			$sql = "SELECT * FROM users WHERE user_email = '$email'";
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck) {
				$_SESSION['emailTaken'] = $username;
				$_SESSION['email'] = $email;

				url("../../register.php?email=taken");
				exit();
				
			}
		}
			$password = password_hash($password, PASSWORD_BCRYPT);
			$verification = "S100 - ";
			$code = rand(100000, 999999);
			$varCode = $verification . $code;
			$rank = "member";
			$verified = "false";
			$joined = date('d-m-Y');

			$sql = "INSERT INTO users (user_username, user_email, user_password, user_verification, user_rank, user_varified, user_joined) VALUES ('$username', '$email', '$password', '$varCode', '$rank', '$verified', '$joined');";
			mysqli_query($connection, $sql);

			$_SESSION['registered'] = "Registered";
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['code'] = $code;
			url("../../thankyou.php");

	} else {
		$_SESSION["Nosubmit"] = "Submit";
		url("../../register.php?Submit_Button=FALSE");
		exit();

	}
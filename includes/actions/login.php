<?php  
	session_start();
	require_once '../functions.php';
	require_once '../db.php';

	if(isset($_POST['submit'])) {
		$username = escape($_POST['username']);
		$password = escape($_POST['password']);

		if(empty($username)) {
			$_SESSION["usernameEmpty"] = $username;
			url("../../login.php?usernameORemail=empty");
			exit();
		} else if(empty($password)) {
			$_SESSION["passwordEmpty"] = $password;
			url('../../login.php?password=empty');
			exit();
		} 

		$sql = "SELECT * FROM users WHERE user_username = '$username' OR user_email = '$username'";
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck < 1) {
			$_SESSION["usernameIncorect"];
			url("../../login.php?user=false");
			exit();
		} else {
			if($row = mysqli_fetch_assoc($result)) {
				$password = password_verify($password, $row['user_password']);

				if($row["user_varified"] == "false") {
					$_SESSION["notVerifed"] = "notVerified";
					$_SESSION["username"] = $username;
					url("../../login.php?user=notVarified");
					exit();
				}

				if($password == false) {
					$_SESSION["passwordIncorect"] = $password;
					url("../../login.php?password=false");
					exit();
				} else if($password == true) {
					$_SESSION['Loggedin'] = "TRUE";
					$_SESSION["id"] = $row['user_id'];
					$_SESSION["username"] = $row['user_username'];
					$_SESSION["email"] = $row["user_email"];
					$_SESSION["rank"] = $row["user_rank"];

					url("../../index.php?login=true");

				}
			}
		}
	} else {
		$_SESSION["Nosubmit"] = "Submit";
		url("../../login.php?Submit_Button=FALSE");
	}
?>
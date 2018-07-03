<?php require_once "includes/header.php"; ?>
<div class="register-form">
	<?php  
		$error = "";
	    $username = "";

	    if(isset($_SESSION["Nosubmit"])) {
	    	$error = "Submit button was not pressed";
	    	session_unset();
	    	session_destroy();
	    } else if(isset($_SESSION["usernameEmpty"])) {
	    	$error = "Your username or email was left empty.";
	    	session_unset();
	    	session_destroy();
	    } else if(isset($_SESSION["passwordEmpty"])) {
	    	$error = "Password was left empty.";
	    	session_unset();
	    	session_destroy();
	    } else if(isset($_SESSION["usernameIncorect"])) {
	    	$error = "Username or Email was incorect.";
	    	session_unset();
	    	session_destroy();

	    } else if(isset($_SESSION["passwordIncorect"])) {
	    	$error = "Password was incorect.";
	    	session_unset();
	    	session_destroy();
	    } else if(isset($_SESSION["notVerifed"])) {
	    	$error = "Your email has not been verified";
	    	$username = $_SESSION["username"];
	    	session_unset();
	    	session_destroy();
	    }

	?>
	<h1>Login</h1>
	<div class='error'><?php echo $error; ?></div>
	<form action="includes/actions/login.php" method="post" class="register-form">
		<input type="text" placeholder="Username or Email" name="username" autocomplete="off" value="<?php echo $username; ?>">
		<input type="password" placeholder="Password" name="password" autocomplete="off">
		<input type="submit" value="Login" name="submit">
	</form>
</div>
<?php require_once "includes/footer.php"; ?>
<?php require_once "includes/header.php"; ?>
<?php  
	$error = "";
	if(isset($_SESSION["noSubmit"])) {
		$error = "You must use the submit button";
		session_unset();
		session_destroy();
	} else if(isset($_SESSION["codeEmpty"])) {
		$error = "Your code was left empty";
		session_unset();
		session_destroy();
	} else if(isset($_SESSION["NoCode"])) {
		$error = "The code you submitted was incorecct.";
		session_unset();
		session_destroy();
	} else if(isset($_SESSION["codeError"])) {
		$error = "Error: Code used twice - Please contact an administrator who can manualy verify you.";
		session_unset();
		session_destroy();
	} else if(isset($_SESSION['Verifed'])) {
		$error = "User has already been verified";
		session_unset();
		session_destroy();
	}
?>
	<div class="container fluid">
		<div class="code">
			<h1>Verify Your Account</h1>
			<div class="error"><?php echo $error; ?></div>
			<form action="includes/actions/code.php" method="post">
				<input type="text" value="S100 - " name="code">
				<input type="submit" value="Submit Code" name="submit">
			</form>
		</div>
	</div>
<?php require_once "includes/footer.php"; ?>	
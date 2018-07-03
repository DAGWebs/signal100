<?php require_once "includes/header.php"; ?>
  <?php  
    require_once "includes/functions.php";
  	$error = "";
    $username = "";
    $email = "";
  	if(isset($_SESSION["Nosubmit"])) {
        $error = "The Submit Button Was Not Used!";
        session_unset();
        session_destroy();
      } 
    if(isset($_SESSION["usernameEmpty"])) {
      $error = "You left your username empty";
      session_unset();
      session_destroy();
    } else if(isset($_SESSION["emailEmpty"])) {
      $error = "You left your email empty";
      $username = $_SESSION['username'];
      session_unset();
      session_destroy();
    } else if(isset($_SESSION["passwordEmpty"])) {
      $error = "You left your password empty";
      $username = $_SESSION['username'];
      $email = $_SESSION['email'];
      session_unset();
      session_destroy();
    } else if(isset($_SESSION["confirmPasswordEmpty"])) {
      $error = "You forgot to confirm your password";
      $username = $_SESSION['username'];
      $email = $_SESSION['email'];
      session_unset();
      session_destroy();
    } 
    if(isset($_SESSION['usernameShort'])) {
      $error = "Your username is to short. (6 characters)";
      $email = $_SESSION['email'];
      session_unset();
      session_destroy();
    } else if(isset($_SESSION["passwordShort"])) {
       $error = "Your password is to short. (6 Characters)";
      $username = $_SESSION['username'];
      $email = $_SESSION['email'];
      session_unset();
      session_destroy();
    } else if(isset($_SESSION["passwordLong"])) { 
      $error = "Your password is to long. (20 characters)";
      $username = $_SESSION['username'];
      $email = $_SESSION['email'];
      session_unset();
      session_destroy();
    } else if(isset($_SESSION["usernameLong"])) {
      $error = "Your username is to long. (20 characters)";
      $email = $_SESSION['email'];
      session_unset();
      session_destroy();
    } else if(isset($_SESSION['passwordMatch'])) {
      $error = "Your passwords do not match.";
      $username = $_SESSION['username'];
      $email = $_SESSION['email'];
      session_unset();
      session_destroy();
    } 
    if(isset($_SESSION['usernameTaken'])) {
      $error = "Your username has already been taken.";
      $email = $_SESSION['email'];
      session_unset();
      session_destroy();
    } else if(isset($_SESSION["emailTaken"])) {
      $error = "Your email has already been taken.";
      $username = $_SESSION['username'];
      session_unset();
      session_destroy();
    }
  ?>
  <body>
	<div class="register-form">
		<h1>Register</h1>
		<div class='error'><?php echo $error; ?></div>
		<form action="includes/actions/register.php" method="post">
			<input type="text" placeholder="Username" name="username" value="<?php echo $username ?>">
			<input type="email" placeholder="E-Mail" name="email" value="<?php echo $email ?>">
			<input type="password" placeholder="Password" name="password">
			<input type="password" placeholder="Confirm Password" name="confirmPassword">
			<input type="submit" name="submit"  value="Register Now">
		</form>
		<p>Already registered? <a href="login.php">Login now!</a></p>
	</div>
	<?php require_once "includes/footer.php"; ?>

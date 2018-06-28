<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Bungee+Shade|Crimson+Text" rel="stylesheet">

    <title>Signal100 RP</title>
  </head>
  <?php  
    require_once "includes/functions.php";
  	$error = "";
  	if(isset($_SESSION["Nosubmit"])) {
        $error = "The Submit Button Was Not Used!";
        session_unset();
        session_destroy();
      }
  ?>
  <body>
	<div class="register-form">
		<h1>Register</h1>
		<div class='error'><?php echo $error; ?></div>
		<form action="includes/actions/register.php" method="post">
			<input type="text" placeholder="Username" name="username">
			<input type="email" placeholder="E-Mail" name="email">
			<input type="password" placeholder="Password" name="password">
			<input type="password" placeholder="Confirm Password" name="confirmPassword">
			<input type="submit" name="submit"  value="Register Now">
		</form>
		<p>Already registered? <a href="login.php">Login now!</a></p>
	</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
<?php require_once "includes/header.php"; ?>
<?php 
	$username = "";
	$email = "";
	$code = "";
	$msg = "";

	use \PHPMailer\PHPMailer\PHPMailer;
	use \PHPMailer\PHPMailer\Exception;

		//Load Composer's autoloader
	require 'includes/vendor/autoload.php';

	if(isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$email = $_SESSION['email'];
		$code = $_SESSION['code'];
		$msg = '
			<div class="tksMSG">
				<h1>Hello <?php echo $username; ?>, </h1>
				<p>Thanks for registering for Signal 100 Roleplay, but before we can let you login you need to verify your account. We have sent you an email containing your verification code. Please use that code and confirm you account for us. It is possible that this code went to your spam, so before going to an administrator about not reciving you code please check your spam folder.</p>

				<p>The Email you signed up with is: <?php echo $email; ?></p>

				<p>If you have any questions feel free to contact an admin.</p>

				<a href="code.php"><button class="codeBTN">Submit My Code</button></a>
			</div>
		';

		$emailContent = '
		<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="margin: 0; padding: 0;">
	<div class="msg">
		<div class="msg-header" style="width: 100vw; background: #2e2f3a; color: #2e2f3a;">
			<small>Hey ' . $username . ', Thanks for registering with us. Just confirm you account and you will be able to login.</small>
			<h1 style="color: white; text-align: center; padding: 20px; margin-top: -20px;">Signal 100 Roleplay</h1>
		</div>
		<div class="msg-body" style="padding: 24px;">
			<h1>Hello ' . $username . ',</h1>
			<p>Thanks for registering with Signal 100 roleplay. We are thrilled that you created an account, but before we can register you must confirm your account.</p>
			<p>You probably are wondering why we do this.... Well we get so much spam, and we needed a way to prevent people from spaming our community. That is why we now have this email verification.</p>

			<h2 style="font-size: 20px;">Your Verification code is: ' . $code . '</h2>
			<p>When submitting that code all you have to do is copy and pase the numbers.</p>

			<h2>Account Info: </h2>
			<p>Username: ' . $username . '</p>
			<p>Password: We are sorry, but we cannot give out that info</p>
			<p>Current Rank: <span class="good" style="color: darkgreen;">Member</span></p>
			<p>Verification Status: <span class="bad" style="color: darkred;">Not Verified</span></p>

			<h2>Joining The Server: </h2>
			<p>Now that you are registered on the website, you may become a full civilian. You just have to register on the our <a href="cad.dag-hq.com" style="text-decoration: none; color: darkgreen; font-weight: bold;">CAD SYSTEM</a>. Its free, easy, and accessible in game</p>

			<h3> -- Helpful Commands -- </h3>
			<ul>
				<li>F6 - This is our main menu</li>
				<li>Y - This brings up our in game tablet</li>
				<li>F1 - This is our In Game Trainer</li>
			</ul>

			<h3> -- Getting Started -- </h3>
			<ol>
				<li>When you get in game create an idenity.</li>
				<li>Then Located behind you are our jobs. (Select 1)</li>
				<li>Start the grind to become the richest player.</li>
			</ol>
			<a href="https://dag-hq.com/code.php"><button style="border: none; border-radius: 25px; color: white; padding: 15px; background: #2e2f3a;">Submit Code Now</button></a>
			<hr>
			Best Regards,
			<blockquote style="border-left: 4px solid black; padding-left: 4px;">Signal 100 Civilian and Community Manager</blockquote>
		</div>
		<div class="msg-footer" style="background-color: #2e2f3a; text-align: center; color: white;">
			&copy; Copyright 2018 Signal 100 Roleplay. All rights reserved!
		</div>
	</div>
</body>
</html>
	';

		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'mail.dag-hq.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'support@dag-hq.com';                 // SMTP username
		    $mail->Password = 'Cartarman1';                           // SMTP password
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 465;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('support@dag-hq.com', 'Signal 100 Roleplay | Registration Center');
		    $mail->addAddress($email, $username);     // Add a recipient Name is optional
		    $mail->addReplyTo('support@dag-hq.com', 'Signal 100 Support');

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Signal 100 Roleplay';
		    $mail->Body    = $emailContent;
		    $mail->AltBody = 'Thanks for registering your code is: ' . $code;

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	} else if(isset($_SESSION['ConfCode'])) {
		$username = $_SESSION['username'];
		$code = $_SESSION['code'];
		$msg = '
			<div class="tksMSG">
				<h1>Hell <?php echo $username ?>,</h1>
				<p>You have just registered your code. You will now be able to login. Please note that sometimes errors do accure, and if one does accue please let a developer know as soon as possible.</p>

				<p>The Email you signed up with is: <?php echo $email; ?></p>
				<p>Your Code Was: <?php echo $code; ?></p>

				<p>If you have any questions feel free to contact an admin.</p>

				<a href="login.php"><button class="codeBTN">Login Now</button></a>
			</div>
		';
	} 

	if(isset($_SESSION['loggedin'])) {
		$nmsg = "You are currently Logged in as: " . $_SESSION['username'] . ". Would you like to go to your account? Just click on the account tab located at the top of the page.";
	} else {
		$nmsg = "It would apear you are not logged in. If you wouldl ike to register a new account or login just click the tab loacted at the top of the page. It free to create an accout.";
	}

	

	echo $msg;

	

?>

<?php require_once "includes/footer.php"; ?>	
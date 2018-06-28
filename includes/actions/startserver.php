<?php  
	if(isset($_POST['submit'])) {
		exec("START start.bat");
	} else {
		echo "Error";
	}
	if(isset($_POST['stop'])) {
		exec('START close.bat');
		header("Location: ../../index.php");
	}
	?>

	<form action="" method="post">
		<button name="stop">STOP</button>
	</form>
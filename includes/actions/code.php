<?php  
require_once "../functions.php";
session_start();
	if(isset($_POST['submit'])) {
		$code = escape($_POST["code"]);
		require_once "../db.php";

		if(empty($code) || $code == "S100 - ") {
			$_SESSION["codeEmpty"] = $code;
			url("../../code.php?code=EMPTY");
		}

		$sql = "SELECT * FROM users WHERE user_verification = '$code'";
		$result = mysqli_query($connection, $sql);

		$resultCheck = mysqli_num_rows($result);

		if($resultCheck < 1) {
			$_SESSION["NoCode"] = $code;
			url("../../code.php?code=Invalid");
		} else if($resultCheck > 1) {
			$_SESSION["CodeError"];
			url("../../code.php?code=ToManyResults");
		} else {

			if($row = mysqli_fetch_assoc($result)) {

				if($row["user_varified"] == "true") {
					$_SESSION["Verifed"] = "Verified";
					url("../../code.php?user=alreadyVarified");
					exit();
				}

			}

			$sql = "UPDATE users SET user_varified = 'true' WHERE user_verification = '$code'";
			mysqli_query($connection, $sql);

			url("../../thankyou.php?verification=true");
		}
	} else {
		$_SESSION["noSubmit"] = "Submit button not used";
		url("../../code.php?submitButton=NotUsed");
	}
?>
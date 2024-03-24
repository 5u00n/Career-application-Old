<?php
if (!session_id()) {

	session_start();
} else {
	session_unset();
	session_destroy();
}
ob_start();
?>


<?php


include 'include/config.php';
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$db->select_db("$dbname");

?>

<?php

$mailInfo = "* Check e-mail for CODE.";
$email = "";
$page = 1;
$code = "";
$button_text = "SEND CODE";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$email = $_POST['email'];

	if (isset($_POST['reg'])) {

		//	echo "<script>location='layout/register.php'</script>";
		Header("location:layout/register.php", true);
		exit;
	}
	if (isset($_POST['resend'])) {

		$code_n = mt_rand(100000, 999999);

		//checking if email is present in the database.
		$check = check_exist($email, $db);


		if ($check == 1) {
			if (send_mail($email, $code_n)) {
				$button_text = "RESEND CODE";
				up_data($email, $code_n, $db);
				$mailInfo = "Code re-sent to mail: $email";
			} else {
				$mailInfo = "Mail error : Try Again...";
			}
		} else {
			$mailInfo = "No Entry As: $email ,Please Register";
		}
	}
}
if (isset($_POST['login'])) {


	//setting session.


	$code = $_POST['ver-code'];
	//$mailInfo = "Mail error : Try Again...";
	$checkC = check_code($email, $code, $db);
	if ($checkC == 1) {
		$_SESSION['email'] = $email;
		$_SESSION['comp'] = "no";
		//echo "<script>location='layout/r_per.php'</script>";
		header("location:layout/r_per.php", true);
		exit;
	} else if ($checkC == 2) {
		$_SESSION['email'] = $email;
		$_SESSION['comp'] = "yes";
		header("location:layout/view_only.php", true);
		exit;
		//echo "<script>location='layout/view_only.php'</script>";

	} else {
		$mailInfo = "Code Entered is Incorect";
	}
}

function check_exist($email, $db)
{
	$sql = "SELECT email,p_info FROM regis_candidate";
	$result = $db->query($sql);
	$flag = 0;
	if ($result->num_rows > 0) {
		foreach ($result as $row) {
			//echo $row["email"];

			if (!strcmp($email, $row["email"])) {

				$flag = (int) ($row["p_info"] >= 1);
				break;
			} else {
				$flag = 0;
			}
		}
	} else {
		$flag = 0;
	}
	return $flag;
}

function send_mail($email, $code)
{
	$to_email = $email;
	$subject = "CODE FOR JOB APPLICATION  " . $code;
	$body = "Hello,This mail is to complete the Form. Your Code is:  " . $code;
	$separator = md5(time());

	// carriage return type (RFC)
	$eol = "\r\n";

	$headers = "From: OFFICE <hr@some.org>" . $eol;
	$headers .= "MIME-Version: 1.0" . $eol;
	$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
	$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
	$headers .= "This is a MIME encoded message." . $eol;

	return mail($to_email, $subject, $body, $headers);
}

function up_data($email, $code, $db)
{
	if ($db->query("UPDATE regis_candidate SET  code='$code'  where email ='$email'"))
		return 1;
	else {
		echo $db->error;
		return 0;
	}
}

function check_code($email, $code, $db)
{
	$sql = "SELECT code,p_info,complete FROM regis_candidate where email ='$email'";
	$result = $db->query($sql);
	//echo $result;

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			if (!strcmp($code, $row["code"]))
				return 1 + !strcmp("true", $row["complete"]);
			else
				return 0;
		}
	} else {
		return 0;
	}
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>JOB APPLICATION</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" type="img/x-icon" href="img/favicon.ico" />
	<link href="css/style1.css?version=1" rel="stylesheet" />

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<body>
	<div class="site">

		<header>
			<img src="img/logo.png" />
			<h1>
				Any Oranization
			</h1>
			<p>(Vide Maharashtra Act No. XIV of 2014)<br />Pune 411067</p>
			<h3>JOB APPLICATION FORM</h3>
		</header>



		<form class="index" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="register">
			<div class="register">
				<h4><strong>REGISTER</strong></h4>
				<p class="info" style=" background-color: white;border:1px solid grey;height:140px;padding:5px;font-size:9pt;color: red;margin-left:20px">*Please Scan Required Documents before you begin.
					<br> 1. Photo and signature in .jpg or .png format.
					<br> 2. All qualification documents in .pdf form.<br>
					<br>[PLEASE NOTE] Register first if you haven't done yet.<br>
					Login if you've already registered.<br>
					All your inputs will be saved only if you press 'PROCEED' at the bottom of each page.
				</p>
				<div class="group-nav ">
					<button class="button-basic" id="submit" type="submit" name="reg" value="Submit" onclick="dis_all()">
						<strong>REGISTER NOW</strong>
					</button>
				</div>
			</div>
			<div class="login">
				<h4 style="margin-bottom:4px;"><strong>LOG-IN</strong></h4>
				<p style="color: red;margin:2px 70px;margin-bottom:20px;font-size:10pt;">[PLEASE NOTE]: Register First.
				</p>
				<div class="group" style="margin-bottom: 40px;">
					<input id="mail" class="material material-small" value="" type="email" name="email" required />
					<span class="highlight"></span>
					<span class="bar bar-small"></span>
					<label id="email-place" class="material">Email...</label>
				</div>


				<div class="group" id="code-div" style="margin-bottom: 20px;">
					<input id="code" class="material  material-small" type="text" name="ver-code" required />
					<span class="highlight"></span>
					<span class="bar bar-small"></span>
					<label class="material">Code...</label>
				</div>


				<p id="code-info" style="margin:0px;color: red;text-align:center"><?php echo $mailInfo; ?><button type="submit" name="resend" onclick="dis()">Resend Code</button>
				</p>

				<div class="group-nav ">
					<button class="button-basic" id="submit" type="submit" name="login" value="Submit">
						<strong>LOGIN</strong>
					</button>
				</div>

			</div>
		</form>





		<?php
		include_once('include/foot.php');
		?>
	</div>



	<script src="https://code.jquery.com/jquery-2.2.2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

	<script>
		$(document).ready(function() {
			if ($("#code-info").text() == "Code sent to mail: " + $(mail).val() || $("#code-info").text() === "Code re-sent to mail: " + $(mail).val())
				$("#code-div").show();

			if ($("#code-info").text() == $(mail).val() + " is already taken Go To: Login") {
				$("#code-info").css('margin-bottom', '50px');
			}
			$("#code").change(function() {
				document.getElementById("code").required = true;
			});

			$("#mail").change(function() {
				document.getElementById("mail").required = true;
				if (validE($("#mail").val())) {
					$(".s").show();
					$("#code-info").css('margin-bottom', '0px');
					document.getElementById("email-place").innerHTML = "Email...";
				} else {
					$("#mail").val("");
					document.getElementById("email-place").innerHTML = "Enter Valid Email...";
					$("#code-info").text("* Please enter valid email.");
				}
			});

		});

		function dis() {
			document.getElementById("code").required = false;

		}

		function dis_all() {
			document.getElementById("code").required = false;
			document.getElementById("mail").required = false;

		}

		function validE(email) {
			const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}
	</script>

</body>

</html>

<?php

ob_end_flush();
?>
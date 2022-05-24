<?php include '../include/config.php'; ?>

<?php
session_start();
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$db->select_db("$dbname");

?>


<?php

$mailInfo = "* Please enter email to receive a CODE.";
$email = "";
$page = 1;
$code = "";
$button_text = "SEND CODE";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = $_POST['veremail'];

  //setting session.
  $_SESSION['email'] = $email;
  $_SESSION['comp'] ="no";
  //if code sending button is clicked.
  if (isset($_POST['res_code'])) {

    //Genarating Code.
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
    } else if ($check == 2) {
      $button_text = "SEND CODE";
      $mailInfo = "$email is already taken Go To: <a style='border:0.7px solid;padding:4px;' href='/'>Login</a>";
    } else {
      if (send_mail($email, $code_n)) {
        $button_text = "RESEND CODE";
        in_data($email, $code_n, $db);
        $mailInfo = "Code sent to mail: $email";
      } else {
        $mailInfo = "Mail error : Try Again...";
      }
    }
  }
  if (isset($_POST['submit'])) {
    $code = $_POST['ver-code'];
    //$mailInfo = "Mail error : Try Again...";
    $checkC = check_code($email, $code, $db);
    if ($checkC == 1) {
      Header("location:r_per.php");
      exit;
    } else if ($checkC == 2) {
      $mailInfo = "$email is already taken Go To: <a style='border:0.7px solid;padding:4px;' href='/'>Login</a>";
    } else {
      $mailInfo = "Code Entered is Incorect";
    }
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

        $flag = 1 + (int) ($row["p_info"] >= 1);
        break;
      } else {
        $flag = 0;
      }
    }
  } else {
    $flag = 0;
  }
  //$result = $db->query($sql);
  //echo $result;

  /*

    while ($row = $result->fetch_assoc()) {

      
      */
  return $flag;
}

function in_data($email, $code, $db)
{
  if ($db->query("INSERT INTO regis_candidate(email,code) VALUES ('$email','$code')"))
    return 1;
  else if (strcmp("Duplicate entry $email for key 'email'", $db->error)) {
    return 2;
  } else {
    return 0;
  }
}

function send_mail($email, $code)
{
  $to_email = $email;
  $subject = "CODE FOR  JOB APPLICATION  " . $code;
  $body = "Hello,This mail is to complete the  Form. Your Code is:  " . $code;
   $separator = md5(time());

  // carriage return type (RFC)
  $eol = "\r\n";

  $headers = "From:  OFFICE <sau@sau.edu.in>" . $eol;
  $headers .= "MIME-Version: 1.0" . $eol;
  $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
  $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
  $headers .= "This is a MIME encoded message." . $eol;

  return mail($to_email, $subject, $body, $headers);
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

function update_page($email, $db)
{
  if ($db->query("UPDATE p_info SET  p_info='1'  where email ='$email'"))
    return 1;
  else {
    echo $db->error;
    return 0;
  }
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


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> JOB APPLICATION</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="../css/style1.css?version=1" rel="stylesheet" />
</head>


<body lang=EN-US style='tab-interval:.5in'>

  <div class="site">
    <header>
      <img src="../img/logo.png" />
      <h1>
        Organization Name
      </h1>
      <p>( Maharastra 2021 ))<br />Pune 411067</p>
      <h3>JOB APPLICATION FORM</h3>
    </header>

    <?php
   include_once('../include/nav.php')
   ?>


    <div class="sub-header">
      <h4>REGISTRATION</h4>
    </div>

    <!-- register form section start -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="register" class="main-form">
      <div class="group" style="margin-bottom: 10px;">
        <input id="mail" class="material material-mid" value="<?php echo $email ?>" type="email" name="veremail" required />
        <span class="highlight"></span>
        <span class="bar"></span>
        <label id="email-place" class="material">Email...</label>
      </div>
      <p id="code-info" style="margin:0px;color: red;text-align:center"><?php echo $mailInfo; ?></p>

      <div  class="group-nav s" style="margin:10px auto">
        <button class="button-basic" id="go-first" type="submit" name="res_code" onclick="dis()">
          <strong><?php echo $button_text; ?></strong>
        </button>
      </div>
      <div class="group" id="code-div">
        <input id="code" class="material  material-mid" type="password" name="ver-code" required />
        <span class="highlight"></span>
        <span class="bar bar-small"></span>
        <label class="material">Code...</label>
      </div>

      <div  class="group-nav ">
        <button class="button-basic" id="submit" type="submit" name="submit" value="Submit">
          <strong>VERIFY</strong>
        </button>
      </div>
    </form> <!-- register form section end -->

    <?php
include_once('../include/foot.php');
  ?>

  </div>



  <script src="https://code.jquery.com/jquery-2.2.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#code-div").hide();
      if ($("#code-info").text() == "Code sent to mail: "+$(mail).val() || $("#code-info").text() === "Code re-sent to mail: "+$(mail).val())
        $("#code-div").show();

      if ($("#code-info").text() == $(mail).val()+" is already taken Go To: Login"){
        $(".group-nav").hide();
        $("#code-info").css('margin-bottom','50px');
      }
      $("#code").change(function() {
        document.getElementById("code").required = true;
      });

      $("#mail").change(function() {
        if (validE($("#mail").val())) {
          $(".s").show();
          $("#code-info").text("* click send or resend button receive a CODE.");
          $("#code-info").css('margin-bottom','0px');
          document.getElementById("email-place").innerHTML = "Email...";
        } else {
          $("#mail").val("");
          document.getElementById("email-place").innerHTML = "Enter Valid Email...";
          $("#code-info").text("* Please enter valid email to receive a CODE.");
        }
      });

      /* $("#code-info").change(function(){
           if($("#code-info").val()=="Code re-sent to mail: he.su00n@gmail.com" || $("#code-info").val()=="Code re-sent to mail: he.su00n@gmail.com")
           $("#code-div").show();
       });*/
    });

    function dis() {
      document.getElementById("code").required = false;

    }

    function validE(email) {
      const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
  </script>

</body>

</html>
<!-- php quary section -->
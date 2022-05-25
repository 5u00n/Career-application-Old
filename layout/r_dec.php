<?php
if (!session_id()) {

  session_start();
}
ob_start(); ?>

<?php


$email = "";

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
} else {
  header("location:../", true);
  exit;
  //echo "<script>location='register.php'</script>";
}
?>

<?php
include '../include/config.php';
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$db->select_db("$dbname");
?>


<?php


/*require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();*/
?>

<?php

$fullname = $fname = "";
$img_loc = $sig_loc = $s_place = $sig_name = $img_name = "";
$s_date = date("d/m/Y");
$page = 6;
$p_info = checkProgress($email, $db);
//echo $p_info;
$row = getProgress($email, $db);
$fullname = $row['fullname'];
if (((int) $p_info - 6) >= 0) {
  $img_loc = $row['img_loc'];
  $img_mid = explode("/", $img_loc);
  if (sizeof($img_mid) == 4)
    $img_name = $img_mid[3];
  $sig_loc = $row['sig_loc'];
  $sig_mid = explode("/", $sig_loc);
  if (sizeof($sig_mid) == 4)
    $sig_name = $sig_mid[3];
  //$s_date = $row['s_date'];
  $s_place = $row['s_place'];

  $fname = explode(" ", $fullname);
  //echo $s_date.":";
} else {
  $p_info = 6;
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['back'])) {
    header("location:r_work.php", true);
    exit;
    // echo "<script>location='r_work.php'</script>";
  }
  if (isset($_POST['submit'])) {
    // $s_date = $_POST['today'];
    $uploadOk = 1;
    $s_place = $_POST['filled-place'];



      $target_dir = $udir . $email . "/";


    if (!file_exists($udir . $email)) {
      mkdir($udir . $email);
    }



    //My style

    $flag = 0;

    if (file_exists($udir . $email)) {
      if ($_FILES["photo"]["name"]!="") {
        $img_loc = $target_dir . basename($_FILES["photo"]["name"]);
        $flag = move_uploaded_file($_FILES["photo"]["tmp_name"], $img_loc);
        $img_mid = explode("/", $img_loc);
        if (sizeof($img_mid) == 4)
          $img_name = $img_mid[3];

      } else {
      }
      if ($_FILES["sign"]["name"]!="") {
        $sig_loc = $target_dir . basename($_FILES["sign"]["name"]);
        $flag = move_uploaded_file($_FILES["sign"]["tmp_name"], $sig_loc);
        $sig_mid = explode("/", $sig_loc);
        if (sizeof($sig_mid) == 4)
          $sig_name = $sig_mid[3];

      } else {
      }
    }
    else{
        $flag=2;
    }



    if (put_data($email, $img_loc, $sig_loc, $s_date, $s_place, $p_info, $db) == 1) {
      if ($flag <= 1) {
        header("location:r_final.php", true);
        exit;
      } else {
        echo " <script> alert('File did not upload properly, Try Again:: CODE:  ".$flag."');</script>";
     
      }
    } else {
      echo " <script> alert('Data did not update properly, Try Again');</script>";
      //echo "error";
    }
  }
}

function put_data($email, $img_loc, $sig_loc, $s_date, $s_place, $p_info, $db)
{
  if ($db->query("UPDATE regis_candidate SET img_loc='$img_loc', sig_loc='$sig_loc', s_date='$s_date',s_place='$s_place', p_info='$p_info' where email ='$email'"))
    return 1;
  else {
    echo $db->error;
    return 0;
  }
}


function checkProgress($email, $db)
{
  $sql = "SELECT p_info FROM regis_candidate where email ='$email'";
  $result = $db->query($sql);
  //echo $result;

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      return $row["p_info"];
    }
  } else {
    return -1;
  }
}

function getProgress($email, $db)
{
  $sql = "SELECT fullname,sig_loc,img_loc,s_date,s_place FROM regis_candidate where email ='$email'";
  $result = $db->query($sql);
  //echo $result;

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      return $row;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SAU JOB APPLICATION</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="img/x-icon" href="../img/favicon.ico" sizes="16x16" />
  <link href="../css/style1.css" rel="stylesheet" />

</head>

<body>
  <div class="site">
    <header>
      <img src="../img/logo.png" />
      <h1>
        Spicer Adventist University
      </h1>
      <p>(Vide Maharashtra Act No. XIV of 2014)<br />Pune 411067</p>
      <h3>JOB APPLICATION FORM</h3>
    </header>

    <?php
    include_once('../include/nav.php')
    ?>

    <div class="sub-header">
      <span><strong>Hello :</strong><?php echo $_SESSION['email']; ?></span>
      <h4>DECLARATION</h4>
      <a href="logout.php">Logout</a>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="register" class="main-form" enctype="multipart/form-data">
      <div class="picture-upload-div" align="centre">
        <img id="face-img" name="face-img" src="<?php echo $img_loc; ?>" alt="Upload Your Picture" />

        <div class="face-div">
          <div class="custom-photo">
            <input name="photo" type="file" onchange="readURL(this,'#face-img')" />
            <input type="button" value="Choose File" />
            <input class="file-test" type="text" placeholder="No file Selected" value="<?php echo $img_name; ?>" />
          </div>
          <br />
          <p style="color: red;">
            * Please upload your passport size photograph, <br />with file name as ("photo.png" or "photo.jpg")
            <br>
            *The image size should 20kb to 1mb.
          </p>
        </div>

        <img id="sign-img" name="sign-img" src="<?php echo $sig_loc; ?>" alt="Upload Your Signature" />


        <div class="sig-div">
          <div class="custom-photo">
            <input name="sign" type="file" onchange="readURL(this,'#sign-img')" accept="image/x-png,image/jpeg" />
            <input type="button" value="Choose File" />
            <input class="file-test" type="text" placeholder="No file Selected" value="<?php echo $sig_name; ?>" />
          </div>

          <p style="color: red;">
            * Please sign on a clean sheet(width 300px,height 100px)<br>
            upload the file named as ('sign.png' / 'sign.jpg') .
            <br>
            *The image size should be 20kb to 1mb.
          </p>
        </div>
      </div>

      <br />

      <p>
        I,
        <strong id="applicant_name" name="applicant_name" style="
              text-decoration-line: underline;
              text-decoration-style: solid;
              font-style: italic;
            "><?php echo $fullname; ?></strong>
        declare that the informations provided by me on the above mentioned
        form is true and correct <br />to the best of my knowledge and belief.
      </p>
      <br />

      <lable id="today-l">DATE -</lable>
      <lable id="today" name="today"><?php echo $s_date; ?></lable>
      <br />
      <br />
      <lable id="filled-place-l">PLACE-</lable>
      <input type="text" id="filled-place" name="filled-place" placeholder="Enter place" style="
            width: 200px;
            height: 28px;
            background-color: #e4e3e386;
            border: 1px solid grey;
          " value="<?php echo $s_place; ?>" required />
      <div class="group-nav">
        <button class="button-basic" id="go-first" name="back" type="submit">
          <strong>GO BACK</strong>
        </button>
        <button class="button-basic" id="submit" name="submit" type="submit" value="Submit">
          <strong>PROCEED</strong>
        </button>
      </div>
    </form>
    <?php
    include_once('../include/foot.php');
    ?>

  </div>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.custom-photo input[type="file"]').change(function(e) {
        $(this).siblings(".file-test").val(e.target.files[0].name);
      });

    });
  </script>
  <script>
    function readURL(input, ids) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $(ids)
            .attr('src', e.target.result)
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
</body>

</html>

<?php
ob_end_flush();
?>
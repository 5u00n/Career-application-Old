<?php 
if ( ! session_id() ) {

session_start();

}
ob_start();
 ?>

<?php


$email = "";

if (isset($_SESSION['email']) && $_SESSION['comp'] == "no") {
  $email = $_SESSION['email'];
} else {
    header("location:../",true);
    exit;
  echo "<script>location='../'</script>";
}
?>

<?php

include '../include/config.php';
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$db->select_db("$dbname");
?>


<?php
$rw_sup = $rpap_pub = $rpap_pre = $meet_attnd = $awards = "";
$rf1_name = $rf1_title = $rf1_inst = $rf1_phn =
  $rf2_name = $rf2_title = $rf2_inst = $rf2_phn =
  $rf3_name = $rf3_title = $rf3_inst = $rf3_phn = "";
$page = 4;
$p_info = checkProgress($email, $db);
if (((int) $p_info - 4) >= 0) {
  $row = getProgress($email, $db);
  $rw_sup = $row['rw_sup'];
  $rpap_pre = $row['rpap_pre'];
  $rpap_pub = $row['rpap_pub'];
  $meet_attnd = $row['meet_attnd'];
  $awards = $row['awards'];

  $rf1_name = $row['rf1_name'];
  $rf1_title = $row['rf1_title'];
  $rf1_inst = $row['rf1_inst'];
  $rf1_phn = $row['rf1_phn'];
  $rf2_name = $row['rf2_name'];
  $rf2_title = $row['rf2_title'];
  $rf2_inst = $row['rf2_inst'];
  $rf2_phn = $row['rf2_phn'];
  $rf3_name = $row['rf3_name'];
  $rf3_title = $row['rf3_title'];
  $rf3_inst = $row['rf3_inst'];
  $rf3_phn = $row['rf3_phn'];
} else {
  $p_info = 4;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['back'])) {
      header("location:r_qual.php",true);
      exit;
    //echo "<script>location='r_qual.php'</script>";
  }
  if (isset($_POST['submit'])) {
    $rw_sup = addslashes($_POST['res-work-sup']);
    $rpap_pre = addslashes($_POST['res-pre']);
    $rpap_pub = addslashes($_POST['res-pub']);
    $meet_attnd = addslashes($_POST['conf-attnd']);
    $awards = addslashes($_POST['award-work']);
    
    

    $rf1_name = $_POST['ref-name1'];
    $rf1_title = $_POST['ref-title1'];
    $rf1_inst = $_POST['ref-inst1'];
    $rf1_phn = $_POST['ref-phno1'];
    $rf2_name = $_POST['ref-name2'];
    $rf2_title = $_POST['ref-title2'];
    $rf2_inst = $_POST['ref-inst2'];
    $rf2_phn = $_POST['ref-phno2'];
    $rf3_name = $_POST['ref-name3'];
    $rf3_title = $_POST['ref-title3'];
    $rf3_inst = $_POST['ref-inst3'];
    $rf3_phn = $_POST['ref-phno3'];

    if (put_data(
      $email,
      $rw_sup,
      $rpap_pre,
      $rpap_pub,
      $meet_attnd,
      $awards,
      $rf1_name,
      $rf1_title,
      $rf1_inst,
      $rf1_phn,
      $rf2_name,
      $rf2_title,
      $rf2_inst,
      $rf2_phn,
      $rf3_name,
      $rf3_title,
      $rf3_inst,
      $rf3_phn,
      $p_info,
      $db
    ) == 1) {
     //echo "<script>location='r_dec.php'</script>";
     header("location:r_dec.php",true);
      exit;
    } else {
      //echo "error";
    }
  }
}

function put_data(
  $email,
  $rw_sup,
  $rpap_pre,
  $rpap_pub,
  $meet_attnd,
  $awards,
  $rf1_name,
  $rf1_title,
  $rf1_inst,
  $rf1_phn,
  $rf2_name,
  $rf2_title,
  $rf2_inst,
  $rf2_phn,
  $rf3_name,
  $rf3_title,
  $rf3_inst,
  $rf3_phn,
  $p_info,
  $db
) {
  if ($db->query("UPDATE regis_candidate SET 
  rw_sup='$rw_sup',rpap_pre='$rpap_pre',
  rpap_pub='$rpap_pub',meet_attnd='$meet_attnd',awards='$awards',
  rf1_name='$rf1_name',
    rf1_title='$rf1_title',
    rf1_inst='$rf1_inst',
    rf1_phn='$rf1_phn',
    rf2_name='$rf2_name',
    rf2_title='$rf2_title',
    rf2_inst='$rf2_inst',
    rf2_phn='$rf2_phn',
    rf3_name='$rf3_name',
    rf3_title='$rf3_title',
    rf3_inst='$rf3_inst',
    rf3_phn='$rf3_phn',
   p_info='$p_info' where email ='$email'"))
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
  $sql = "SELECT rw_sup,rpap_pre,rpap_pub,meet_attnd,awards,
    rf1_name,rf1_title,rf1_inst,rf1_phn,rf2_name,rf2_title,rf2_inst,
  rf2_phn,rf3_name,rf3_title,rf3_inst,rf3_phn FROM regis_candidate where email ='$email'";
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
  <title>JOB APPLICATION</title>
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
        Any Oranization
      </h1>
      <p>(Vide Maharashtra Act No. XIV of 2014)<br />Pune 411067</p>
      <h3>JOB APPLICATION FORM</h3>
    </header>

    <?php
    include_once('../include/nav.php')
    ?>


    <div class="sub-header">
      <span><strong>Hello :</strong><?php echo $_SESSION['email']; ?></span>
      <h4>WORK AND REFERENCE</h4>
      <a href="logout.php">Logout</a>
    </div>

    <form method="post" style="text-align: center;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="register" class="main-form">

      <p><strong>WORK DONE</strong></p>
      <hr>
      
      <br>
      <div class="extra-work-div-form" style="margin: 0px auto;">
        <lable id="res-work-sup-l" for="res-work-sup"><strong>RESEARCH WORK SUPERVISED </strong>(If yes, give
          details, less than 500 words)</lable>
        <br />
        <textarea id="res-work-sup" name="res-work-sup" cols="90" rows="5" maxlength="500"><?php echo $rw_sup; ?></textarea>
        <br />
        <br>
        <lable id="res-pre-l" for="res-pre"><strong>RESEARCH PAPERS PUBLISHED </strong>(If yes, give
          details, less than 500 words)</lable>
        <br />
        <textarea id="res-pub" name="res-pub" cols="90" rows="5" maxlength="500"><?php echo $rpap_pub; ?></textarea>
        <br>
        <br />
        <lable id="res-pre-l" for="res-pre"><strong>RESEARCH PAPERS PRESENTED </strong>(If yes, give
          details, less than 500 words)</lable>
        <br />
        <textarea id="res-pre" name="res-pre" cols="90" rows="5" maxlength="500"><?php echo $rpap_pre; ?></textarea>
        <br>
        <br />
        <lable id="conf-attnd-l" for="conf-attnd"><strong>CONFERENCES/ SEMINARS/ WORKSHOPS ATTENDED </strong>(If yes,
          give details, less than 500 words)</lable>
        <br />
        <textarea id="conf-attnd" name="conf-attnd" cols="90" rows="5" maxlength="500"><?php echo $meet_attnd; ?></textarea>
        <br>
        <br />
        <lable id="award-work-sup-l" for="award-work-sup"><strong>AWARDS/ PATENTS/ FELLOWSHIP </strong>(If yes, give
          details, less than 500 words)</lable>
        <br />
        <textarea id="award-work" name="award-work" cols="90" rows="5" maxlength="500"><?php echo $awards; ?></textarea>
      </div>
      <br><br><br>

      <p><strong>REFERENCE</strong></p>
      <hr>

      <table class="ref-table-form">
        <tbody>
          <tr>
            <th>
              <p>Name</p>
            </th>
            <th>
              <p>Title</p>
            </th>
            <th>
              <p>Institution</p>
            </th>
            <th>
              <p>Phone No.</p>
            </th>
          </tr>

          <tr>
            <td>
              <input type="text" id="ref-name1" value="<?php echo $rf1_name; ?>" name="ref-name1" />
            </td>
            <td>
              <input type="text" id="ref-title1" value="<?php echo $rf1_title; ?>" name="ref-title1" />
            </td>
            <td>
              <input type="text" id="ref-inst1" value="<?php echo $rf1_inst; ?>" name="ref-inst1" />
            </td>
            <td>
              <input type="text" id="ref-phno1" value="<?php echo $rf1_phn; ?>" name="ref-phno1" />
            </td>
          </tr>

          <tr>
            <td>
              <input type="text" id="ref-name2" value="<?php echo $rf2_name; ?>" name="ref-name2" />
            </td>
            <td>
              <input type="text" id="ref-title2" value="<?php echo $rf2_title; ?>" name="ref-title2" />
            </td>
            <td>
              <input type="text" id="ref-inst2" value="<?php echo $rf2_inst; ?>" name="ref-inst2" />
            </td>
            <td>
              <input type="text" id="ref-phno2" value="<?php echo $rf2_phn; ?>" name="ref-phno2" />
            </td>
          </tr>

          <tr>
            <td>
              <input type="text" id="ref-name3" value="<?php echo $rf3_name; ?>" name="ref-name3" />
            </td>
            <td>
              <input type="text" id="ref-title3" value="<?php echo $rf3_title; ?>" name="ref-title3" />
            </td>
            <td>
              <input type="text" id="ref-inst3" value="<?php echo $rf3_inst; ?>" name="ref-inst3" />
            </td>
            <td>
              <input type="text" id="ref-phno3" value="<?php echo $rf3_phn; ?>" name="ref-phno3" />
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
      <div class="group-nav">
        <button class="button-basic" id="go-first" name="back" type="submit">
          <strong>GO BACK</strong>
        </button>
        <button class="button-basic" id="submit" type="submit" name="submit" value="Submit">
          <strong>PROCEED</strong>
        </button>
      </div>
    </form>
    <?php
include_once('../include/foot.php');
  ?>

  </div>
</body>

</html>

<?php
ob_end_flush();
?>

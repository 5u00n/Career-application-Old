<?php include '../include/config.php'; ?>

<?php


$email = "";
session_start();

if (isset($_SESSION['email']) && $_SESSION['comp'] == "no") {
  $email = $_SESSION['email'];
} else {
  Header("location:../");
}
?>

<?php
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$db->select_db("$dbname");
?>


<?php
$fullname = $fname = "";
$page = 3;
$ssc_org = $ssc_my = $ssc_speci = $ssc_prcnt = $ssc_grade = $ssc_docl = $ssc_docln = "";
$hsc_org = $hsc_my = $hsc_speci = $hsc_prcnt = $hsc_grade = $hsc_docl = $hsc_docln = "";
$bd_org = $bd_my = $bd_speci = $bd_prcnt = $bd_grade = $bd_docl = $bd_docln = "";
$md_org = $md_my = $md_speci = $md_prcnt = $md_grade = $md_docl = $md_docln = "";
$mph_org = $mph_my = $mph_speci = $mph_prcnt = $mph_grade = $mph_docl = $mph_docln = "";
$phd_org = $phd_my = $phd_speci = $phd_prcnt = $phd_grade = $phd_docl = $phd_docln = "";
$exm_org = $exm_my = $exm_speci = $exm_prcnt = $exm_grade = $exm_docl = $exm_docln = "";
$te1_in = $te1_pst = $te1_sub = $te1_napp = $te1_yexp = $te2_in = $te2_pst = $te2_sub =
  $te2_napp = $te2_yexp = $te3_in = $te3_pst = $te3_sub = $te3_napp = $te3_yexp = "";
$ie1_in = $ie1_pst = $ie1_sub = $ie1_napp = $ie1_yexp = $ie2_in =
  $ie2_pst = $ie2_sub = $ie2_napp = $ie2_yexp = $ie3_in = $ie3_pst =
  $ie3_sub = $ie3_napp = $ie3_yexp = "";


$p_info = checkProgress($email, $db);
if (((int) $p_info - 3) >= 0) {
  $row = getProgress($email, $db);
  $fullname = $row['fullname'];
  $fname = explode(" ", $fullname);
  $ssc_org = $row['ssc_org'];
  $ssc_my = $row['ssc_my'];
  $ssc_speci = $row['ssc_speci'];
  $ssc_prcnt = $row['ssc_prcnt'];
  $ssc_grade = $row['ssc_grade'];
  $ssc_docl = $row['ssc_docl'];
  $ssc_mid = explode("/", $ssc_docl);
  if (sizeof($ssc_mid) == 4)
    $ssc_docln = $ssc_mid[3];
  $hsc_org = $row['hsc_org'];
  $hsc_my = $row['hsc_my'];
  $hsc_speci = $row['hsc_speci'];
  $hsc_prcnt = $row['hsc_prcnt'];
  $hsc_grade = $row['hsc_grade'];
  $hsc_docl = $row['hsc_docl'];
  $hsc_mid = explode("/", $hsc_docl);
  if (sizeof($hsc_mid) == 4)
    $hsc_docln = $hsc_mid[3];
  $bd_org = $row['bd_org'];
  $bd_my = $row['bd_my'];
  $bd_speci = $row['bd_speci'];
  $bd_prcnt = $row['bd_prcnt'];
  $bd_grade = $row['bd_grade'];
  $bd_docl = $row['bd_docl'];
  $bd_mid = explode("/", $bd_docl);
  if (sizeof($bd_mid) == 4)
    $bd_docln = $bd_mid[3];
  $md_org = $row['md_org'];
  $md_my = $row['md_my'];
  $md_speci = $row['md_speci'];
  $md_prcnt = $row['md_prcnt'];
  $md_grade = $row['md_grade'];
  $md_docl = $row['md_docl'];
  $md_mid = explode("/", $md_docl);
  if (sizeof($md_mid) == 4)
    $md_docln = $md_mid[3];
  $mph_org = $row['mph_org'];
  $mph_my = $row['mph_my'];
  $mph_speci = $row['mph_speci'];
  $mph_prcnt = $row['mph_prcnt'];
  $mph_grade = $row['mph_grade'];
  $mph_docl = $row['mph_docl'];
  $mph_mid = explode("/", $mph_docl);
  if (sizeof($mph_mid) == 4)
    $mph_docln = $mph_mid[3];
  $phd_org = $row['phd_org'];
  $phd_my = $row['phd_my'];
  $phd_speci = $row['phd_speci'];
  $phd_prcnt = $row['phd_prcnt'];
  $phd_grade = $row['phd_grade'];
  $phd_docl = $row['phd_docl'];
  $phd_mid = explode("/", $phd_docl);
  if (sizeof($phd_mid) == 4)
    $phd_docln = $phd_mid[3];
  $exm_org = $row['exm_org'];
  $exm_my = $row['exm_my'];
  $exm_speci = $row['exm_speci'];
  $exm_prcnt = $row['exm_prcnt'];
  $exm_grade = $row['exm_grade'];
  $exm_docl = $row['exm_docl'];
  $exm_mid = explode("/", $exm_docl);
  if (sizeof($exm_mid) == 4)
    $exm_docln = $exm_mid[3];

  $te1_in = $row['te1_in'];
  $te1_pst = $row['te1_pst'];
  $te1_sub = $row['te1_sub'];
  $te1_napp = $row['te1_napp'];
  $te1_yexp = $row['te1_yexp'];
  $te2_in = $row['te2_in'];
  $te2_pst = $row['te2_pst'];
  $te2_sub = $row['te2_sub'];
  $te2_napp = $row['te2_napp'];
  $te2_yexp = $row['te2_yexp'];
  $te3_in = $row['te3_in'];
  $te3_pst = $row['te3_pst'];
  $te3_sub = $row['te3_sub'];
  $te3_napp = $row['te3_napp'];
  $te3_yexp = $row['te3_yexp'];

  $ie1_in = $row['ie1_in'];
  $ie1_pst = $row['ie1_pst'];
  $ie1_sub = $row['ie1_sub'];
  $ie1_napp = $row['ie1_napp'];
  $ie1_yexp = $row['ie1_yexp'];
  $ie2_in = $row['ie2_in'];
  $ie2_pst = $row['ie2_pst'];
  $ie2_sub = $row['ie2_sub'];
  $ie2_napp = $row['ie2_napp'];
  $ie2_yexp = $row['ie2_yexp'];
  $ie3_in = $row['ie3_in'];
  $ie3_pst = $row['ie3_pst'];
  $ie3_sub = $row['ie3_sub'];
  $ie3_napp = $row['ie3_napp'];
  $ie3_yexp = $row['ie3_yexp'];
} else {
  $p_info = 3;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['back'])) {
    Header("location:r_per.php");
  }
  if (isset($_POST['submit'])) {
    $ssc_org = $_POST['ssc-org'];
    $ssc_my = $_POST['ssc-year'];
    $ssc_speci = $_POST['ssc-special'];
    $ssc_prcnt = $_POST['ssc-percnt'];
    $ssc_grade = $_POST['ssc-grade'];
    // $ssc_docl = $_POST[''];
    $hsc_org = $_POST['hsc-org'];
    $hsc_my = $_POST['hsc-year'];
    $hsc_speci = $_POST['hsc-special'];
    $hsc_prcnt = $_POST['hsc-percnt'];
    $hsc_grade = $_POST['hsc-grade'];
    //$hsc_doc = $_POST[''];
    $bd_org = $_POST['bdeg-org'];
    $bd_my = $_POST['bdeg-year'];
    $bd_speci = $_POST['bdeg-special'];
    $bd_prcnt = $_POST['bdeg-percnt'];
    $bd_grade = $_POST['bdeg-grade'];
    //$bd_docl = $_POST[''];
    $md_org = $_POST['mdeg-org'];
    $md_my = $_POST['mdeg-year'];
    $md_speci = $_POST['mdeg-special'];
    $md_prcnt = $_POST['mdeg-percnt'];
    $md_grade = $_POST['mdeg-grade'];
    //$md_docl = $_POST[''];
    $mph_org = $_POST['mphil-org'];
    $mph_my = $_POST['mphil-year'];
    $mph_speci = $_POST['mphil-special'];
    $mph_prcnt = $_POST['mphil-percnt'];
    $mph_grade = $_POST['mphil-grade'];
    //$mph_docl = $_POST[''];
    $phd_or = $_POST['phd-org'];
    $phd_my = $_POST['phd-year'];
    $phd_speci = $_POST['phd-special'];
    $phd_prcnt = $_POST['phd-percnt'];
    $phd_grade = $_POST['phd-grade'];
    //$phd_docl = $_POST[''];
    $exm_org = $_POST['exam-org'];
    $exm_my = $_POST['exam-year'];
    $exm_speci = $_POST['exam-special'];
    $exm_prcnt = $_POST['exam-percnt'];
    $exm_grade = $_POST['exam-grade'];


    $te1_in = $_POST['teac-insti1'];
    $te1_pst = $_POST['teac-pos1'];
    $te1_sub = $_POST['teac-sub1'];
    $te1_napp = $_POST['teac-nature1'];
    $te1_yexp = $_POST['teac-exp-y1'];
    $te2_in = $_POST['teac-insti2'];
    $te2_pst = $_POST['teac-pos2'];
    $te2_sub = $_POST['teac-sub2'];
    $te2_napp = $_POST['teac-nature2'];
    $te2_yexp = $_POST['teac-exp-y2'];
    $te3_in = $_POST['teac-insti3'];
    $te3_pst = $_POST['teac-pos3'];
    $te3_sub = $_POST['teac-sub3'];
    $te3_napp = $_POST['teac-nature3'];
    $te3_yexp = $_POST['teac-exp-y3'];


    $ie1_in = $_POST['ind-insti1'];
    $ie1_pst = $_POST['ind-pos1'];
    $ie1_sub = $_POST['ind-skill1'];
    $ie1_napp = $_POST['ind-nature1'];
    $ie1_yexp = $_POST['ind-exp-y1'];
    $ie2_in = $_POST['ind-insti2'];
    $ie2_pst = $_POST['ind-pos2'];
    $ie2_sub = $_POST['ind-skill2'];
    $ie2_napp = $_POST['ind-nature2'];
    $ie2_yexp = $_POST['ind-exp-y2'];
    $ie3_in = $_POST['ind-insti3'];
    $ie3_pst = $_POST['ind-pos3'];
    $ie3_sub = $_POST['ind-skill3'];
    $ie3_napp = $_POST['ind-nature3'];
    $ie3_yexp = $_POST['ind-ecp-y3'];




    // $exm_docl = $_POST[''];


    ///file upload procedure

    if ($fname[0] != null) {
      $target_dir = $udir . $email . "/";
    }

    if (!file_exists($target_dir)) {
      mkdir($udir . $email);
    }
    if (file_exists($target_dir)) {
      if ($_FILES["ssc-file"]["name"] != "") {
        $ssc_docl = $target_dir . basename($_FILES["ssc-file"]["name"]);
        move_uploaded_file($_FILES["ssc-file"]["tmp_name"], $ssc_docl);
        //echo $ssc_docl;
      }
      if ($_FILES["hsc-file"]["name"] != "") {
        $hsc_docl = $target_dir . basename($_FILES["hsc-file"]["name"]);
        move_uploaded_file($_FILES["hsc-file"]["tmp_name"], $hsc_docl);
        // echo $hsc_docl;
      }
      if ($_FILES["bdeg-file"]["name"] != "") {
        $bd_docl = $target_dir . basename($_FILES["bdeg-file"]["name"]);
        move_uploaded_file($_FILES["bdeg-file"]["tmp_name"], $bd_docl);
      }
      if ($_FILES["mdeg-file"]["name"] != "") {
        $md_docl = $target_dir . basename($_FILES["mdeg-file"]["name"]);
        move_uploaded_file($_FILES["mdeg-file"]["tmp_name"], $md_docl);
      }
      if ($_FILES["mphil-file"]["name"] != "") {
        $mph_docl = $target_dir . basename($_FILES["mphil-file"]["name"]);
        move_uploaded_file($_FILES["mphil-file"]["tmp_name"], $mph_docl);
      }
      if ($_FILES["phd-file"]["name"] != "") {
        $phd_docl = $target_dir . basename($_FILES["phd-file"]["name"]);
        move_uploaded_file($_FILES["phd-file"]["tmp_name"], $phd_docl);
      }
      if ($_FILES["exam-file"]["name"] != "") {
        $exm_docl = $target_dir . basename($_FILES["exam-file"]["name"]);
        move_uploaded_file($_FILES["exam-file"]["tmp_name"], $exm_docl);
      }
    }

    if (put_data(
      $email,
      $ssc_org,
      $ssc_my,
      $ssc_speci,
      $ssc_prcnt,
      $ssc_grade,
      $ssc_docl,
      $hsc_org,
      $hsc_my,
      $hsc_speci,
      $hsc_prcnt,
      $hsc_grade,
      $hsc_docl,
      $bd_org,
      $bd_my,
      $bd_speci,
      $bd_prcnt,
      $bd_grade,
      $bd_docl,
      $md_org,
      $md_my,
      $md_speci,
      $md_prcnt,
      $md_grade,
      $md_docl,
      $mph_org,
      $mph_my,
      $mph_speci,
      $mph_prcnt,
      $mph_grade,
      $mph_docl,
      $phd_org,
      $phd_my,
      $phd_speci,
      $phd_prcnt,
      $phd_grade,
      $phd_docl,
      $exm_org,
      $exm_my,
      $exm_speci,
      $exm_prcnt,
      $exm_grade,
      $exm_docl,
      $te1_in,
      $te1_pst,
      $te1_sub,
      $te1_napp,
      $te1_yexp,
      $te2_in,
      $te2_pst,
      $te2_sub,
      $te2_napp,
      $te2_yexp,
      $te3_in,
      $te3_pst,
      $te3_sub,
      $te3_napp,
      $te3_yexp,
      $ie1_in,
      $ie1_pst,
      $ie1_sub,
      $ie1_napp,
      $ie1_yexp,
      $ie2_in,
      $ie2_pst,
      $ie2_sub,
      $ie2_napp,
      $ie2_yexp,
      $ie3_in,
      $ie3_pst,
      $ie3_sub,
      $ie3_napp,
      $ie3_yexp,
      $p_info,
      $db
    ) == 1) {
      Header("location:r_work.php");
      exit;
    } else {
      //echo "error";
    }
  }
}




function checkFile($target_dir)
{
  $target_file = $target_dir . basename($_FILES["photo"]["name"]);
  $target_file2 = $target_dir . basename($_FILES["sign"]["name"]);
  // $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));

  // Check if file already exists
  if (file_exists($target_file)) {
    // echo "Sorry, file already exists.";
    //  $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["photo"]["size"] > 1000000 && $_FILES["sign"]["size"] < 20000) {
    // echo "Sorry, your file is too large.";
    return 0;
  }
}

function put_data(
  $email,
  $ssc_org,
  $ssc_my,
  $ssc_speci,
  $ssc_prcnt,
  $ssc_grade,
  $ssc_docl,
  $hsc_org,
  $hsc_my,
  $hsc_speci,
  $hsc_prcnt,
  $hsc_grade,
  $hsc_docl,
  $bd_org,
  $bd_my,
  $bd_speci,
  $bd_prcnt,
  $bd_grade,
  $bd_docl,
  $md_org,
  $md_my,
  $md_speci,
  $md_prcnt,
  $md_grade,
  $md_docl,
  $mph_org,
  $mph_my,
  $mph_speci,
  $mph_prcnt,
  $mph_grade,
  $mph_docl,
  $phd_org,
  $phd_my,
  $phd_speci,
  $phd_prcnt,
  $phd_grade,
  $phd_docl,
  $exm_org,
  $exm_my,
  $exm_speci,
  $exm_prcnt,
  $exm_grade,
  $exm_docl,
  $te1_in,
  $te1_pst,
  $te1_sub,
  $te1_napp,
  $te1_yexp,
  $te2_in,
  $te2_pst,
  $te2_sub,
  $te2_napp,
  $te2_yexp,
  $te3_in,
  $te3_pst,
  $te3_sub,
  $te3_napp,
  $te3_yexp,
  $ie1_in,
  $ie1_pst,
  $ie1_sub,
  $ie1_napp,
  $ie1_yexp,
  $ie2_in,
  $ie2_pst,
  $ie2_sub,
  $ie2_napp,
  $ie2_yexp,
  $ie3_in,
  $ie3_pst,
  $ie3_sub,
  $ie3_napp,
  $ie3_yexp,
  $p_info,
  $db
) {
  if ($db->query("UPDATE regis_candidate SET ssc_org='$ssc_org',
    ssc_my='$ssc_my',
    ssc_speci='$ssc_speci',
    ssc_prcnt='$ssc_prcnt',
    ssc_grade='$ssc_grade',
    ssc_docl='$ssc_docl',
    hsc_org='$hsc_org',
    hsc_my='$hsc_my',
    hsc_speci='$hsc_speci',
    hsc_prcnt='$hsc_prcnt',
    hsc_grade='$hsc_grade',
    hsc_docl='$hsc_docl',
    bd_org='$bd_org',
    bd_my='$bd_my',
    bd_speci='$bd_speci',
    bd_prcnt='$bd_prcnt',
    bd_grade='$bd_grade',
    bd_docl='$bd_docl',
    md_org='$md_org',
    md_my='$md_my',
    md_speci='$md_speci',
    md_prcnt='$md_prcnt',
    md_grade='$md_grade',
    md_docl='$md_docl',
    mph_org='$mph_org',
    mph_my='$mph_my',
    mph_speci='$mph_speci',
    mph_prcnt='$mph_prcnt',
    mph_grade='$mph_grade',
    mph_docl='$mph_docl',
    phd_org='$phd_org',
    phd_my='$phd_my',
    phd_speci='$phd_speci',
    phd_prcnt='$phd_prcnt',
    phd_grade='$phd_grade',
    phd_docl='$phd_docl',
    exm_org='$exm_org',
    exm_my='$exm_my',
    exm_speci='$exm_speci',
    exm_prcnt='$exm_prcnt',
    exm_grade='$exm_grade',
    exm_docl='$exm_docl',
    te1_in='$te1_in',
    te1_pst='$te1_pst',
  te1_sub='$te1_sub',
  te1_napp='$te1_napp',
  te1_yexp='$te1_yexp',
  te2_in='$te2_in',
  te2_pst='$te2_pst',
  te2_sub='$te2_sub',
  te2_napp='$te2_napp',
  te2_yexp='$te2_yexp',
  te3_in='$te3_in',
  te3_pst='$te3_pst',
  te3_sub='$te3_sub',
  te3_napp='$te3_napp',
  te3_yexp='$te3_yexp',
  ie1_in='$ie1_in',
  ie1_pst='$ie1_pst',
  ie1_sub='$ie1_sub',
  ie1_napp='$ie1_napp',
  ie1_yexp='$ie1_yexp',
  ie2_in='$ie2_in',
  ie2_pst='$ie2_pst',
  ie2_sub='$ie2_sub',
  ie2_napp='$ie2_napp',
  ie2_yexp='$ie2_yexp',
  ie3_in='$ie3_in',
  ie3_pst='$ie3_pst',
  ie3_sub='$ie3_sub',
  ie3_napp='$ie3_napp',
  ie3_yexp='$ie3_yexp',
    p_info=$p_info where email ='$email'"))
    return 1;
  else {
    //echo $db->error;
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
  $sql = "SELECT  fullname,ssc_org, ssc_my, ssc_speci, ssc_prcnt, ssc_grade,
   ssc_docl, hsc_org, hsc_my, hsc_speci, hsc_prcnt, hsc_grade, hsc_docl,
   bd_org, bd_my, bd_speci, bd_prcnt, bd_grade, bd_docl, md_org, md_my,
   md_speci, md_prcnt, md_grade, md_docl, mph_org, mph_my, mph_speci,
   mph_prcnt, mph_grade, mph_docl, phd_org, phd_my, phd_speci, phd_prcnt,
   phd_grade, phd_docl, exm_org, exm_my, exm_speci, exm_prcnt, exm_grade,
   exm_docl,
   te1_in,te1_pst,te1_sub,te1_napp,te1_yexp,te2_in,te2_pst,te2_sub,te2_napp,te2_yexp,te3_in,
  te3_pst,te3_sub,te3_napp,te3_yexp,
  ie1_in,ie1_pst,ie1_sub,ie1_napp,ie1_yexp,ie2_in,
    ie2_pst,ie2_sub,ie2_napp,ie2_yexp,ie3_in,ie3_pst,
    ie3_sub,ie3_napp,ie3_yexp 
   FROM regis_candidate where email ='$email'";
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
  <title> JOB APPLICATION</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="../css/style1.css?version=1" rel="stylesheet" />
</head>


<body>
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
   include_once('../include/nav.php');
   ?>


    <div class="sub-header">
      <span><strong>Hello :</strong><?php echo $_SESSION['email']; ?></span>
      <h4>QUALIFICATION</h4>
      <a href="logout.php">Logout</a>
    </div>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="register" class="main-form" enctype="multipart/form-data">

      <p style="color: red;margin-left:20px">*Please upload scanned Document in PDF form.
        Keep name the document same as the file type,
        <br>eg:- In "Bachler's Degree" row pdf file name should be bdeg.pdf.
        <br>
        *The PDF should be in between 20kb to 1mb.
      </p>

      <div class="qual" style="margin: 0px auto;text-align:center">
        <p style="margin-bottom:0px"><strong>EDUCATION QUALIFICATION</strong></p>
        <hr>
        <table class="edu-qual-table-form">
          <tbody>
            <tr align="centre">
              <th>
                <p><strong>Examination</strong></p>
              </th>
              <th>
                <p><strong>University/Board</strong></p>
              </th>
              <th>
                <p><strong>Month-Year</strong></p>
              </th>
              <th>
                <p><strong>Specialization</strong></p>
              </th>
              <th>
                <p><strong>%</strong></p>
              </th>
              <th>
                <p><strong>Class/Grade</strong></p>
              </th>
              <th width="100">
                <p><strong>Upload Document</strong></p>
              </th>
            </tr>
            <tr>
              <td>
                <p>10th</p>
              </td>
              <td> <input class="q-org" type="text" name="ssc-org" id="ssc-org" value="<?php echo $ssc_org; ?>" /></td>
              <td><input name="ssc-year" id="ssc-year" class="q-year" value="<?php echo $ssc_my; ?>" /></td>
              <td><input class="q-special" type="text" name="ssc-special" id="ssc-special" value="<?php echo $ssc_speci; ?>" /></td>
              <td><input class="q-percnt" type="text" name="ssc-percnt" id="ssc-percnt" value="<?php echo $ssc_prcnt; ?>" /></td>
              <td><input class="q-grade" type="text" name="ssc-grade" id="ssc-grade" value="<?php echo $ssc_grade; ?>" /></td>
              <td>

                <div class="custom-file">
                  <input name="ssc-file" type="file" accept="application/pdf" />
                  <input type="button" value="Choose File" />
                  <input class="file-test" type="text" placeholder="No file Selected" value="<?php echo $ssc_docln; ?>" />
                </div>

              </td>
            </tr>
            <tr>
              <td>
                <p>12th</p>
              </td>
              <td>
                <input type="text" class="q-org" name="hsc-org" id="hsc-org" value="<?php echo $hsc_org; ?>" />
              </td>
              <td>
                <input type="text" class="q-year" name="hsc-year" id="hsc-year" value="<?php echo $hsc_my; ?>" />
              </td>
              <td>
                <input type="text" class="q-special" name="hsc-special" id="hsc-special" value="<?php echo $hsc_speci; ?>" />
              </td>
              <td>
                <input type="text" class="q-percnt" name="hsc-percnt" id="hsc-percnt" value="<?php echo $hsc_prcnt; ?>" />
              </td>
              <td>
                <input type="text" class="q-grade" name="hsc-grade" id="hsc-grade" value="<?php echo $hsc_grade; ?>" />
              </td>
              <td>

                <div class="custom-file">
                  <input name="hsc-file" type="file" accept="application/pdf" />
                  <input type="button" value="Choose File" />
                  <input class="file-test" type="text" placeholder="No file Selected" value="<?php echo $hsc_docln; ?>" />
                </div>
       

              </td>
            </tr>
            <tr>
              <td>
                <p>Bachelor&rsquo;s Degree</p>
              </td>
              <td>
                <input type="text" class="q-org" name="bdeg-org" id="bdeg-org" value="<?php echo $bd_org; ?>" />
              </td>
              <td>
                <input type="text" class="q-year" name="bdeg-year" id="bdeg-year" value="<?php echo $bd_my; ?>" />
              </td>
              <td>
                <input type="text" class="q-special" name="bdeg-special" id="bdeg-special" value="<?php echo $bd_speci ?>" />
              </td>
              <td>
                <input type="text" class="q-percnt" name="bdeg-percnt" id="bdeg-percnt" value="<?php echo $bd_prcnt; ?>" />
              </td>
              <td>
                <input type="text" class="q-grade" name="bdeg-grade" id="bdeg-grade" value="<?php echo $bd_grade; ?>" />
              </td>
              <td>

                <div class="custom-file">
                  <input name="bdeg-file" type="file" accept="application/pdf" />
                  <input type="button" value="Choose File" />
                  <input class="file-test" type="text" placeholder="No file Selected" value="<?php echo $bd_docln; ?>" />
                </div>


              </td>
            </tr>
            <tr>
              <td>
                <p>Master&rsquo;s Degree</p>
              </td>
              <td>
                <input type="text" class="q-org" name="mdeg-org" id="mdeg-org" value="<?php echo $md_org; ?>" />
              </td>
              <td>
                <input type="text" class="q-year" name="mdeg-year" id="mdeg-year" value="<?php echo $md_my; ?>" />
              </td>
              <td>
                <input type="text" class="q-special" name="mdeg-special" id="mdeg-special" value="<?php echo $md_speci; ?>" />
              </td>
              <td>
                <input type="text" class="q-percnt" name="mdeg-percnt" id="mdeg-percnt" value="<?php echo $md_prcnt; ?>" />
              </td>
              <td>
                <input type="text" class="q-grade" name="mdeg-grade" id="mdeg-grade" value="<?php echo $md_grade; ?>" />
              </td>
              <td>

                <div class="custom-file">
                  <input name="mdeg-file" type="file" accept="application/pdf" />
                  <input type="button" value="Choose File" />
                  <input class="file-test" type="text" placeholder="No file Selected" value="<?php echo $md_docln; ?>" />
                </div>


              </td>
            </tr>
            <tr>
              <td>
                <p>M.Phil.</p>
              </td>
              <td>
                <input type="text" class="q-org" name="mphil-org" id="mphil-org" value="<?php echo $mph_org; ?>" />
              </td>
              <td>
                <input type="text" class="q-year" name="mphil-year" id="mphil-year" value="<?php echo $mph_my; ?>" />
              </td>
              <td>
                <input type="text" class="q-special" name="mphil-special" id="mphil-special" value="<?php echo $mph_speci; ?>" />
              </td>
              <td>
                <input type="text" class="q-percnt" name="mphil-percnt" id="mphil-percnt" value="<?php echo $mph_prcnt; ?>" />
              </td>
              <td>
                <input type="text" class="q-grade" name="mphil-grade" id="mphil-grade" value="<?php echo $mph_grade; ?>" />
              </td>
              <td>
                <div class="custom-file">
                  <input name="mphil-file" type="file" accept="application/pdf" />
                  <input type="button" value="Choose File" />
                  <input class="file-test" type="text" placeholder="No file Selected" value="<?php echo $mph_docln; ?>" />
                </div>


              </td>
            </tr>
            <tr>
              <td>
                <p>Ph.D.</p>
              </td>
              <td>
                <input type="text" class="q-org" name="phd-org" id="phd-org" value="<?php echo $phd_org; ?>" />
              </td>
              <td>
                <input type="text" class="q-year" name="phd-year" id="phd-year" value="<?php echo $phd_my; ?>" />
              </td>
              <td>
                <input type="text" class="q-special" name="phd-special" id="phd-special" value="<?php echo $phd_speci; ?>" />
              </td>
              <td>
                <input type="text" class="q-percnt" name="phd-percnt" id="phd-percnt" value="<?php echo $phd_prcnt; ?>" />
              </td>
              <td>
                <input type="text" class="q-grade" name="phd-grade" id="phd-grade" value="<?php echo $phd_grade; ?>" />
              </td>
              <td>

                <div class="custom-file">
                  <input name="phd-file" type="file" accept="application/pdf" />
                  <input type="button" value="Choose File" />
                  <input class="file-test" type="text" placeholder="No file Selected" value="<?php echo $phd_docln; ?>" />
                </div>


              </td>
            </tr>
            <tr>
              <td>
                <p>NET/SLET/SET/JRF</p>
              </td>
              <td>
                <input type="text" class="q-org" name="exam-org" id="exam-org" value="<?php echo $exm_org; ?>" />
              </td>
              <td>
                <input type="text" class="q-year" name="exam-year" id="exam-year" value="<?php echo $exm_my; ?>" />
              </td>
              <td>
                <input type="text" class="q-special" name="exam-special" id="exam-special" value="<?php echo $exm_speci; ?>" />
              </td>
              <td>
                <input type="text" class="q-percnt" name="exam-percnt" id="exam-percnt" value="<?php echo $exm_prcnt; ?>" />
              </td>
              <td>
                <input type="text" class="q-grade" name="exam-grade" id="exam-grade" value="<?php echo $exm_grade; ?>" />
              </td>
              <td>
                <div class="custom-file">
                  <input name="exam-file" type="file" accept="application/pdf" />
                  <input type="button" value="Choose File" />
                  <input class="file-test" type="text" placeholder="No file Selected" value="<?php echo $exm_docln; ?>" />
                </div>

              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <br>
        <p style="margin-bottom:0px"><strong>TEACHING EXPERIENCE</strong></p>
        <hr>
        <table class="teach-exp-table-form" style="margin: 0px auto;">
          <tbody>
            <tr>
              <th width="120">
                <p><strong>Institute</strong></p>
              </th>
              <th>
                <p><strong>Position Held</strong></p>
              </th>
              <th>
                <p><strong>Subject</strong></p>
              </th>
              <th>
                <p><strong>Nature of Appointment</strong></p>
              </th>
              <th>
                <p><strong>Years of Experience</strong></p>
              </th>
            </tr>
            <tr>
              <td>
                <input type="text" id="teac-insti1" value="<?php echo $te1_in; ?>" name="teac-insti1" />
              </td>
              <td>
                <input type="text" id="teac-pos1" value="<?php echo $te1_pst; ?>" name="teac-pos1" />
              </td>
              <td>
                <input type="text" id="teac-sub1" value="<?php echo $te1_sub; ?>" name="teac-sub1" />
              </td>
              <td>
                <input type="text" id="teac-nature1" value="<?php echo $te1_napp; ?>" name="teac-nature1" />
              </td>
              <td>
                <input type="text" id="teac-exp-y1" value="<?php echo $te1_yexp; ?>" name="teac-exp-y1" />
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" id="teac-insti2" value="<?php echo $te2_in; ?>" name="teac-insti2" />
              </td>
              <td>
                <input type="text" id="teac-pos2" value="<?php echo $te2_pst; ?>" name="teac-pos2" />
              </td>
              <td>
                <input type="text" id="teac-sub2" value="<?php echo $te2_sub; ?>" name="teac-sub2" />
              </td>
              <td>
                <input type="text" id="teac-nature2" value="<?php echo $te2_napp; ?>" name="teac-nature2" />
              </td>
              <td>
                <input type="text" id="teac-exp-y2" value="<?php echo $te2_yexp; ?>" name="teac-exp-y2" />
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" id="teac-insti3" value="<?php echo $te3_in; ?>" name="teac-insti3" />
              </td>
              <td>
                <input type="text" id="teac-pos3" value="<?php echo $te3_pst; ?>" name="teac-pos3" />
              </td>
              <td>
                <input type="text" id="teac-sub3" value="<?php echo $te3_sub; ?>" name="teac-sub3" />
              </td>
              <td>
                <input type="text" id="teac-nature3" value="<?php echo $te3_napp; ?>" name="teac-nature3" />
              </td>
              <td>
                <input type="text" id="teac-exp-y3" value="<?php echo $te3_yexp; ?>" name="teac-exp-y3" />
              </td>
            </tr>

          </tbody>
        </table>

        <br><br>
        <p style="margin-bottom:0px"><strong>INDUSTRY EXPERIENCE</strong></p>
        <hr>
        <table class="ind-exp-table-form" style="margin: 0px auto;">
          <tbody>
            <tr>
              <th>
                <p><strong>Institute</strong></p>
              </th>
              <th>
                <p><strong>Position Held</strong></p>
              </th>
              <th>
                <p><strong>Skills</strong></p>
              </th>
              <th>
                <p><strong>Nature of Appointment</strong></p>
              </th>
              <th>
                <p><strong>Years of Experience</strong></p>
              </th>
            </tr>
            <tr>
              <td>
                <input type="text" id="ind-insti1" value="<?php echo $ie1_in; ?>" name="ind-insti1" />
              </td>
              <td>
                <input type="text" id="ind-pos1" value="<?php echo $ie1_pst; ?>" name="ind-pos1" />
              </td>
              <td>
                <input type="text" id="ind-skill1" value="<?php echo $ie1_sub; ?>" name="ind-skill1" />
              </td>
              <td>
                <input type="text" id="ind-nature1" value="<?php echo $ie1_napp; ?>" name="ind-nature1" />
              </td>
              <td>
                <input type="text" id="ind-exp-y1" value="<?php echo $ie1_yexp; ?>" name="ind-exp-y1" />
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" id="ind-insti2" value="<?php echo $ie2_in; ?>" name="ind-insti2" />
              </td>
              <td>
                <input type="text" id="ind-pos2" value="<?php echo $ie2_pst; ?>" name="ind-pos2" />
              </td>
              <td>
                <input type="text" id="ind-skill2" value="<?php echo $ie2_sub; ?>" name="ind-skill2" />
              </td>
              <td>
                <input type="text" id="ind-nature2" value="<?php echo $ie2_napp; ?>" name="ind-nature2" />
              </td>
              <td>
                <input type="text" id="ind-exp-y2" value="<?php echo $ie2_yexp; ?>" name="ind-exp-y2" />
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" id="ind-insti3" value="<?php echo $ie3_in; ?>" name="ind-insti3" />
              </td>
              <td>
                <input type="text" id="ind-pos3" value="<?php echo $ie3_pst; ?>" name="ind-pos3" />
              </td>
              <td>
                <input type="text" id="ind-skill3" value="<?php echo $ie3_sub; ?>" name="ind-skill3" />
              </td>
              <td>
                <input type="text" id="ind-nature3" value="<?php echo $ie3_napp; ?>" name="ind-nature3" />
              </td>
              <td>
                <input type="text" id="ind-exp-y3" value="<?php echo $ie3_yexp; ?>" name="ind-exp-y3" />
              </td>
            </tr>
          </tbody>
        </table>
      </div>



      <div class="group-nav">
        <button class="button-basic" id="go-first" type="submit" name="back">
          <strong>GO BACK</strong>
        </button>
        <button class="button-basic" id="submit" type="submit" value="Submit" name="submit">
          <strong>PROCEED</strong>
        </button>
      </div>
    </form>
    <?php
include_once('../include/foot.php');
  ?>

  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.custom-file input[type="file"]').change(function(e) {
        $(this).siblings(".file-test").val(e.target.files[0].name);
      });

    });
  </script>



  <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css" />
  <script type="text/javascript">
    $(function() {
      $(".q-year").datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: "mm/yy",
        onClose: function(dateText, inst) {
          $(this).datepicker(
            "setDate",
            new Date(inst.selectedYear, inst.selectedMonth, 1)
          );
        },
      });
    });
  </script>
</body>

</html>
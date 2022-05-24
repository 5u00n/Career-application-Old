<?php include '../include/config.php'; ?>

<?php
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$db->select_db("$dbname");
?>

<?php

$email = "";
session_start();

if (isset($_SESSION['email']) && $_SESSION['comp'] == "no") {
  $email = $_SESSION['email'];
} else {
  Header("location:../");
}

if (isset($_POST['back'])) {
  Header("location:r_dec.php");
}
if (isset($_POST['submit'])) {
  //include '../lib/genpdf.php';
  $_SESSION['comp'] = "yes";
  if (set_confirm($email, $db))
    echo "<script type='text/javascript'>
    if (confirm('Confirm to Complete your Application.')) {
      // Save it!
      window.location='process.php';
    } else {
      // Do nothing!
      window.location='r_final.php';
    }</script>";

  // Header("location:print_test.php");
}

if (isset($_POST['correct'])) {
  //include '../lib/genpdf.php';
  Header("location:r_per.php");
}



function set_confirm($email, $db)
{
  if ($db->query("UPDATE regis_candidate SET complete='true' where email ='$email'"))
    return 1;
  else {
    echo $db->error;
    return 0;
  }
}
?>






<?php

$file_paths =

  $p_info =
  $ref_avt =
  $for_post =
  $fullname =
  $dob =
  $age =
  $sex =
  $fname =
  $mname =
  $mstat =
  $sname =
  $pa_add =
  $pa_city =
  $pa_count =
  $pa_state =
  $pa_pin =
  $ca_add =
  $ca_city =
  $ca_count =
  $ca_state =
  $ca_pin =
  $aadr =
  $mob =
  $cat =
  $cat_s =
  $ssc_org =
  $ssc_my =
  $ssc_speci =
  $ssc_prcnt =
  $ssc_grade =
  $ssc_docl =
  $hsc_org =
  $hsc_my =
  $hsc_speci =
  $hsc_prcnt =
  $hsc_grade =
  $hsc_docl =
  $bd_org =
  $bd_my =
  $bd_speci =
  $bd_prcnt =
  $bd_grade =
  $bd_docl =
  $md_org =
  $md_my =
  $md_speci =
  $md_prcnt =
  $md_grade =
  $md_docl =
  $mph_org =
  $mph_my =
  $mph_speci =
  $mph_prcnt =
  $mph_grade =
  $mph_docl =
  $phd_org =
  $phd_my =
  $phd_speci =
  $phd_prcnt =
  $phd_grade =
  $phd_docl =
  $exm_org =
  $exm_my =
  $exm_speci =
  $exm_prcnt =
  $exm_grade =
  $exm_docl =
  $te1_in =
  $te1_pst =
  $te1_sub =
  $te1_napp =
  $te1_yexp =
  $te2_in =
  $te2_pst =
  $te2_sub =
  $te2_napp =
  $te2_yexp =
  $te3_in =
  $te3_pst =
  $te3_sub =
  $te3_napp =
  $te3_yexp =
  $ie1_in =
  $ie1_pst =
  $ie1_sub =
  $ie1_napp =
  $ie1_yexp =
  $ie2_in =
  $ie2_pst =
  $ie2_sub =
  $ie2_napp =
  $ie2_yexp =
  $ie3_in =
  $ie3_pst =
  $ie3_sub =
  $ie3_napp =
  $ie3_yexp =
  $rw_sup =
  $rpap_pre =
  $meet_attnd =
  $awards =
  $rf1_name =
  $rf1_title =
  $rf1_inst =
  $rf1_phn =
  $rf2_name =
  $rf2_title =
  $rf2_inst =
  $rf2_phn =
  $rf3_name =
  $rf3_title =
  $rf3_inst =
  $rf3_phn =
  $img_loc =
  $sig_loc =
  $s_date =
  $firname =
  $s_place = "";
$page = 7;

$row = getProgress($email, $db);
$p_info = $row['p_info'];
$ref_avt = $row['ref_avt'];
$for_post = $row['for_post'];
$fullname = $row['fullname'];
$name_mid = explode(" ", $fullname);
$firname = $name_mid[0];
$dob = $row['dob'];
$age = $row['age'];
$sex = $row['sex'];
$fname = $row['fname'];
$mname = $row['mname'];
$mstat = $row['mstat'];
$sname = $row['sname'];
$pa_add = $row['pa_add'];
$pa_city = $row['pa_city'];
$pa_count = $row['pa_count'];
$pa_state = $row['pa_state'];
$pa_pin = $row['pa_pin'];
$ca_add = $row['ca_add'];
$ca_city = $row['ca_city'];
$ca_count = $row['ca_count'];
$ca_state = $row['ca_state'];
$ca_pin = $row['ca_pin'];
$aadr = $row['aadr'];
$mob = $row['mob'];
$cat = $row['cat'];
$cat_s = $row['cat_s'];
$fullname = $row['fullname'];
$ssc_org = $row['ssc_org'];
$ssc_my = $row['ssc_my'];
$ssc_speci = $row['ssc_speci'];
$ssc_prcnt = $row['ssc_prcnt'];
$ssc_grade = $row['ssc_grade'];
$ssc_docl = $row['ssc_docl'];
$ssc_mid = explode("/", $ssc_docl);
if (sizeof($ssc_mid) == 4)
  $ssc_docln = $ssc_mid[3];
else
  $ssc_docln = "";
$hsc_org = $row['hsc_org'];
$hsc_my = $row['hsc_my'];
$hsc_speci = $row['hsc_speci'];
$hsc_prcnt = $row['hsc_prcnt'];
$hsc_grade = $row['hsc_grade'];
$hsc_docl = $row['hsc_docl'];
$hsc_mid = explode("/", $hsc_docl);
if (sizeof($hsc_mid) == 4)
  $hsc_docln = $hsc_mid[3];
else
  $hsc_docln = "";
$bd_org = $row['bd_org'];
$bd_my = $row['bd_my'];
$bd_peci = $row['bd_speci'];
$bd_prcnt = $row['bd_prcnt'];
$bd_grade = $row['bd_grade'];
$bd_docl = $row['bd_docl'];
$bd_mid = explode("/", $bd_docl);
if (sizeof($bd_mid) == 4)
  $bd_docln = $bd_mid[3];
else {
  $bd_docln = "";
}
$md_org = $row['md_org'];
$md_my = $row['md_my'];
$md_speci = $row['md_speci'];
$md_prcnt = $row['md_prcnt'];
$md_grade = $row['md_grade'];
$md_docl = $row['md_docl'];
$md_mid = explode("/", $md_docl);
if (sizeof($md_mid) == 4)
  $md_docln = $md_mid[3];
else
  $md_docln = "";
$mph_org = $row['mph_org'];
$mph_my = $row['mph_my'];
$mph_speci = $row['mph_speci'];
$mph_prcnt = $row['mph_prcnt'];
$mph_grade = $row['mph_grade'];
$mph_docl = $row['mph_docl'];
$mph_mid = explode("/", $mph_docl);
if (sizeof($mph_mid) == 4)
  $mph_docln = $mph_mid[3];
else $mph_docln = "";
$phd_org = $row['phd_org'];
$phd_my = $row['phd_my'];
$phd_speci = $row['phd_speci'];
$phd_prcnt = $row['phd_prcnt'];
$phd_grade = $row['phd_grade'];
$phd_docl = $row['phd_docl'];
$phd_mid = explode("/", $phd_docl);
if (sizeof($phd_mid) == 4)
  $phd_docln = $phd_mid[3];
else
  $phd_docln = "";
$exm_org = $row['exm_org'];
$exm_my = $row['exm_my'];
$exm_speci = $row['exm_speci'];
$exm_prcnt = $row['exm_prcnt'];
$exm_grade = $row['exm_grade'];
$exm_docl = $row['exm_docl'];
$exm_mid = explode("/", $exm_docl);
if (sizeof($exm_mid) == 4)
  $exm_docln = $exm_mid[3];
else
  $exm_docln = "";
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
$rw_sup = $row['rw_sup'];
$rpap_pre = $row['rpap_pre'];
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
$img_loc = $row['img_loc'];
$img_mid = explode("/", $img_loc);
if (sizeof($img_mid) == 4)
  $img_name = $img_mid[3];
$sig_loc = $row['sig_loc'];
$sig_mid = explode("/", $sig_loc);
if (sizeof($sig_mid) == 4)
  $sig_name = $sig_mid[3];
$s_date = $row['s_date'];
$s_place = $row['s_place'];





function getProgress($email, $db)
{
  $sql = "SELECT
  p_info,
  ref_avt,
  for_post,
  fullname,
  dob ,
  age ,
  sex,
  fname,
  mname,
  mstat,
  sname,
  pa_add,
  pa_city,
  pa_count,
  pa_state,
  pa_pin,
  ca_add,
  ca_city,
  ca_count,
  ca_state,
  ca_pin,
  aadr,
  mob,
  cat,
  cat_s,
  ssc_org,
  ssc_my,
  ssc_speci,
  ssc_prcnt,
  ssc_grade,
  ssc_docl,
  hsc_org,
  hsc_my,
  hsc_speci,
  hsc_prcnt,
  hsc_grade,
  hsc_docl,
  bd_org,
  bd_my,
  bd_speci,
  bd_prcnt,
  bd_grade,
  bd_docl,
  md_org,
  md_my,
  md_speci,
  md_prcnt,
  md_grade,
  md_docl,
  mph_org,
  mph_my,
  mph_speci,
  mph_prcnt,
  mph_grade,
  mph_docl,
  phd_org,
  phd_my,
  phd_speci,
  phd_prcnt,
  phd_grade,
  phd_docl,
  exm_org,
  exm_my,
  exm_speci,
  exm_prcnt,
  exm_grade,
  exm_docl,
  te1_in,
  te1_pst,
  te1_sub,
  te1_napp,
  te1_yexp,
  te2_in,
  te2_pst,
  te2_sub,
  te2_napp,
  te2_yexp,
  te3_in,
  te3_pst,
  te3_sub,
  te3_napp,
  te3_yexp,
  ie1_in,
  ie1_pst,
  ie1_sub,
  ie1_napp,
  ie1_yexp,
  ie2_in,
  ie2_pst,
  ie2_sub,
  ie2_napp,
  ie2_yexp,
  ie3_in,
  ie3_pst,
  ie3_sub,
  ie3_napp,
  ie3_yexp,
  rw_sup,
  rpap_pre,
  meet_attnd,
  awards,
  rf1_name,
  rf1_title,
  rf1_inst,
  rf1_phn,
  rf2_name,
  rf2_title,
  rf2_inst,
  rf2_phn,
  rf3_name,
  rf3_title,
  rf3_inst,
  rf3_phn,
  img_loc,
  sig_loc,
  s_date,
  s_place
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
      <h4>FINAL CHECK</h4>
      <a href="logout.php">Logout</a>
    </div>

    <form method="POST" class="main-form_f" style="padding-left: 10px;">

      <p style="color: red;margin-left:20px">
        [PLEASE NOTE] <br>* Check all informations .
        <br>* No change will be accepted once 'FINALISE' is clicked.
      </p>
      <hr />
      <label for="info"><strong>PERSONAL INFORMATION</strong></label>
      <br />
      <br />
      <table class="pers-table">
        <tr>
          <td><label id="namel" for="name">Name</label></td>
          <td><label id="name" name="name"><?php echo " : ".$fullname ?></label></td>
        </tr>
        <tr>
          <td><label id="dobl" for="dob">Date of birth</label></td>
          <td>
            <lable id="dob" name="dob"><?php echo " : ".$dob ?></lable>
          </td>
        </tr>
        <tr>
          <td><label id="agel" for="age">Age</label></td>
          <td><label id="age" name="age"><?php echo " : ".$age ?></label></td>
        </tr>
        <tr>
          <td><label id="sexl" for="sex">Sex</label></td>
          <td><label name="sex" id="sex"><?php echo " : ".$sex ?></label></td>
        </tr>

        <tr>
          <td><label id="fnamel" for="fname">Father's Name</label></td>
          <td><label id="fname" name="fname"><?php echo " : ".$fname ?></label></td>
        </tr>
        <tr>
          <td><label id="mnamel" for="mname">Mother's Name</label></td>
          <td><label id="mname" name="mame"><?php echo " : ".$mname ?></label></td>
        </tr>
        <tr>
          <td><label id="mstatl" for="statl">Marital Status</label></td>
          <td><label name="mstat" id="mstat"></label><?php echo " : ".$mstat ?></td>
        </tr>
        <tr>
          <td>
            <label id="snamel" for="sname">Spouse Name (If Married)</label>
          </td>
          <td><label id="sname" name="sname"><?php if ($sname != "") echo ": ".$sname;
                                              else echo " : "."-"; ?></label></td>
        </tr>
        <tr>
          <td><label id="catl" for="cat">Category</label></td>
          <td><label name="cat-selc" id="cat-selc"><?php echo " : ".$cat_s . " " . $cat ?></label></td>
        </tr>
        <tr>
          <td><label id="catl" for="cat">Ref. of Advertisement</label></td>
          <td><label><?php echo " : ".$ref_avt ?></label></td>
        </tr>
        <tr>
          <td><label id="catl" for="cat">Application for the post of</label></td>
          <td><label><?php echo " : ".$for_post ?></label></td>
        </tr>
      </table>

      <hr />

      <label for="per-add"><strong>PERMANENT ADDRESS</strong></label>
      <br />
      <br />
      <table class="p-addr-table">
        <tbody>
          <tr>
            <td colspan="4">
              <p width="768px" id="p-addr" name="p-addr" style="word-wrap: break-word;"><?php echo $pa_add ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <label for="p-city_town">City/Town:</label>
              <label id="p-city_town" name="p-city_town"><?php echo $pa_city ?></label>
            </td>
            <td>
              <label for="p-state">State:</label>
              <label id="p-state" name="p-state"><?php echo $pa_state ?></label>
            </td>
            <td>
              <label for="p-coun">Country:</label>
              <label id="p-coun" name="p-coun"><?php echo $pa_count ?></label>
            </td>
            <td>
              <label for="p-pin">Pin:</label>
              <label id="p-pin" name="p-pin"><?php echo $pa_pin ?></label>
            </td>
          </tr>
        </tbody>
      </table>
      <br />
      <br />

      <label for="cor-add"><strong>CORRESPONDENCE ADDRESS</strong></label>
      <br />
      <br />
      <table class="c-addr-table">
        <tbody>
          <tr>
            <td colspan="4">
              <p width="768px" id="c-addr" name="c-addr" style="word-wrap: break-word;"><?php echo $ca_add ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <label for="c-city_town">City/Town:</label>
              <label id="c-city_town" name="c-city_town"><?php echo $ca_city ?></label>
            </td>
            <td>
              <label for="c-state">State:</label>
              <label id="c-state" name="c-state"><?php echo $ca_state ?></label>
            </td>
            <td>
              <label for="p-coun">Country:</label>
              <label id="c-coun" name="c-coun"><?php echo $ca_count ?></label>
            </td>
            <td>
              <label for="c-pin">Pin:</label>
              <label id="c-pin" name="c-pin"><?php echo $ca_pin ?></label>
            </td>
          </tr>
        </tbody>
      </table>
      <br />
      <br />
      <hr />
      <label for=""><strong>CONTACT</strong></label>
      <br />
      <br />
      <table class="contact-div-table">
        <tr>
          <td><label id="adhaarl" for="adhaar">Aadhaar card no</label></td>
          <td>
            <lable id="adhaar" name="adhaar"><?php echo " : ".$aadr ?></lable>
          </td>
        </tr>
        <tr>
          <td><label id="emaill" for="email">E-mail</label></td>
          <td><label id="email" name="email"><?php echo " : ".$email ?></label></td>
        </tr>
        <tr>
          <td><label id="mobl" for="mob">Mobile</label></td>
          <td><label id="mob" name="mob"><?php echo " : ".$mob ?></label></td>
        </tr>
      </table>
      <br />
      <br />
      <hr />
      <label for="edu-qual"><strong>EDUCATIONAL QUALIFICATIONS</strong></label>
      <br />
      <table class="edu-qual-table">
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
              <p><strong>Percentage</strong></p>
            </th>
            <th>
              <p><strong>Class/Grade</strong></p>
            </th>
            <th width="">
              <p><strong>Upload Document</strong></p>
            </th>
          </tr>
          <tr>
            <td>
              <p>10th</p>
            </td>
            <td><label class="q-org" name="ssc-org" id="ssc-org"><?php echo $ssc_org; ?> </label></td>
            <td><label name="ssc-year" id="ssc-year" class="q-year"><?php echo $ssc_my; ?> </label></td>
            <td>
              <label class="q-special" name="ssc-special" id="ssc-special"><?php echo $ssc_speci; ?></label>
            </td>
            <td>
              <label class="q-percnt" name="ssc-percnt" id="ssc-percnt"><?php echo $ssc_prcnt; ?> </label>
            </td>
            <td><label class="q-grade" name="ssc-grade" id="ssc-grade"><?php echo $ssc_grade; ?> </label></td>
            <td>
              <label class="q-file" id="ssc-file" name="ssc-file"><?php echo $ssc_docln; ?> </label>
            </td>
          </tr>
          <tr>
            <td>
              <p>12th</p>
            </td>
            <td>
              <label class="q-org" name="hsc-org" id="hsc-org"><?php echo $hsc_org; ?></label>
            </td>
            <td>
              <label class="q-year" name="hsc-year" id="hsc-year"><?php echo $hsc_my; ?></label>
            </td>
            <td>
              <label class="q-special" name="hsc-special" id="hsc-special"><?php echo $hsc_speci; ?></label>
            </td>
            <td>
              <label class="q-percnt" name="hsc-percnt" id="hsc-percnt"><?php echo $hsc_prcnt; ?></label>
            </td>
            <td>
              <label class="q-grade" name="hsc-grade" id="hsc-grade"><?php echo $ssc_grade; ?></label>
            </td>
            <td>
              <label class="q-file" id="hsc-file" name="hsc-file"><?php echo $hsc_docln; ?></label>
            </td>
          </tr>
          <tr>
            <td>
              <p>Bachelor&rsquo;s Degree</p>
            </td>
            <td>
              <label class="q-org" name="bdeg-org" id="bdeg-org"><?php echo $bd_org; ?></label>
            </td>
            <td>
              <label class="q-year" name="bdeg-year" id="bdeg-year"><?php echo $bd_my; ?></label>
            </td>
            <td>
              <label class="q-special" name="bdeg-special" id="bdeg-special"><?php echo $bd_speci; ?></label>
            </td>
            <td>
              <label class="q-percnt" name="bdeg-percnt" id="bdeg-percnt"><?php echo $bd_prcnt; ?></label>
            </td>
            <td>
              <label class="q-grade" name="bdeg-grade" id="bdeg-grade"><?php echo $bd_grade; ?></label>
            </td>
            <td>
              <label class="q-file" id="bgeg-file" name="bdeg-file"><?php echo $bd_docln; ?></label>
            </td>
          </tr>
          <tr>
            <td>
              <p>Master&rsquo;s Degree</p>
            </td>
            <td>
              <label class="q-org" name="mdeg-org" id="mdeg-org"><?php echo $md_org; ?></label>
            </td>
            <td>
              <label class="q-year" name="mdeg-year" id="mdeg-year"><?php echo $md_my; ?></label>
            </td>
            <td>
              <label class="q-special" name="mdeg-special" id="mdeg-special"><?php echo $md_speci; ?></label>
            </td>
            <td>
              <label class="q-percnt" name="mdeg-percnt" id="mdeg-percnt"><?php echo $md_prcnt; ?></label>
            </td>
            <td>
              <label class="q-grade" name="mdeg-grade" id="mdeg-grade"><?php echo $md_grade; ?></label>
            </td>
            <td>
              <label class="q-file" id="mdeg-file" name="mdeg-file"><?php echo $md_docln; ?></label>
            </td>
          </tr>
          <tr>
            <td>
              <p>M.Phil.</p>
            </td>
            <td>
              <label class="q-org" name="mphil-org" id="mphil-org"><?php echo $mph_org; ?></label>
            </td>
            <td>
              <label class="q-year" name="mphil-year" id="mphil-year"><?php echo $mph_my; ?></label>
            </td>
            <td>
              <label class="q-special" name="mphil-special" id="mphil-special"><?php echo $mph_speci; ?></label>
            </td>
            <td>
              <label class="q-percnt" name="mphil-percnt" id="mphil-percnt"><?php echo $mph_prcnt; ?></label>
            </td>
            <td>
              <label class="q-grade" name="mphil-grade" id="mphil-grade"><?php echo $mph_grade; ?></label>
            </td>
            <td>
              <label class="q-file" id="mphil-file" name="mphil-file"><?php echo $mph_docln; ?></label>
            </td>
          </tr>
          <tr>
            <td>
              <p>Ph.D.</p>
            </td>
            <td>
              <label class="q-org" name="phd-org" id="phd-org"><?php echo $phd_org; ?></label>
            </td>
            <td>
              <label class="q-year" name="phd-year" id="phd-year"><?php echo $phd_my; ?></label>
            </td>
            <td>
              <label class="q-special" name="phd-special" id="phd-special"><?php echo $phd_speci; ?></label>
            </td>
            <td>
              <label class="q-percnt" name="phd-percnt" id="phd-percnt"><?php echo $phd_prcnt; ?></label>
            </td>
            <td>
              <label class="q-grade" name="phd-grade" id="phd-grade"><?php echo $phd_grade; ?></label>
            </td>
            <td>
              <label class="q-file" id="phd-file" name="phd-file"><?php echo $phd_docln; ?></label>
            </td>
          </tr>
          <tr>
            <td>
              <p>NET/SLET/SET/JRF</p>
            </td>
            <td>
              <label class="q-org" name="exam-org" id="exam-org"><?php echo $exm_org; ?></label>
            </td>
            <td>
              <label class="q-year" name="exam-year" id="exam-year"><?php echo $exm_my; ?></label>
            </td>
            <td>
              <label class="q-special" name="exam-special" id="exam-special"><?php echo $exm_speci; ?></label>
            </td>
            <td>
              <label class="q-percnt" name="exam-percnt" id="exam-percnt"><?php echo $exm_prcnt; ?></label>
            </td>
            <td>
              <label class="q-grade" name="exam-grade" id="exam-grade"><?php echo $exm_grade; ?></label>
            </td>
            <td>
              <label class="q-file" id="exam-file" name="exam-file"><?php echo $exm_docln; ?></label>
            </td>
          </tr>
        </tbody>
      </table>

      <br />
      <br />
      <hr />

      <label for="teach-exp"><strong>TEACHING EXPERIENCE</strong></label>
      <table class="teach-exp-table">
        <tbody>
          <tr>
            <td>
              <p><strong>Institute</strong></p>
            </td>
            <td>
              <p><strong>Position held</strong></p>
            </td>
            <td>
              <p><strong>Subject</strong></p>
            </td>
            <td>
              <p><strong>Nature of appointment</strong></p>
            </td>
            <td>
              <p><strong>Years of experience</strong></p>
            </td>
          </tr>
          <tr>
            <td>
              <label id="teac-insti1" name="teac-insti1"><?php if ($te1_in != "") {
                                                            echo $te1_in;
                                                          } else echo "-"; ?></label>
            </td>
            <td>
              <label id="teac-pos1" name="teac-pos1"><?php echo $te1_pst; ?></label>
            </td>
            <td>
              <label id="teac-sub1" name="teac-sub1"><?php echo $te1_sub; ?></label>
            </td>
            <td>
              <label id="teac-nature1" name="teac-nature1"><?php echo $te1_napp; ?></label>
            </td>
            <td>
              <label id="teac-exp-y1" name="teac-exp-y1"><?php echo $te1_yexp; ?></label>
            </td>
          </tr>
          <tr>
            <td>
              <label id="teac-insti2" name="teac-insti2"><?php if ($te2_in != "") echo $te2_in;
                                                          else echo "-"; ?></label>
            </td>
            <td>
              <label id="teac-pos2" name="teac-pos2"><?php echo $te2_pst; ?></label>
            </td>
            <td>
              <label id="teac-sub2" name="teac-sub2"><?php echo $te2_sub; ?></label>
            </td>
            <td>
              <label id="teac-nature2" name="teac-nature2"><?php echo $te2_napp; ?></label>
            </td>
            <td>
              <label id="teac-exp-y2" name="teac-exp-y2"><?php echo $te2_yexp; ?></label>
            </td>
          </tr>
          <tr>
            <td>
              <label id="teac-insti3" name="teac-insti3"><?php if ($te3_in != "") echo $te3_in;
                                                          else echo "-"; ?></label>
            </td>
            <td>
              <label id="teac-pos3" name="teac-pos3"><?php echo $te3_pst; ?></label>
            </td>
            <td>
              <label id="teac-sub3" name="teac-sub3"><?php echo $te2_sub; ?></label>
            </td>
            <td>
              <label id="teac-nature3" name="teac-nature3"><?php echo $te3_napp; ?></label>
            </td>
            <td>
              <label id="teac-exp-y3" name="teac-exp-y3"><?php echo $te3_yexp; ?></label>
            </td>
          </tr>
        </tbody>
      </table>
      <br />
      <br />
      <hr />
      <p><strong>INDUSTRY EXPERIENCE</strong></p>
      <table class="ind-exp-table">
        <tbody>
          <tr>
            <td width="250">
              <p><strong>Institute</strong></p>
            </td>
            <td width="80">
              <p><strong>Position held</strong></p>
            </td>
            <td width="80">
              <p><strong>Skills</strong></p>
            </td>
            <td width="80">
              <p><strong>Nature of appointment</strong></p>
            </td>
            <td width="80">
              <p><strong>Years of experience</strong></p>
            </td>
          </tr>
          <tr>
            <td>
              <label id="ind-insti1" name="ind-insti1"><?php if ($ie1_in != "") echo $ie1_in;
                                                        else echo "-"; ?></label>
            </td>
            <td>
              <label id="ind-pos1" name="ind-pos1"><?php echo $ie1_pst; ?></label>
            </td>
            <td>
              <label id="ind-skill1" name="ind-skill1"><?php echo $ie1_sub; ?></label>
            </td>
            <td>
              <label id="ind-nature1" name="ind-nature1"><?php echo $ie1_napp; ?></label>
            </td>
            <td>
              <label id="ind-exp-y1" name="ind-exp-y1"><?php echo $ie1_yexp; ?></label>
            </td>
          </tr>
          <tr>
            <td>
              <label id="ind-insti2" name="ind-insti2"><?php if ($ie2_in != "") echo $ie2_in;
                                                        else echo "-"; ?></label>
            </td>
            <td>
              <label id="ind-pos2" name="ind-pos2"><?php echo $ie2_pst; ?></label>
            </td>
            <td>
              <label id="ind-skill2" name="ind-skill2"><?php echo $ie2_sub; ?></label>
            </td>
            <td>
              <label id="ind-nature2" name="ind-nature2"><?php echo $ie2_napp; ?></label>
            </td>
            <td>
              <label id="ind-exp-y2" name="ind-exp-y2"><?php echo $ie2_yexp; ?></label>
            </td>
          </tr>
          <tr>
            <td>
              <label id="ind-insti3" name="ind-insti3"><?php if ($ie3_in != "") echo $ie3_in;
                                                        else echo "-"; ?></label>
            </td>
            <td>
              <label id="ind-pos3" name="ind-pos3"><?php echo $ie3_pst; ?></label>
            </td>
            <td>
              <label id="ind-skill3" name="ind-skill3"><?php echo $ie3_sub; ?></label>
            </td>
            <td>
              <label id="ind-nature3" name="ind-nature3"><?php echo $ie3_napp; ?></label>
            </td>
            <td>
              <label id="ind-exp-y3" name="ind-exp-y3"><?php echo $ie3_yexp; ?></label>
            </td>
          </tr>
        </tbody>
      </table>

      <br />
      <br />
      <hr />
      <div class="extra-work-div-form">
        <lable id="res-work-sup-l" for="res-work-sup">
          <strong>RESEARCH WORK SUPERVISED </strong>
          (If yes, give details)</lable>
        <p><?php echo $rw_sup; ?></p>
        <br />
        <br>
        <lable id="res-pre-l" for="res-pre">
          <strong>RESEARCH PAPERS PRESENTED </strong>
          (If yes, give details)
        </lable>
        <p><?php echo $rpap_pre; ?></p>
        <br />
        <br>
        <lable id="conf-attnd-l" for="conf-attnd">
          <strong>CONFERENCES/ SEMINARS/ WORKSHOPS ATTENDED </strong>
          (If yes, give details)
        </lable>
        <p><?php echo $meet_attnd; ?></p>
        <br />
        <br>
        <lable id="award-work-sup-l" for="award-work-sup">
          <strong>AWARDS/ PATENTS/ FELLOWSHIP </strong>
          (If yes, give details)
        </lable>
        <p><?php echo $awards; ?></p>
      </div>
      <br />
      <hr />
      <p><strong>REFERENCES</strong></p>
      <table class="ref-table">
        <tbody>
          <tr>
            <td>
              <p>Name</p>
            </td>
            <td>
              <p>Title</p>
            </td>
            <td>
              <p>Institution</p>
            </td>
            <td>
              <p>Phone No.</p>
            </td>
          </tr>

          <tr>
            <td>
              <label id="ref-name1" name="ref-name1"><?php if ($rf1_name != "") echo $rf1_name;
                                                        else echo "-"; ?></label>
            </td>
            <td>
              <label id="ref-title1" name="ref-title1"><?php echo $rf1_title; ?></label>
            </td>
            <td>
              <label id="ref-inst1" name="ref-inst1"><?php echo $rf1_inst; ?></label>
            </td>
            <td>
              <label id="ref-phno1" name="ref-phno1"><?php echo $rf1_phn; ?></label>
            </td>
          </tr>

          <tr>
            <td>
              <label id="ref-name2" name="ref-name2"><?php if ($rf2_name != "") echo $rf2_name;
                                                        else echo "-"; ?></label>
            </td>
            <td>
              <label id="ref-title2" name="ref-title2"><?php echo $rf2_title; ?></label>
            </td>
            <td>
              <label id="ref-inst2" name="ref-inst2"><?php echo $rf2_inst; ?></label>
            </td>
            <td>
              <label id="ref-phno2" name="ref-phno2"><?php echo $rf2_phn; ?></label>
            </td>
          </tr>

          <tr>
            <td>
              <label id="ref-name3" name="ref-name3"><?php if ($rf3_name != "") echo $rf3_name;
                                                        else echo "-"; ?></label>
            </td>
            <td>
              <label id="ref-title3" name="ref-title3"><?php echo $rf3_title; ?></label>
            </td>
            <td>
              <label id="ref-inst3" name="ref-inst3"><?php echo $rf3_inst; ?></label>
            </td>
            <td>
              <label id="ref-phno3" name="ref-phno3"><?php echo $rf3_phn; ?></label>
            </td>
          </tr>
        </tbody>
      </table>
      <br />
      <br />

      <p>
        I, <strong id="applicant_name" name="applicant_name" style="
              text-decoration-line: underline;
              text-decoration-style: solid;
              font-style: italic;
            ">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fullname; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>declare that the informations provided by me on the above mentioned<br>
        form are true and correct to the best of my knowledge and belief.
      </p>

      <br />
      <br />

      <div class="final-div-form">

        <label id="signat-l">PHOTO - <?php echo $img_name; ?></label><br>
        <img name="face-upload-img" id="face-img" src="<?php echo $img_loc; ?>" />
        <br>
        <label id="signat-l">SIGNATURE - <?php echo $sig_name; ?></label>
        <br>
        <img name="sig-upload-img" id="sign-img" src="<?php echo $sig_loc; ?>" />
        <br>
        <br>
        <label id="today-l">DATE -</label>
        <label id="today" name="today"><?php echo $s_date; ?></label>
        <br>
        <br>
        <label id="filled-place-l">PLACE-</label>
        <label id="filled-place" name="filled-place"><?php echo $s_place; ?></label>
      </div>
      <br />
      <br />
      <p style="color: red;margin-left:20px">[PLEASE NOTE] <br>*IF ANY MISTAKE IS FOUND , Click on 'CORRECTION' button to go back to the first page of the form; or
        <br>* Click on 'GO BACK' to go the previous page ;
        <br>* Click on 'FINALISE' Only if all given informations are correct.
      </p>
      <div class="group-nav">

        <button class="button-basic" id="go-first" type="submit" name="correct">
          <strong>CORRECTION</strong>
        </button>

        <button class="button-basic" id="go-first" type="submit" name="back">
          <strong>GO BACK</strong>
        </button>

        <button class="button-basic" id="submit" type="submit" value="Submit" name="submit">
          <strong>FINALISE</strong>
        </button>
      </div>

      <br />
      <br />
    </form>
    <?php
include_once('../include/foot.php');
  ?>
    

  </div>
</body>

</html>
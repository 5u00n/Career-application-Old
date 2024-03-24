<?php 
if ( ! session_id() ) {

session_start();

}
ob_start(); ?>

<?php


$email = "";


if (isset($_SESSION['email']) && $_SESSION['comp'] == "yes") {
  $email = $_SESSION['email'];
} else {
    header("location:register.php",true);
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

$ssc_docln=$hsc_docln=$bd_docln=$md_docln=$mph_docln=$phd_docln=$exm_docln="NOT SUBMITTED";


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
  $rpap_pub =
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
  $s_place = "";


$row = getProgress($email, $db);
$p_info = $row['p_info'];
$ref_avt = $row['ref_avt'];
$for_post = $row['for_post'];
$fullname = $row['fullname'];
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
$bd_peci = $row['bd_speci'];
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
  rpap_pub,
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
  <title>JOB APPLICATION PRINT</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="img/x-icon" href="../img/favicon.ico" sizes="16x16" />
  <link href="../css/print.css?version=1" rel="stylesheet" />
</head>
<style type="text/css" media="print">
  @page {
    size: auto;
    /* auto is the initial value */
    margin: 0;
    /* this affects the margin in the printer settings */
  }
</style>

<body>

  <div class="print" align="right">
  <a href="logout.php">Logout</a>
    <button onclick="printDoc()">PRINT DOCUMENT</button>
    
  </div>

  <div id="site" class="site">
    <header>
      <img id="logo" src="../img/logo.png" width="105px" />
      <div class="topic">
        <h1>
          Any Oranization
        </h1>
        <p id="act-id">
          (Vide Maharashtra Act No. XIV of 2014)<br />Pune 411067
        </p>
      </div>
      <img id="face-img" src="<?php echo $img_loc; ?>" width="30px" />
      <h3>JOB APPLICATION FORM</h3>
      <p id="to-id">
        To,
        <br />
        The Registrar,
        <br />
        Any Oranization
        <br />
        Pune – 411067
      </p>
    </header>

    <table class="refr">
      <tr>
        <td>
          <p>Ref. of Advertisement</p>
        </td>
        <td>
          <p><?php echo $ref_avt; ?></p>
        </td>
      </tr>
      <tr>
        <td width="250">
          <p>Application for the post of</p>
        </td>
        <td>
          <p><?php echo $for_post; ?></p>
        </td>
      </tr>
    </table>

    <label for="name"><strong>NAME IN FULL</strong></label> &nbsp;&nbsp;
    <label style="text-decoration-line: underline;">
      <?php echo $fullname ?>
    </label>
    <br />
    <label style="font-size: 12px;">(BLOCK LETTERS)</label>

    <!--  dob age sex married-->
    <table class="pers">
      <tr>
        <td>
          <label id="dobl" for="dob"><strong>DATE OF BIRTH</strong></label>
        </td>
        <td>
          <label id="agel" for="age"><strong>AGE</strong></label>
        </td>
        <td>
          <label id="sexl" for="sex"><strong>MALE/FEMALE</strong></label>
        </td>
        <td>
          <label for="sex"><strong>MARRIED/SINGLE</strong></label>
        </td>
      </tr>
      <tr>
        <td style="padding: 0px 15px;">
          <p id="dob"><?php echo $dob; ?></p>
        </td>
        <td style="padding: 0px 15px; width: 100px;">
          <p id="age"><?php echo $age; ?></p>
        </td>
        <td style="padding: 0px 15px;">
          <p id="sex"><?php echo $sex; ?></p>
        </td>
        <td style="padding: 0px 15px;">
          <p id="mstat"><?php echo $mstat; ?></p>
        </td>
      </tr>
      <tr>
        <td><label style="font-size: 12px;">DD/MM/YYYY</label></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>

    <div class="f-mem">
      <label id="fnamel" for="fname">Father's Name</label>
      &nbsp;&nbsp;
      <label id="fname" style="text-decoration-line: underline;"><?php echo $fname; ?></label>

      <br />
      <br />

      <label id="mnamel" for="mname">Mother's Name</label>
      &nbsp;&nbsp;
      <label id="mname" style="text-decoration-line: underline;">
        <?php echo $mname; ?>
      </label>

      <br />
      <br />

      <label id="snamel" for="sname">Spouse Name (If Married):</label>
      &nbsp;&nbsp;
      <label id="sname" style="text-decoration-line: underline;">
        <?php echo $sname; ?>
      </label>
    </div>

    <label for="per-add"><strong>PERMANENT ADDRESS</strong></label>
    <br />
    <table class="addr">
      <tbody>
        <tr>
          <td colspan="4">
            <p id="p-addr" name="p-addr" style="
                  height: 80px;
                  margin: 0px;
                  width: 100%;
                  word-wrap: break-word;
                ">
              <?php echo $pa_add ?>
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <label for="p-city_town">City/Town:</label>
            <label id="p-city_town" name="p-city_town">
              <?php echo $pa_city ?></label>
          </td>
          <td>
            <label for="p-state">State:</label>
            <label id="p-state" name="p-state">
              <?php echo $pa_state ?></label>
          </td>
          <td>
            <label for="p-coun">Country:</label>
            <label id="p-coun" name="p-coun"> <?php echo $pa_count ?></label>
          </td>
          <td>
            <label for="p-pin">Pin:</label>
            <label id="p-pin" name="p-pin"> <?php echo $pa_pin ?></label>
          </td>
        </tr>
      </tbody>
    </table>
    <br />

    <label for="addr"><strong>CORRESPONDENCE ADDRESS</strong></label>
    <br />
    <table class="addr">
      <tbody>
        <tr>
          <td colspan="4">
            <p width="768px" id="c-addr" name="c-addr" style="
                  height: 80px;
                  margin: 0px;
                  width: 100%;
                  word-wrap: break-word;
                ">
              <?php echo $ca_add ?>
            </p>
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

    <div class="contact">
      <label id="adhaarl" for="adhaar"><strong>Aadhaar card no.</strong></label>
      &nbsp;&nbsp;
      <lable id="adhaar" name="adhaar" style="text-decoration-line: underline;">
        <?php echo $aadr ?>
      </lable>
      <br />
      <br />
      <label id="emaill" for="email">Email</label>
      &nbsp;&nbsp;
      <label id="email" name="email"><?php echo $email ?></label>
      <br />
      <br />
      <label id="mobl" for="mob">Mobile</label>
      &nbsp;&nbsp;
      <label id="mob" name="mob"><?php echo $mob ?></label>
      <br />
      <br />
      <label id="catl" for="cat"><strong>CATEGORY</strong>(ST/SC/OBC/Open)</label>
      &nbsp;&nbsp;
      <label name="cat-selc" id="cat-selc" style="text-decoration-line: underline;">
        <?php echo $cat_s . " " . $cat ?>
      </label>
    </div>
    <br><br>
    <label for="edu-qual"><strong>EDUCATIONAL QUALIFICATION</strong></label>
    <br />
    <br />
    <table class="edu">
      <tbody>
        <tr align="centre">
          <th width="100">
            <p><strong>Examination</strong></p>
          </th>
          <th width="400">
            <p><strong>University/Board</strong></p>
          </th>
          <th width="80">
            <p><strong>Month and Year of Passing</strong></p>
          </th>
          <th width="80">
            <p><strong>Specialization</strong></p>
          </th>
          <th width="80">
            <p><strong>percentage</strong></p>
          </th>
          <th width="80">
            <p><strong>Class/grade</strong></p>
          </th>
        </tr>

        <tr>
          <td>
            <p>S.S.C</p>
          </td>
          <td>
            <label class="q-org" name="ssc-org" id="ssc-org"><?php echo $ssc_org; ?>
            </label>
          </td>
          <td>
            <label name="ssc-year" id="ssc-year" class="q-year"><?php echo $ssc_my; ?>
            </label>
          </td>
          <td>
            <label class="q-special" name="ssc-special" id="ssc-special"><?php echo $ssc_speci; ?></label>
          </td>
          <td>
            <label class="q-percnt" name="ssc-percnt" id="ssc-percnt"><?php echo $ssc_prcnt; ?>
            </label>
          </td>
          <td>
            <label class="q-grade" name="ssc-grade" id="ssc-grade"><?php echo $ssc_grade; ?>
            </label>
          </td>
        </tr>
        <tr>
          <td>
            <p>H.S.C</p>
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
        </tr>
      </tbody>
    </table>
    <br />
    <label for="teach-exp"><strong>TEACHING EXPERIENCE</strong></label>
    <br />
    <br />
    <table class="exp">
      <tbody>
        <tr>
          <th width="300">
            <p><strong>Institute</strong></p>
          </th>
          <th width="200">
            <p><strong>Position held</strong></p>
          </th>
          <th width="300">
            <p><strong>Subject</strong></p>
          </th>
          <th width="100">
            <p><strong>Nature of appointment</strong></p>
          </th>
          <th width="100">
            <p><strong>Years of experience</strong></p>
          </th>
        </tr>
        <tr>
          <td>
            <label id="teac-insti1" name="teac-insti1">
              <?php if($te1_in!="") echo $te1_in; else echo "-";?>
            </label>
          </td>
          <td>
            <label id="teac-pos1" name="teac-pos1">
              <?php echo $te1_pst; ?>
            </label>
          </td>
          <td>
            <label id="teac-sub1" name="teac-sub1">
              <?php echo $te1_sub; ?>
            </label>
          </td>
          <td>
            <label id="teac-nature1" name="teac-nature1">
              <?php echo $te1_napp; ?>
            </label>
          </td>
          <td>
            <label id="teac-exp-y1" name="teac-exp-y1">
              <?php echo $te1_yexp; ?>
            </label>
          </td>
        </tr>
        <tr>
          <td>
            <label id="teac-insti2" name="teac-insti2"><?php if($te2_in!="") echo $te2_in; else echo "-"; ?></label>
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
            <label id="teac-insti3" name="teac-insti3"><?php if($te3_in!="") echo $te3_in; else echo "-";?></label>
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
    <p><strong>INDUSTRY EXPERIENCE</strong></p>
    <table class="exp">
      <tbody>
        <tr>
          <th width="300">
            <p><strong>Institute</strong></p>
          </th>
          <th width="200">
            <p><strong>Position held</strong></p>
          </th>
          <th width="300">
            <p><strong>Skills</strong></p>
          </th>
          <th width="100">
            <p><strong>Nature of appointment</strong></p>
          </th>
          <th width="100">
            <p><strong>Years of experience</strong></p>
          </th>
        </tr>
        <tr>
          <td>
            <label id="ind-insti1" name="ind-insti1"><?php if($ie1_in!="") echo $ie1_in; else echo "-";?></label>
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
            <label id="ind-insti2" name="ind-insti2"><?php if($ie2_in!="") echo $ie2_in; else echo "-";?></label>
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
            <label id="ind-insti3" name="ind-insti3"><?php if($ie3_in!="") echo $ie3_in; else echo "-";?></label>
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

    <div class="extra1" id="#extra">
      <lable id="res-work-sup-l" for="res-work-sup">
        <strong>RESEARCH WORK SUPERVISED </strong>
        (If yes, give details)
      </lable>
      <br />
      <p><?php echo $rw_sup; ?></p>

      <lable id="res-pre-l" for="res-pre">
        <strong>RESEARCH PAPERS PUBLISHED </strong>
        (If yes, give details)
      </lable>
      <p><?php echo $rpap_pub; ?></p>

      <lable id="res-pre-l" for="res-pre">
        <strong>RESEARCH PAPERS PRESENTED </strong>
        (If yes, give details)
      </lable>
      <p><?php echo $rpap_pre; ?></p>
    </div>
    <br>
    <div class="extra">
      <lable id="conf-attnd-l" for="conf-attnd">
        <strong>CONFERENCES/ SEMINARS/ WORKSHOPS ATTENDED </strong>
        (If yes, give details)
      </lable>
      <p><?php echo $meet_attnd; ?></p>

      <lable id="award-work-sup-l" for="award-work-sup">
        <strong>AWARDS/PATENTS/FELLOWSHIP </strong>
        (If yes, give details)
      </lable>
      <p><?php echo $awards; ?></p>
    </div>

    <br />

    <p><strong>REFERENCES</strong></p>
    <table class="reffr">
      <tbody>
        <tr>
          <th width="200">
            <p>Name</p>
          </th>
          <th width="200">
            <p>Title</p>
          </th>
          <th width="300">
            <p>Institution</p>
          </th>
          <th width="200">
            <p>Phone No.</p>
          </th>
        </tr>

        <tr>
          <td>
            <label id="ref-name1" name="ref-name1"><?php echo $rf1_name; ?></label>
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
            <label id="ref-name2" name="ref-name2"><?php echo $rf2_name; ?></label>
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
            <label id="ref-name3" name="ref-name3"><?php echo $rf3_name; ?></label>
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

    <p>
      I,
      <strong id="applicant_name" name="applicant_name" style="
            text-decoration-line: underline;
            text-decoration-style: solid;
            font-style: italic;
          "><?php echo $fullname; ?></strong>declare that the information <br />
      provided by me on the above mentioned form is true and correct to the
      best of my knowledge and belief.
    </p>

    <br />
    <br />

    <div class="signa">
      <label> SIGNATURE -</label>

      <img src="<?php echo $sig_loc; ?>" />
    </div>

    <br />
    <label>DATE -</label>
    <label> <?php echo $s_date; ?> </label>
    <br />
    <br />
    <label>PLACE-</label>
    <label class="end-doc">
      <?php echo $s_place; ?>
    </label>

    <br />
    <br />
    <div class="sub-file">
      <p><strong>DOCUMENT SUBMITED</strong></p>
      <label> <?php if (strcmp($ssc_docln, "")) {
                echo "SSC DOCUMENT: - " . $ssc_docln;
              } ?> </label>
      <br />
      <br />


      <label> <?php if (strcmp($hsc_docln, "")) {
                echo "HSC DOCUMENT: -     " . $hsc_docln;
              } ?> </label>
      <br />
      <br />


      <label> <?php if (strcmp($bd_docln, "")) {
                echo "Bachelor's Degree DOCUMENT: -     " . $bd_docln;
              } ?> </label>
      <br />
      <br />


      <label> <?php if (strcmp($md_docln, "")) {
                echo "Master's Degree Document: -     " . $md_docln;
              } ?> </label>
      <br />
      <br />


      <label> <?php 
                echo "M.Phil. Document: -     $mph_docln";
              ?> </label>
      <br />
      <br />


      <label> <?php if (strcmp($phd_docln, "")) {
                echo "Ph.D. Document: -     " . $phd_docln;
              } ?> </label>
      <br />
      <br />


      <label> <?php if (strcmp($exm_docln, "")) {
                echo "NET/SLET/SET/JRF Document: -     " . $exm_docln;
              } ?> </label>
      <br />
      <br />
    </div>

  </div>


  <footer>
  </footer>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    function printDoc() {
      window.print();
    }
  </script>
</body>

</html>

<?php
ob_end_flush();
?>
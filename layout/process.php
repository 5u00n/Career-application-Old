<?php

?>

<?php include '../include/config.php'; ?>

<?php
gc_enable();
$email = "";
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    //echo '<h1 style="color:green;margin:100px auto;width:100%;text-align:centre"><strong>..........Preparing files.</strong></h1><br>';
} else {
    Header("location:register.php");
}
?>

<?php
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$db->select_db("$dbname");
?>


<?php

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
    $code =
    $reg_date =
    $id =
    $firname =
    $s_place = "";


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
//$fullname = $row['fullname'];
$ssc_org = $row['ssc_org'];
$ssc_my = $row['ssc_my'];
$ssc_speci = $row['ssc_speci'];
$ssc_prcnt = $row['ssc_prcnt'];
$ssc_grade = $row['ssc_grade'];
$ssc_docl = $row['ssc_docl'];
$ssc_mid = explode("/", $ssc_docl);
if (sizeof($ssc_mid) == 3)
    $ssc_docln = $ssc_mid[2];
$hsc_org = $row['hsc_org'];
$hsc_my = $row['hsc_my'];
$hsc_speci = $row['hsc_speci'];
$hsc_prcnt = $row['hsc_prcnt'];
$hsc_grade = $row['hsc_grade'];
$hsc_docl = $row['hsc_docl'];
$hsc_mid = explode("/", $hsc_docl);
if (sizeof($hsc_mid) == 3)
    $hsc_docln = $hsc_mid[2];
$bd_org = $row['bd_org'];
$bd_my = $row['bd_my'];
$bd_peci = $row['bd_speci'];
$bd_prcnt = $row['bd_prcnt'];
$bd_grade = $row['bd_grade'];
$bd_docl = $row['bd_docl'];
$bd_mid = explode("/", $bd_docl);
if (sizeof($bd_mid) == 3)
    $bd_docln = $bd_mid[2];
$md_org = $row['md_org'];
$md_my = $row['md_my'];
$md_speci = $row['md_speci'];
$md_prcnt = $row['md_prcnt'];
$md_grade = $row['md_grade'];
$md_docl = $row['md_docl'];
$md_mid = explode("/", $md_docl);
if (sizeof($md_mid) == 3)
    $md_docln = $md_mid[2];
$mph_org = $row['mph_org'];
$mph_my = $row['mph_my'];
$mph_speci = $row['mph_speci'];
$mph_prcnt = $row['mph_prcnt'];
$mph_grade = $row['mph_grade'];
$mph_docl = $row['mph_docl'];
$mph_mid = explode("/", $mph_docl);
if (sizeof($mph_mid) == 3)
    $mph_docln = $mph_mid[2];
$phd_org = $row['phd_org'];
$phd_my = $row['phd_my'];
$phd_speci = $row['phd_speci'];
$phd_prcnt = $row['phd_prcnt'];
$phd_grade = $row['phd_grade'];
$phd_docl = $row['phd_docl'];
$phd_mid = explode("/", $phd_docl);
if (sizeof($phd_mid) == 3)
    $phd_docln = $phd_mid[2];
$exm_org = $row['exm_org'];
$exm_my = $row['exm_my'];
$exm_speci = $row['exm_speci'];
$exm_prcnt = $row['exm_prcnt'];
$exm_grade = $row['exm_grade'];
$exm_docl = $row['exm_docl'];
$exm_mid = explode("/", $exm_docl);
if (sizeof($exm_mid) == 3)
    $exm_docln = $exm_mid[2];
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
if (sizeof($img_mid) == 3)
    $img_name = $img_mid[2];
$sig_loc = $row['sig_loc'];
$sig_mid = explode("/", $sig_loc);
if (sizeof($sig_mid) == 3)
    $sig_name = $sig_mid[2];
$s_date = $row['s_date'];
$s_place = $row['s_place'];





function getProgress($email, $db)
{
    $sql = "SELECT
  code,
  id,
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
  s_place,
  reg_date
   FROM regis_candidate where email ='$email'";
    $result = $db->query($sql);
    //echo $result;

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            return $row;
        }
    }
}







require '../lib/dompdf/vendor/autoload.php';





ob_start();
?>

<html>
<style>
    @media print {
        .con {
            page-break-inside: avoid;
        }
    }

    @page {
        margin: 0px;
    }


    .elem {
        page-break-inside: avoid;
    }

    p {
        font-size: 9pt;
    }

    .edu p,
    .exp1 p,
    .exp2 p {
        margin: 4px 0px;
    }

    .reffr p {
        margin: 6px 3px;
    }

    table,
    td,
    tr,
    th {
        border-collapse: collapse;
        border: 0.5px solid;
    }
</style>

<body style="font-family: sans-serif;">
    <div class="page1" style="
        width: 21cm;
        height: 30cm;
        margin: 0px auto;
        position: relative;
        font-size: 9pt;page-break-inside: avoid;">
        <div class="elem" style="width:19cm;
        height: 30cm; position: absolute;padding:40px;">

            <div class="header">
                <div style="position: absolute;">
                    <img id="logo" src="../img/logo.png" width="80px" style="position: absolute;" />
                </div>
                <div class="topic" style="
              position: absolute;
              text-align: center;
              left: 30;
              top: 36px; ">
                    <h1 style="margin: 0px; font-size: 13pt;">
                        Spicer Adventist University
                    </h1>
                    <p id="act-id" style="margin: 0px; font-size: 11pt;">
                        (Vide Maharashtra Act No. XIV of 2014)<br />Pune 411067
                    </p>
                    <h3 style="font-size: 10pt; margin-top: 25px;">
                        JOB APPLICATION FORM
                    </h3>
                </div>
                <div class="photo" style="position: absolute; right: 42; top: 86;">
                    <img id="face-img" src="<?php echo $img_loc; ?>" width="130px" height="146px" alt="no img" style="border: 0.5px solid;" />
                </div>

                <div class="to" style="position: absolute; left: 30; top: 198px;">
                    <p id="to-id">
                        To,
                        <br />
                        The Registrar,
                        <br />
                        Spicer Adventist University
                        <br />
                        Pune – 411067
                    </p>
                </div>

            </div>

            <div class="refr" style="position: relative; top: 187;">
                <table style="
              border: 0.5px solid black;
              width: 100%;
              height: 26px;
              border-collapse: collapse;">
                    <tr>
                        <td width="130">
                            <p style="margin: 5px 10px;">Ref. of Advertisement</p>
                        </td>
                        <td>
                            <p style="margin: 5px 10px;"><?php echo $ref_avt ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="130">
                            <p style="margin: 5px 10px;">Application for the post of</p>
                        </td>
                        <td>
                            <p style="margin: 5px 10px;"><?php echo $for_post ?></p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="name-div" style="position: relative; top: 200;">
                <p><strong>NAME IN FULL</strong>&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fullname); ?></p>
                <p style="position: absolute; font-size: 7pt; top: 16px;">
                    (BLOCK LETTER)
                </p>
            </div>

            <div style="position: relative; top:210;text-align:center;">
                <p style="margin: 0px;position: absolute;left:35"><strong> DATE OF BIRTH</strong></p>
                <p style="
                      border: 0.5px solid;
                      width: 198px;
                      margin: 0px;
                      position: absolute;
                     padding: 10px 0;
                     margin: 0;
                     text-align: center;
                     top:15;
                      ">
                    <?php echo $dob ?>
                </p>
                <p style="margin: 2px;position:absolute;top:42;left:40;">(DD/MM/YYY)</p>
            </div>

            <div style="position: relative; top:210;text-align:center;left:193;">
                <p style="margin: 0px;position: absolute;left:25"><strong>AGE</strong></p>
                <p style="
               border: 0.5px solid;
                      width: 100px;
                      margin: 0px;
                      position: absolute;
                     padding: 10px 0;
                     margin: 0;
                     text-align: center;
                     top:15;
              ">
                    <?php echo $age ?>
                </p>
            </div>

            <div style="position: relative; top:210;text-align:center;left:314;">
                <p style="margin: 0px;position: absolute;left:15;"><strong>MALE/FEMALE</strong></p>
                <p style="
                     border: 0.5px solid;
                     width: 130px;
                     margin: 0px;
                     position: absolute;
                     padding: 10px 0;
                     margin: 0;
                     text-align: center;
                     top:15;
              ">
                    <?php echo $sex ?>
                </p>
            </div>

            <div style="position: relative; top:210;text-align:center;left:440;">
                <p style="margin: 0px;position: absolute;left:10;"><strong>MARRIED SINGLE</strong></p>
                <p style="
                    border: 0.5px solid;
                      width: 130px;
                      margin: 0px;
                      position: absolute;
                     padding: 10px 0;
                     margin: 0;
                     text-align: center;
                     top:15;
              ">
                    <?php echo $mstat ?>
                </p>
            </div>

            <div class="fam-name" style="position: relative; top: 260;">
                <div class="name-div" style="width: 100%; position:absolute;">
                    <p>Father's name&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fname; ?></p>
                </div>
                <div class="name-div" style="width: 100%; position:absolute;top:25">
                    <p>Mother's name&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mname; ?></p>
                </div>
                <div class="name-div" style="width: 100%; position:absolute;top:50;">
                    <p>Spouse's name&nbsp;&nbsp;&nbsp;<?php echo $sname ?></p>
                </div>
            </div>

            <div class="addr" style="position: relative; top: 340;">
                <p style="margin: 4px 0px;"><strong>PERMANENT ADDRESS</strong></p>
                <table class="addr" style="margin: 0px; width: 100%;">
                    <tbody>
                        <tr>
                            <td colspan="4">
                                <p id="p-addr" name="p-addr" style="
                      height: 40px;
                      margin: 0px;
                      width: 100%;
                      word-wrap: break-word;
                      padding: 5px;
                    ">
                                    <?php echo $pa_add ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="padding: 4.5px;margin: 0px 10px;">
                                    City/Town:&nbsp;&nbsp;<?php echo $pa_city ?>
                                </p>
                            </td>
                            <td>
                                <p style="margin: 0px 10px;">State:&nbsp;&nbsp;<?php echo $pa_state ?></p>
                            </td>
                            <td>
                                <p style="margin: 0px 10px;">Country:&nbsp;&nbsp;<?php echo $pa_count ?></p>
                            </td>
                            <td>
                                <p style="margin: 0px 10px;">Pin:&nbsp;&nbsp;<?php echo $pa_pin ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p style="margin: 4px 0px; margin-top: 13px;">
                    <strong>CORRESPONDENCE ADDRESS</strong>
                </p>
                <table class="addr" style="margin: 0px; width: 100%;">
                    <tbody>
                        <tr>
                            <td colspan="4">
                                <p id="p-addr" name="p-addr" style="
                      height: 40px;
                      margin: 0px;
                      width: 100%;
                      word-wrap: break-word;
                      padding: 5px;
                    ">
                                    <?php echo $ca_add ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="padding: 4.5px;margin: 0px 10px;">
                                    City/Town:&nbsp;&nbsp;<?php echo $ca_city ?>
                                </p>
                            </td>
                            <td>
                                <p style="margin: 5px 10px;">State:&nbsp;&nbsp;<?php echo $ca_state ?></p>
                            </td>
                            <td>
                                <p style="margin: 5px 10px;">Country:&nbsp;&nbsp;<?php echo $ca_count ?></p>
                            </td>
                            <td>
                                <p style="margin: 5px 10px;">Pin:&nbsp;&nbsp;<?php echo $ca_pin ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
            </div>

            <div class="con" style="position: relative;page-break-inside: avoid;top:345;">
                <div class="name-div" style="position: absolute;top:0;">
                    <p style="margin:5px 0px"><strong>Aadhaar card no.</strong>&nbsp;&nbsp;&nbsp;<?php echo $aadr ?></p>
                </div>
                <div class="name-div" style="position: absolute;top:30;">
                    <p style="margin:5px 0px"><strong>Email</strong>&nbsp;&nbsp;&nbsp;<?php echo $email ?></p>
                </div>
                <div class="name-div" style="position: absolute;top:60;">
                    <p style="margin:5px 0px"><strong>Mobile</strong>&nbsp;&nbsp;&nbsp;<?php echo $mob ?></p>
                </div>
                <div class="name-div" style="position: absolute;top:90;">
                    <p style="margin:5px 0px"><strong>Category</strong>&nbsp;&nbsp;&nbsp;<?php echo $cat . $cat_s; ?></p>
                </div>
                <div class="name-div" style="position: absolute;top:120;">
                    <p style="margin:5px 0px"><strong></strong>&nbsp;&nbsp;&nbsp;</p>
                </div>
            </div>

            <div class="qual" style="position: relative;top: 30;font-size:9pt;">
                <p style="">
                    <strong>EDUCATIONAL QUALIFICATION</strong>
                </p>
                <table class="edu" style="width:18.4cm;position:absolute;">
                    <tbody>
                        <tr align="centre" style="font-size:8pt">
                            <th width="70">
                                <p style="margin:0px;"><strong>Examination</strong></p>
                            </th>
                            <th width="190">
                                <p style="margin:0px;"><strong>University/Board</strong></p>
                            </th>
                            <th width="50">
                                <p style="margin:0px;"><strong>Month and Year of Passing</strong></p>
                            </th>
                            <th width="50">
                                <p style="margin:0px;"><strong>Specialization</strong></p>
                            </th>
                            <th width="50">
                                <p style="margin:0px;"><strong>Percentage</strong></p>
                            </th>
                            <th width="50">
                                <p style="margin:0px;"><strong>Class/grade</strong></p>
                            </th>
                        </tr>

                        <tr>
                            <td>
                                <p>S.S.C</p>
                            </td>
                            <td>
                                <p class="q-org" name="ssc-org" id="ssc-org"><?php echo $ssc_org; ?>
                                </p>
                            </td>
                            <td>
                                <p name="ssc-year" id="ssc-year" class="q-year"><?php echo $ssc_my; ?>
                                </p>
                            </td>
                            <td>
                                <p class="q-special" name="ssc-special" id="ssc-special"><?php echo $ssc_speci; ?></p>
                            </td>
                            <td>
                                <p class="q-percnt" name="ssc-percnt" id="ssc-percnt"><?php echo $ssc_prcnt; ?>
                                </p>
                            </td>
                            <td>
                                <p class="q-grade" name="ssc-grade" id="ssc-grade"><?php echo $ssc_grade; ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>H.S.C</p>
                            </td>
                            <td>
                                <p class="q-org" name="hsc-org" id="hsc-org"><?php echo $hsc_org; ?></p>
                            </td>
                            <td>
                                <p class="q-year" name="hsc-year" id="hsc-year"><?php echo $hsc_my; ?></p>
                            </td>
                            <td>
                                <p class="q-special" name="hsc-special" id="hsc-special"><?php echo $hsc_speci; ?></p>
                            </td>
                            <td>
                                <p class="q-percnt" name="hsc-percnt" id="hsc-percnt"><?php echo $hsc_prcnt; ?></p>
                            </td>
                            <td>
                                <p class="q-grade" name="hsc-grade" id="hsc-grade"><?php echo $ssc_grade; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Bachelor&rsquo;s Degree</p>
                            </td>
                            <td>
                                <p class="q-org" name="bdeg-org" id="bdeg-org"><?php echo $bd_org; ?></p>
                            </td>
                            <td>
                                <p class="q-year" name="bdeg-year" id="bdeg-year"><?php echo $bd_my; ?></p>
                            </td>
                            <td>
                                <p class="q-special" name="bdeg-special" id="bdeg-special"><?php echo $bd_speci; ?></p>
                            </td>
                            <td>
                                <p class="q-percnt" name="bdeg-percnt" id="bdeg-percnt"><?php echo $bd_prcnt; ?></p>
                            </td>
                            <td>
                                <p class="q-grade" name="bdeg-grade" id="bdeg-grade"><?php echo $bd_grade; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Master&rsquo;s Degree</p>
                            </td>
                            <td>
                                <p class="q-org" name="mdeg-org" id="mdeg-org"><?php echo $md_org; ?></p>
                            </td>
                            <td>
                                <p class="q-year" name="mdeg-year" id="mdeg-year"><?php echo $md_my; ?></p>
                            </td>
                            <td>
                                <p class="q-special" name="mdeg-special" id="mdeg-special"><?php echo $md_speci; ?></p>
                            </td>
                            <td>
                                <p class="q-percnt" name="mdeg-percnt" id="mdeg-percnt"><?php echo $md_prcnt; ?></p>
                            </td>
                            <td>
                                <p class="q-grade" name="mdeg-grade" id="mdeg-grade"><?php echo $md_grade; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>M.Phil.</p>
                            </td>
                            <td>
                                <p class="q-org" name="mphil-org" id="mphil-org"><?php echo $mph_org; ?></p>
                            </td>
                            <td>
                                <p class="q-year" name="mphil-year" id="mphil-year"><?php echo $mph_my; ?></p>
                            </td>
                            <td>
                                <p class="q-special" name="mphil-special" id="mphil-special"><?php echo $mph_speci; ?>
                                </p>
                            </td>
                            <td>
                                <p class="q-percnt" name="mphil-percnt" id="mphil-percnt"><?php echo $mph_prcnt; ?></p>
                            </td>
                            <td>
                                <p class="q-grade" name="mphil-grade" id="mphil-grade"><?php echo $mph_grade; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ph.D.</p>
                            </td>
                            <td>
                                <p class="q-org" name="phd-org" id="phd-org"><?php echo $phd_org; ?></p>
                            </td>
                            <td>
                                <p class="q-year" name="phd-year" id="phd-year"><?php echo $phd_my; ?></p>
                            </td>
                            <td>
                                <p class="q-special" name="phd-special" id="phd-special"><?php echo $phd_speci; ?></p>
                            </td>
                            <td>
                                <p class="q-percnt" name="phd-percnt" id="phd-percnt"><?php echo $phd_prcnt; ?></p>
                            </td>
                            <td>
                                <p class="q-grade" name="phd-grade" id="phd-grade"><?php echo $phd_grade; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>NET/SLET/SET/JRF</p>
                            </td>
                            <td>
                                <p class="q-org" name="exam-org" id="exam-org"><?php echo $exm_org; ?></p>
                            </td>
                            <td>
                                <p class="q-year" name="exam-year" id="exam-year"><?php echo $exm_my; ?></p>
                            </td>
                            <td>
                                <p class="q-special" name="exam-special" id="exam-special"><?php echo $exm_speci; ?></p>
                            </td>
                            <td>
                                <p class="q-percnt" name="exam-percnt" id="exam-percnt"><?php echo $exm_prcnt; ?></p>
                            </td>
                            <td>
                                <p class="q-grade" name="exam-grade" id="exam-grade"><?php echo $exm_grade; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="exp1" style="position: relative;top: 220;font-size:9pt;">
                <p><strong>TEACHING EXPERIENCE</strong></p>
                <table class="exp" style="width: 18.4cm;position:absolute;">
                    <tbody>
                        <tr align="centre" style="font-size:8pt">
                            <th width="180">
                                <p><strong>Institute</strong></p>
                            </th>
                            <th width="80">
                                <p><strong>Position held</strong></p>
                            </th>
                            <th width="80">
                                <p><strong>Subject</strong></p>
                            </th>
                            <th width="100">
                                <p><strong>Nature of appointment</strong></p>
                            </th>
                            <th width="80">
                                <p><strong>Years of experience</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <p id="teac-insti1" name="teac-insti1">
                                    <?php if ($te1_in != "") {
                                        echo $te1_in;
                                    } else
                                        echo "-" ?>
                                </p>
                            </td>
                            <td>
                                <p id="teac-pos1" name="teac-pos1">
                                    <?php echo $te1_pst; ?>
                                </p>
                            </td>
                            <td>
                                <p id="teac-sub1" name="teac-sub1">
                                    <?php echo $te1_sub; ?>
                                </p>
                            </td>
                            <td>
                                <p id="teac-nature1" name="teac-nature1">
                                    <?php echo $te1_napp; ?>
                                </p>
                            </td>
                            <td>
                                <p id="teac-exp-y1" name="teac-exp-y1">
                                    <?php echo $te1_yexp; ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p id="teac-insti2" name="teac-insti2"><?php if ($te2_in != "") {
                                                                            echo $te2_in;
                                                                        } else
                                                                            echo "-" ?></p>
                            </td>
                            <td>
                                <p id="teac-pos2" name="teac-pos2"><?php echo $te2_pst; ?></p>
                            </td>
                            <td>
                                <p id="teac-sub2" name="teac-sub2"><?php echo $te2_sub; ?></p>
                            </td>
                            <td>
                                <p id="teac-nature2" name="teac-nature2"><?php echo $te2_napp; ?></p>
                            </td>
                            <td>
                                <p id="teac-exp-y2" name="teac-exp-y2"><?php echo $te2_yexp; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p id="teac-insti3" name="teac-insti3"><?php if ($te3_in != "") {
                                                                            echo $te3_in;
                                                                        } else
                                                                            echo "-" ?></p>
                            </td>
                            <td>
                                <p id="teac-pos3" name="teac-pos3"><?php echo $te3_pst; ?></p>
                            </td>
                            <td>
                                <p id="teac-sub3" name="teac-sub3"><?php echo $te2_sub; ?></p>
                            </td>
                            <td>
                                <p id="teac-nature3" name="teac-nature3"><?php echo $te3_napp; ?></p>
                            </td>
                            <td>
                                <p id="teac-exp-y3" name="teac-exp-y3"><?php echo $te3_yexp; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="exp2" style="position:relative;top: 310;font-size:9pt;">
                <p><strong>INDUSTRY EXPERIENCE</strong></p>
                <table class="exp" style="width: 18.4cm;position:absolute;">
                    <tbody>
                        <tr>
                            <th width="180">
                                <p><strong>Institute</strong></p>
                            </th>
                            <th width="80">
                                <p><strong>Position held</strong></p>
                            </th>
                            <th width="80">
                                <p><strong>Skills</strong></p>
                            </th>
                            <th width="100">
                                <p><strong>Nature of appointment</strong></p>
                            </th>
                            <th width="80">
                                <p><strong>Years of experience</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <p id="ind-insti1" name="ind-insti1"><?php if ($ie1_in != "") {
                                                                            echo $ie1_in;
                                                                        } else
                                                                            echo "-" ?></p>
                            </td>
                            <td>
                                <p id="ind-pos1" name="ind-pos1"><?php echo $ie1_pst; ?></p>
                            </td>
                            <td>
                                <p id="ind-skill1" name="ind-skill1"><?php echo $ie1_sub; ?></p>
                            </td>
                            <td>
                                <p id="ind-nature1" name="ind-nature1"><?php echo $ie1_napp; ?></p>
                            </td>
                            <td>
                                <p id="ind-exp-y1" name="ind-exp-y1"><?php echo $ie1_yexp; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p id="ind-insti2" name="ind-insti2"><?php if ($ie2_in != "") {
                                                                            echo $ie2_in;
                                                                        } else
                                                                            echo "-" ?></p>
                            </td>
                            <td>
                                <p id="ind-pos2" name="ind-pos2"><?php echo $ie2_pst; ?></p>
                            </td>
                            <td>
                                <p id="ind-skill2" name="ind-skill2"><?php echo $ie2_sub; ?></p>
                            </td>
                            <td>
                                <p id="ind-nature2" name="ind-nature2"><?php echo $ie2_napp; ?></p>
                            </td>
                            <td>
                                <p id="ind-exp-y2" name="ind-exp-y2"><?php echo $ie2_yexp; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p id="ind-insti3" name="ind-insti3"><?php if ($ie3_in != "") {
                                                                            echo $ie3_in;
                                                                        } else
                                                                            echo "-" ?></p>
                            </td>
                            <td>
                                <p id="ind-pos3" name="ind-pos3"><?php echo $ie3_pst; ?></p>
                            </td>
                            <td>
                                <p id="ind-skill3" name="ind-skill3"><?php echo $ie3_sub; ?></p>
                            </td>
                            <td>
                                <p id="ind-nature3" name="ind-nature3"><?php echo $ie3_napp; ?></p>
                            </td>
                            <td>
                                <p id="ind-exp-y3" name="ind-exp-y3"><?php echo $ie3_yexp; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="extra1" id="#extra" style="position:relative;top: 420;">
                <p>
                    <strong>RESEARCH WORK SUPERVISED </strong>
                    (If yes, give details)
                </p>
                <p style="height: 70px;width:18.4cm;"><?php echo $rw_sup; ?></p>

                <p>
                    <strong>RESEARCH PAPERS PUBLISHED </strong>
                    (If yes, give details)
                </p>
                <p style="height: 70px;width:18.4cm;"><?php echo $rpap_pub; ?></p>

                <p>
                    <strong>RESEARCH PAPERS PRESENTED </strong>
                    (If yes, give details)
                </p>
                <p style="height: 70px;width:18.4cm;"><?php echo $rpap_pre; ?></p>
            </div>

            <br>
            <br><br><br><br><br><br><br>

            <div style="position: relative;top:400">
                <p></p>
            </div>

        </div>
    </div>

    <div class="page3" style="margin:0px">

        <div class="elem" style="width:19cm;height: 30cm; position: absolute;padding:40px;">

            <div class="extra" style="position: relative;top:0;">
                <p style="">
                    <strong>CONFERENCES/ SEMINARS/ WORKSHOPS ATTENDED </strong>
                    (If yes, give details)
                </p>
                <p style="height: 70px;width:18.4cm;"><?php echo $meet_attnd; ?></p>

                <p>
                    <strong>AWARDS/PATENTS/FELLOWSHIP </strong>
                    (If yes, give details)
                </p>
                <p style="height: 70px;width:18.4cm;"><?php echo $awards; ?></p>
            </div>

            <div class="r" style="position: relative;top:1;">
                <p><strong>REFERENCES</strong></p>
                <table class="reffr" style="position: absolute;width: 18.4cm;">
                    <tbody>
                        <tr>
                            <th width="130">
                                <p>Name</p>
                            </th>
                            <th width="100">
                                <p>Title</p>
                            </th>
                            <th width="200">
                                <p>Institution</p>
                            </th>
                            <th width="100">
                                <p>Phone No.</p>
                            </th>
                        </tr>

                        <tr>
                            <td>
                                <p id="ref-name1" name="ref-name1"><?php if ($rf1_name != "") echo $rf1_name;
                                                                    else echo "-"; ?></p>
                            </td>
                            <td>
                                <p id="ref-title1" name="ref-title1"><?php echo $rf1_title; ?></p>
                            </td>
                            <td>
                                <p id="ref-inst1" name="ref-inst1"><?php echo $rf1_inst; ?></p>
                            </td>
                            <td>
                                <p id="ref-phno1" name="ref-phno1"><?php echo $rf1_phn; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p id="ref-name2" name="ref-name2"><?php if ($rf2_name != "") echo $rf2_name;
                                                                    else echo "-"; ?></p>
                            </td>
                            <td>
                                <p id="ref-title2" name="ref-title2"><?php echo $rf2_title; ?></p>
                            </td>
                            <td>
                                <p id="ref-inst2" name="ref-inst2"><?php echo $rf2_inst; ?></p>
                            </td>
                            <td>
                                <p id="ref-phno2" name="ref-phno2"><?php echo $rf2_phn; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p id="ref-name3" name="ref-name3"><?php if ($rf3_name != "") echo $rf3_name;
                                                                    else echo "-"; ?></p>
                            </td>
                            <td>
                                <p id="ref-title3" name="ref-title3"><?php echo $rf3_title; ?></p>
                            </td>
                            <td>
                                <p id="ref-inst3" name="ref-inst3"><?php echo $rf3_inst; ?></p>
                            </td>
                            <td>
                                <p id="ref-phno3" name="ref-phno3"><?php echo $rf3_phn; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="dec" style="position: relative;top:100;">
                <p>
                    I, _
                    <strong id="applicant_name" name="applicant_name" style="
                text-decoration-line: underline;
                text-decoration-style: solid;
                font-style: italic;
              ">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fullname; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>_declare that the information <br />
                    provided by me on the above mentioned form is true and correct to
                    the best of my knowledge and belief.
                </p>
            </div>

            <div class="signa" style="position:relative;top:101">
                <p style="position: absolute;top:15;"> SIGNATURE -</p>

                <img src="<?php echo $sig_loc; ?>" style="width:200px;height:50px;position: absolute;top:0;left:70;" />
            </div>

            <div class="loc" style="position: relative;top:150">
                <p>DATE -</p>
                <p> <?php echo $s_date; ?> </p>
                <p>PLACE-</p>
                <p class="end-doc">
                    <?php echo $s_place; ?>
                </p>
            </div>

        </div>

    </div>
</body>

</html>


<?php
$html = ob_get_clean();

use Dompdf\Dompdf;

$dompdf = new DOMPDF();
$dompdf->set_paper('a4', 'portrait');
$dompdf->load_html($html);
$dompdf->render();
//$dompdf->stream("form.pdf");
$output = $dompdf->output();
file_put_contents('../sau_uploads/' . $firname . '/' . $firname . 'Application.pdf', $output);
//echo "real:generate pdf ".(memory_get_peak_usage(true)/1024/1024)." MiB\n\n";
$dompdf = $output = NULL;
gc_collect_cycles();
//echo "real:PDF after ".(memory_get_peak_usage(true)/1024/1024)." MiB\n\n";
?>


<?php

$query = "SELECT * FROM regis_candidate ORDER BY id ASC";
$result = $db->query($query);

require '../lib/phpexcel/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$file = new Spreadsheet();

$active_sheet = $file->getActiveSheet();

$active_sheet->setCellValue('A1', 'First Name');

$active_sheet->setCellValue('A1', 'Submit ID');
$active_sheet->setCellValue('B1', 'Time Stamp');
$active_sheet->setCellValue('C1', 'Email');
$active_sheet->setCellValue('D1', ' Secure Code');
$active_sheet->setCellValue('E1', 'Ref. of Advertisement');
$active_sheet->setCellValue('F1', 'Aplication for the post of.');
$active_sheet->setCellValue('G1', 'Name');
$active_sheet->setCellValue('H1', 'Date of Birth');
$active_sheet->setCellValue('I1', 'Age');
$active_sheet->setCellValue('J1', 'Sex');
$active_sheet->setCellValue('K1', 'Father\'s Name');
$active_sheet->setCellValue('L1', 'Mother\'s Name');
$active_sheet->setCellValue('M1', 'Married/Single');
$active_sheet->setCellValue('N1', 'Spouse\'s name');
$active_sheet->setCellValue('O1', 'Permanent Address');
$active_sheet->setCellValue('P1', 'Permanent Address-City');
$active_sheet->setCellValue('Q1', 'Permanent Address-Country');
$active_sheet->setCellValue('R1', 'Permanent Address-State');
$active_sheet->setCellValue('S1', 'Permanent Address-Pin');
$active_sheet->setCellValue('T1', 'Corespondence Address');
$active_sheet->setCellValue('U1', 'Corespondence Address-City');
$active_sheet->setCellValue('V1', 'Corespondence Address-Country');
$active_sheet->setCellValue('W1', 'Corespondence Address-State');
$active_sheet->setCellValue('X1', 'Corespondence Address-Pin');
$active_sheet->setCellValue('Y1', 'Aadhaar Card No.');
$active_sheet->setCellValue('Z1', 'Mobile No.');
$active_sheet->setCellValue('AA1', 'Cataegory Input');
$active_sheet->setCellValue('AB1', 'Category Selected');
$active_sheet->setCellValue('AC1', 'SSC-University/Board');
$active_sheet->setCellValue('AD1', 'SSC-Month-Year');
$active_sheet->setCellValue('AE1', 'SSC-Specialization');
$active_sheet->setCellValue('AF1', 'SSC-Percentage');
$active_sheet->setCellValue('AG1', 'SSC-Class/Grade');
$active_sheet->setCellValue('AH1', 'SSC Document Location');
$active_sheet->setCellValue('AI1', 'HSC-University/Board');
$active_sheet->setCellValue('AJ1', 'HSC-Month-Year');
$active_sheet->setCellValue('AK1', 'HSC-Specialization');
$active_sheet->setCellValue('AL1', 'HSC-Percentage');
$active_sheet->setCellValue('AM1', 'HSC-Class/Grade');
$active_sheet->setCellValue('AN1', 'HSC Document Location');
$active_sheet->setCellValue('AO1', 'Bachelor\'s Degree-University/Board');
$active_sheet->setCellValue('AP1', 'Bachelor\'s Degree-Month-Year');
$active_sheet->setCellValue('AQ1', 'Bachelor\'s Degree-Specialization');
$active_sheet->setCellValue('AR1', 'Bachelor\'s Degree-Percentage');
$active_sheet->setCellValue('AS1', 'Bachelor\'s Degree-Class/Grade');
$active_sheet->setCellValue('AT1', 'Bachelor\'s Degree Document Location');
$active_sheet->setCellValue('AU1', 'Master\'s Degree-University/Board');
$active_sheet->setCellValue('AV1', 'Master\'s Degree-Month-Year');
$active_sheet->setCellValue('AW1', 'Master\'s Degree-Specialization');
$active_sheet->setCellValue('AX1', 'Master\'s Degree-Percentage');
$active_sheet->setCellValue('AY1', 'Master\'s Degree-Class/Grade');
$active_sheet->setCellValue('AZ1', 'Master\'s Degree Document Location');
$active_sheet->setCellValue('BA1', 'M.Phil-University/Board');
$active_sheet->setCellValue('BB1', 'M.Phi-Month-Year');
$active_sheet->setCellValue('BC1', 'M.Phi-Specialization');
$active_sheet->setCellValue('BD1', 'M.Phi-Percentage');
$active_sheet->setCellValue('BE1', 'M.Phi-Class/Grade');
$active_sheet->setCellValue('BF1', 'M.Phi Document Location');
$active_sheet->setCellValue('BG1', 'Pd.D.-University/Board');
$active_sheet->setCellValue('BH1', 'Pd.D.-Month-Year');
$active_sheet->setCellValue('BI1', 'Pd.D.-Specialization');
$active_sheet->setCellValue('BJ1', 'Pd.D.-Percentage');
$active_sheet->setCellValue('BK1', 'Pd.D.-Class/Grade');
$active_sheet->setCellValue('BL1', 'Pd.D. Document Location');
$active_sheet->setCellValue('BM1', 'NET/SLET/SET/JRF-University/Board');
$active_sheet->setCellValue('BN1', 'NET/SLET/SET/JRF-Month-Year');
$active_sheet->setCellValue('BO1', 'NET/SLET/SET/JRF-Specialization');
$active_sheet->setCellValue('BP1', 'NET/SLET/SET/JRF-Percentage');
$active_sheet->setCellValue('BQ1', 'NET/SLET/SET/JRF-Class/Grade');
$active_sheet->setCellValue('BR1', 'NET/SLET/SET/JRF Document Location');
$active_sheet->setCellValue('BS1', 'Teaching Experience-Institute 1');
$active_sheet->setCellValue('BT1', 'Teaching Experience-Position Held 1');
$active_sheet->setCellValue('BU1', 'Teaching Experience-Subject 1');
$active_sheet->setCellValue('BV1', 'Teaching Experience-Nature of Appointment 1');
$active_sheet->setCellValue('BW1', 'Teaching Experience-Year of Experience 1');
$active_sheet->setCellValue('BX1', 'Teaching Experience-Institute 2');
$active_sheet->setCellValue('BY1', 'Teaching Experience-Position Held 2');
$active_sheet->setCellValue('BZ1', 'Teaching Experience-Subject 2');
$active_sheet->setCellValue('CA1', 'Teaching Experience-Nature of Appointment 2');
$active_sheet->setCellValue('CB1', 'Teaching Experience-Year of Experience 2');
$active_sheet->setCellValue('CC1', 'Teaching Experience-Institute 3');
$active_sheet->setCellValue('CD1', 'Teaching Experience-Position Held 3');
$active_sheet->setCellValue('CE1', 'Teaching Experience-Subject 3');
$active_sheet->setCellValue('CF1', 'Teaching Experience-Nature of Appointment 3');
$active_sheet->setCellValue('CG1', 'Teaching Experience-Year of Experience 3');
$active_sheet->setCellValue('CH1', 'Industry Experience-Institute 1');
$active_sheet->setCellValue('CI1', 'Industry Experience-Position Held 1');
$active_sheet->setCellValue('CJ1', 'Industry Experience-Skill 1');
$active_sheet->setCellValue('CK1', 'Industry Experience-Nature of Appointment 1');
$active_sheet->setCellValue('CL1', 'Industry Experience-Year of Experience 1');
$active_sheet->setCellValue('CM1', 'Industry Experience-Institute 2');
$active_sheet->setCellValue('CN1', 'Industry Experience-Position Held 2');
$active_sheet->setCellValue('CO1', 'Industry Experience-Skill 2');
$active_sheet->setCellValue('CP1', 'Industry Experience-Nature of Appointment 2');
$active_sheet->setCellValue('CQ1', 'Industry Experience-Year of Experience 2');
$active_sheet->setCellValue('CR1', 'Industry Experience-Institute 3');
$active_sheet->setCellValue('CS1', 'Industry Experience-Position Held 3');
$active_sheet->setCellValue('CT1', 'Industry Experience-Skill 3');
$active_sheet->setCellValue('CU1', 'Industry Experience-Nature of Appointment 3');
$active_sheet->setCellValue('CV1', 'Industry Experience-Year of Experience 3');
$active_sheet->setCellValue('CW1', 'Research Work Supervised');
$active_sheet->setCellValue('CX1', 'Research Paper Published');
$active_sheet->setCellValue('CY1', 'Research Paper Presented');
$active_sheet->setCellValue('CZ1', 'Conferences/Seminars/WorkShops Attended');
$active_sheet->setCellValue('DA1', 'Awards/Patents/Fellowship');
$active_sheet->setCellValue('DB1', 'Refference Name 1');
$active_sheet->setCellValue('DC1', 'Refference Title 1');
$active_sheet->setCellValue('DD1', 'Refference Institution  1');
$active_sheet->setCellValue('DE1', 'Refference Ph. No. 1');
$active_sheet->setCellValue('DF1', 'Refference Name 2');
$active_sheet->setCellValue('DG1', 'Refference Title 2');
$active_sheet->setCellValue('DH1', 'Refference Institution  2');
$active_sheet->setCellValue('DI1', 'Refference Ph. No. 2');
$active_sheet->setCellValue('DJ1', 'Refference Name 3');
$active_sheet->setCellValue('DK1', 'Refference Title 3');
$active_sheet->setCellValue('DL1', 'Refference Institution  3');
$active_sheet->setCellValue('DM1', 'Refference Ph. No. 3');
$active_sheet->setCellValue('DN1', 'Image Location');
$active_sheet->setCellValue('DO1', 'Signature Location');
$active_sheet->setCellValue('DP1', 'Submition Date');
$active_sheet->setCellValue('DQ1', 'Submition Place');


$count = 2;

foreach ($result as $row) {
    $active_sheet->setCellValue('A' . $count, $row["id"]);
    $active_sheet->setCellValue('B' . $count, $row["reg_date"]);
    $active_sheet->setCellValue('C' . $count, $row["email"]);
    $active_sheet->setCellValue('D' . $count, $row["code"]);
    $active_sheet->setCellValue('E' . $count, $row["ref_avt"]);
    $active_sheet->setCellValue('F' . $count, $row["for_post"]);
    $active_sheet->setCellValue('G' . $count, $row["fullname"]);
    $active_sheet->setCellValue('H' . $count, $row["dob"]);
    $active_sheet->setCellValue('I' . $count, $row["age"]);
    $active_sheet->setCellValue('J' . $count, $row["sex"]);
    $active_sheet->setCellValue('K' . $count, $row["fname"]);
    $active_sheet->setCellValue('L' . $count, $row["mname"]);
    $active_sheet->setCellValue('M' . $count, $row["mstat"]);
    $active_sheet->setCellValue('N' . $count, $row["sname"]);
    $active_sheet->setCellValue('O' . $count, $row["pa_add"]);
    $active_sheet->setCellValue('P' . $count, $row["pa_city"]);
    $active_sheet->setCellValue('Q' . $count, $row["pa_count"]);
    $active_sheet->setCellValue('R' . $count, $row["pa_state"]);
    $active_sheet->setCellValue('S' . $count, $row["pa_pin"]);
    $active_sheet->setCellValue('T' . $count, $row["ca_add"]);
    $active_sheet->setCellValue('U' . $count, $row["ca_city"]);
    $active_sheet->setCellValue('V' . $count, $row["ca_count"]);
    $active_sheet->setCellValue('W' . $count, $row["ca_state"]);
    $active_sheet->setCellValue('X' . $count, $row["ca_pin"]);
    $active_sheet->setCellValue('Y' . $count, $row["aadr"]);
    $active_sheet->setCellValue('Z' . $count, $row["mob"]);
    $active_sheet->setCellValue('AA' . $count, $row["cat"]);
    $active_sheet->setCellValue('AB' . $count, $row["cat_s"]);
    $active_sheet->setCellValue('AC' . $count, $row["ssc_org"]);
    $active_sheet->setCellValue('AD' . $count, $row["ssc_my"]);
    $active_sheet->setCellValue('AE' . $count, $row["ssc_speci"]);
    $active_sheet->setCellValue('AF' . $count, $row["ssc_prcnt"]);
    $active_sheet->setCellValue('AG' . $count, $row["ssc_grade"]);
    $active_sheet->setCellValue('AH' . $count, $row["ssc_docl"]);
    $active_sheet->setCellValue('AI' . $count, $row["hsc_org"]);
    $active_sheet->setCellValue('AJ' . $count, $row["hsc_my"]);
    $active_sheet->setCellValue('AK' . $count, $row["hsc_speci"]);
    $active_sheet->setCellValue('AL' . $count, $row["hsc_prcnt"]);
    $active_sheet->setCellValue('AM' . $count, $row["hsc_grade"]);
    $active_sheet->setCellValue('AN' . $count, $row["hsc_docl"]);
    $active_sheet->setCellValue('AO' . $count, $row["bd_org"]);
    $active_sheet->setCellValue('AP' . $count, $row["bd_my"]);
    $active_sheet->setCellValue('AQ' . $count, $row["bd_speci"]);
    $active_sheet->setCellValue('AR' . $count, $row["bd_prcnt"]);
    $active_sheet->setCellValue('AS' . $count, $row["bd_grade"]);
    $active_sheet->setCellValue('AT' . $count, $row["bd_docl"]);
    $active_sheet->setCellValue('AU' . $count, $row["md_org"]);
    $active_sheet->setCellValue('AV' . $count, $row["md_my"]);
    $active_sheet->setCellValue('AW' . $count, $row["md_speci"]);
    $active_sheet->setCellValue('AX' . $count, $row["md_prcnt"]);
    $active_sheet->setCellValue('AY' . $count, $row["md_grade"]);
    $active_sheet->setCellValue('AZ' . $count, $row["md_docl"]);
    $active_sheet->setCellValue('BA' . $count, $row["mph_org"]);
    $active_sheet->setCellValue('BB' . $count, $row["mph_my"]);
    $active_sheet->setCellValue('BC' . $count, $row["mph_speci"]);
    $active_sheet->setCellValue('BD' . $count, $row["mph_prcnt"]);
    $active_sheet->setCellValue('BE' . $count, $row["mph_grade"]);
    $active_sheet->setCellValue('BF' . $count, $row["mph_docl"]);
    $active_sheet->setCellValue('BG' . $count, $row["phd_org"]);
    $active_sheet->setCellValue('BH' . $count, $row["phd_my"]);
    $active_sheet->setCellValue('BI' . $count, $row["phd_speci"]);
    $active_sheet->setCellValue('BJ' . $count, $row["phd_prcnt"]);
    $active_sheet->setCellValue('BK' . $count, $row["phd_grade"]);
    $active_sheet->setCellValue('BL' . $count, $row["phd_docl"]);
    $active_sheet->setCellValue('BM' . $count, $row["exm_org"]);
    $active_sheet->setCellValue('BN' . $count, $row["exm_my"]);
    $active_sheet->setCellValue('BO' . $count, $row["exm_speci"]);
    $active_sheet->setCellValue('BP' . $count, $row["exm_prcnt"]);
    $active_sheet->setCellValue('BQ' . $count, $row["exm_grade"]);
    $active_sheet->setCellValue('BR' . $count, $row["exm_docl"]);
    $active_sheet->setCellValue('BS' . $count, $row["te1_in"]);
    $active_sheet->setCellValue('BT' . $count, $row["te1_pst"]);
    $active_sheet->setCellValue('BU' . $count, $row["te1_sub"]);
    $active_sheet->setCellValue('BV' . $count, $row["te1_napp"]);
    $active_sheet->setCellValue('BW' . $count, $row["te1_yexp"]);
    $active_sheet->setCellValue('BX' . $count, $row["te2_in"]);
    $active_sheet->setCellValue('BY' . $count, $row["te2_pst"]);
    $active_sheet->setCellValue('BZ' . $count, $row["te2_sub"]);
    $active_sheet->setCellValue('CA' . $count, $row["te2_napp"]);
    $active_sheet->setCellValue('CB' . $count, $row["te2_yexp"]);
    $active_sheet->setCellValue('CC' . $count, $row["te3_in"]);
    $active_sheet->setCellValue('CD' . $count, $row["te3_pst"]);
    $active_sheet->setCellValue('CE' . $count, $row["te3_sub"]);
    $active_sheet->setCellValue('CF' . $count, $row["te3_napp"]);
    $active_sheet->setCellValue('CG' . $count, $row["te3_yexp"]);
    $active_sheet->setCellValue('CH' . $count, $row["ie1_in"]);
    $active_sheet->setCellValue('CI' . $count, $row["ie1_pst"]);
    $active_sheet->setCellValue('CJ' . $count, $row["ie1_sub"]);
    $active_sheet->setCellValue('CK' . $count, $row["ie1_napp"]);
    $active_sheet->setCellValue('CL' . $count, $row["ie1_yexp"]);
    $active_sheet->setCellValue('CM' . $count, $row["ie2_in"]);
    $active_sheet->setCellValue('CN' . $count, $row["ie2_pst"]);
    $active_sheet->setCellValue('CO' . $count, $row["ie2_sub"]);
    $active_sheet->setCellValue('CP' . $count, $row["ie2_napp"]);
    $active_sheet->setCellValue('CQ' . $count, $row["ie2_yexp"]);
    $active_sheet->setCellValue('CR' . $count, $row["ie3_in"]);
    $active_sheet->setCellValue('CS' . $count, $row["ie3_pst"]);
    $active_sheet->setCellValue('CT' . $count, $row["ie3_sub"]);
    $active_sheet->setCellValue('CU' . $count, $row["ie3_napp"]);
    $active_sheet->setCellValue('CV' . $count, $row["ie3_yexp"]);
    $active_sheet->setCellValue('CW' . $count, $row["rw_sup"]);
    $active_sheet->setCellValue('CX' . $count, $row["rpap_pre"]);
    $active_sheet->setCellValue('CY' . $count, $row["rpap_pub"]);
    $active_sheet->setCellValue('CZ' . $count, $row["meet_attnd"]);
    $active_sheet->setCellValue('DA' . $count, $row["awards"]);
    $active_sheet->setCellValue('DB' . $count, $row["rf1_name"]);
    $active_sheet->setCellValue('DC' . $count, $row["rf1_title"]);
    $active_sheet->setCellValue('DD' . $count, $row["rf1_inst"]);
    $active_sheet->setCellValue('DE' . $count, $row["rf1_phn"]);
    $active_sheet->setCellValue('DF' . $count, $row["rf2_name"]);
    $active_sheet->setCellValue('DG' . $count, $row["rf2_title"]);
    $active_sheet->setCellValue('DH' . $count, $row["rf2_inst"]);
    $active_sheet->setCellValue('DI' . $count, $row["rf2_phn"]);
    $active_sheet->setCellValue('DJ' . $count, $row["rf3_name"]);
    $active_sheet->setCellValue('DK' . $count, $row["rf3_title"]);
    $active_sheet->setCellValue('DL' . $count, $row["rf3_inst"]);
    $active_sheet->setCellValue('DM' . $count, $row["rf3_phn"]);
    $active_sheet->setCellValue('DN' . $count, $row["img_loc"]);
    $active_sheet->setCellValue('DO' . $count, $row["sig_loc"]);
    $active_sheet->setCellValue('DP' . $count, $row["s_date"]);
    $active_sheet->setCellValue('DQ' . $count, $row["s_place"]);

    $count = $count + 1;
}

$writer = new Xlsx($file);
$writer->save('../sau_uploads/record.xlsx');
//echo "real:EXCEL ".(memory_get_peak_usage(true)/1024/1024)." MiB\n\n";

$write = null;
$file = null;
$active_sheet = null;
gc_collect_cycles();

////echo "real:EXCEL after ".(memory_get_usage(true)/1024/1024)." MiB\n\n";

if (send_mailUser($email, $firname, $adminemail)) {

    // echo "noo";

    Header("location:thankyou.php");
}
gc_disable();
function send_mailUser($email, $firname, $adminemail)
{
    $filename = $firname . 'Application.pdf';
    $path = '../sau_uploads/' . $firname;
    $file = $path . "/" . $filename;
    
    $subject = 'Thank You For Completing Your Application.';
    $message = 'Thanking You for completing your Application.We will Inform You Shortly About The further Procedure. If any query Please contact Admin. Admin Email.  ' . $adminemail;

    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: SAU OFFICE <test@sau.edu.in>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";
    $mailinfo = mail($email, $subject, $body, $headers);
    //echo "real:Mail ".(memory_get_peak_usage(true)/1024/1024)." MiB\n\n";
    $content = $body = null;
    gc_collect_cycles();
    //echo "real:Mail After ".(memory_get_peak_usage(true)/1024/1024)." MiB\n\n";
    return $mailinfo;
}

send_mailAdmin($adminemail, $fullname, $firname, $email, $reg_date, $s_date, $s_place);

function send_mailAdmin($adminemail, $fullname, $firname, $email, $reg_date, $s_date, $s_place)
{

    //$PDFfilename = $firname . 'Application.pdf';
    $xlsfilename = 'record.xlsx';
    $path = '../sau_uploads/' . $firname;
    $pathxls = '../sau_uploads';
    // $PDFfile = $path . "/" . $PDFfilename;
    $xlsfile = $pathxls . "/" . $xlsfilename;

    ///Scan For all submited files.
    $files = (scandir($path));


    $mailto = 'mail@mail.com';
    $subject = 'Submition of Application by : ' . $email;
    $message = 'Applicant ' . $fullname . ' with email:' . $email . ' has Submited the Application form. All  documents that was submited.';

    //$PDFcontent = file_get_contents($PDFfile);
    //$PDFcontent = chunk_split(base64_encode($PDFcontent));

    $xlscontent = file_get_contents($xlsfile);
    $xlscontent = chunk_split(base64_encode($xlscontent));

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: SAU OFFICE <test@sau.edu.in>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;


    for ($a = 2; $a < sizeof($files); $a++) {


        $PDFfile = $path . "/" . $files[$a];

        $content = file_get_contents($PDFfile);
        $content = chunk_split(base64_encode($content));

        $body .= "--" . $separator . $eol;
        $body .= "Content-Type: application/octet-stream; name=\"" . $files[$a] . "\"" . $eol;
        $body .= "Content-Transfer-Encoding: base64" . $eol;
        $body .= "Content-Disposition: attachment" . $eol;
        $body .= $content . $eol;
        $PDFfile = "";
        $content = "";
    }
    // attachment




    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $xlsfilename . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $xlscontent . $eol;
    $body .= "--" . $separator . "--";
    return mail($adminemail, $subject, $body, $headers);
}


?>
<?php

require 'vendor/autoload.php';
$p_info = $ref_avt = $for_post = $fullname = $dob = $age = $sex = $fname = $mname = $mstat = $sname = $pa_add = $pa_city = $pa_count = $pa_state = $pa_pin = $ca_add = $ca_city = $ca_count = $ca_state = $ca_pin = $aadr = $mob =
    $cat = $cat_s = $ssc_org = $ssc_my = $ssc_speci = $ssc_prcnt = $ssc_grade = $ssc_docl = $hsc_org = $hsc_my = $hsc_speci = $hsc_prcnt = $hsc_grade = $hsc_docl = $bd_org = $bd_my = $bd_speci = $bd_prcnt =
    $bd_grade = $bd_docl = $md_org = $md_my = $md_speci = $md_prcnt = $md_grade = $md_docl = $mph_org = $mph_my = $mph_speci = $mph_prcnt = $mph_grade = $mph_docl = $phd_org = $phd_my = $phd_speci = $phd_prcnt = $phd_grade =
    $exm_org = $exm_my = $exm_speci = $exm_prcnt = $exm_grade = $exm_docl = $te1_in = $te1_pst = $te1_sub = $te1_napp = $te1_yexp = $te2_in = $te2_pst = $te2_sub = $te2_napp = $te2_yexp = $te3_in = $te3_pst =
    $te3_sub = $te3_napp = $te3_yexp = $ie1_in = $ie1_pst = $ie1_sub = $ie1_napp = $ie1_yexp = $ie2_in = $ie2_pst = $ie2_sub = $ie2_napp = $ie2_yexp = $ie3_in = $ie3_pst = $ie3_sub = $ie3_napp = $ie3_yexp =
    $rw_sup = $rpap_pre = $rpap_pub = $meet_attnd = $awards = $rf1_name = $rf1_title = $rf1_inst = $rf1_phn = $rf2_name = $rf2_title = $rf2_inst = $rf2_phn = $rf3_name = $rf3_title = $rf3_inst = $rf3_phn =
    $img_loc = $sig_loc = $s_date = $s_place = "";







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
                    <img id="logo" src="logo.png" width="80px" style="position: absolute;" />
                </div>
                <div class="topic" style="
              position: absolute;
              text-align: center;
              left: 30;
              top: 36px; ">
                    <h1 style="margin: 0px; font-size: 13pt;">
                        Organization Name
                    </h1>
                    <p id="act-id" style="margin: 0px; font-size: 11pt;">
                        ( Maharastra 2021 ))<br />Pune 411067
                    </p>
                    <h3 style="font-size: 10pt; margin-top: 25px;">
                        JOB APPLICATION FORM
                    </h3>
                </div>
                <div class="photo" style="position: absolute; right: 42; top: 86;">
                    <img id="face-img" src="photo.png" width="130px" height="146px" alt="no img" style="border: 0.5px solid;" />
                </div>

                <div class="to" style="position: absolute; left: 30; top: 198px;">
                    <p id="to-id">
                        To,
                        <br />
                        The Registrar,
                        <br />
                        Organization Name
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
                            <p style="margin: 5px 10px;">'.$ref_avt.'</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="130">
                            <p style="margin: 5px 10px;">Application for the post of</p>
                        </td>
                        <td>
                            <p style="margin: 5px 10px;">'.$for_post.'</p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="name-div" style="position: relative; top: 200;">
                <p><strong>NAME IN FULL</strong>&nbsp;&nbsp;&nbsp;'.$fullname.'</p>
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
                    '.$dob.'
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
                    '.$age.'
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
                    '.$sex.'
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
                    '.$mstat.'
                </p>
            </div>

            <div class="fam-name" style="position: relative; top: 260;">
                <div class="name-div" style="width: 100%; position:absolute;">
                    <p>Father's name&nbsp;&nbsp;&nbsp;&nbsp;'.$fname.'</p>
                </div>
                <div class="name-div" style="width: 100%; position:absolute;top:25">
                    <p>Mother's name&nbsp;&nbsp;&nbsp;&nbsp;'.$mname.'</p>
                </div>
                <div class="name-div" style="width: 100%; position:absolute;top:50;">
                    <p>Spouse's name&nbsp;&nbsp;&nbsp;'.$sname.'</p>
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
                                    '.$pa_add.'
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="padding: 4.5px;margin: 0px 10px;">
                                    City/Town:&nbsp;&nbsp;'.$pa_city.'
                                </p>
                            </td>
                            <td>
                                <p style="margin: 0px 10px;">State:&nbsp;&nbsp;'.$pa_state.'</p>
                            </td>
                            <td>
                                <p style="margin: 0px 10px;">Country:&nbsp;&nbsp;'.$pa_count.'</p>
                            </td>
                            <td>
                                <p style="margin: 0px 10px;">Pin:&nbsp;&nbsp;'.$pa_pin.'</p>
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
                                    '.$ca_add.'
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="padding: 4.5px;margin: 0px 10px;">
                                    City/Town:&nbsp;&nbsp;'.$ca_city.'
                                </p>
                            </td>
                            <td>
                                <p style="margin: 5px 10px;">State:&nbsp;&nbsp;'.$ca_state.'</p>
                            </td>
                            <td>
                                <p style="margin: 5px 10px;">Country:&nbsp;&nbsp;'.$ca_count.'</p>
                            </td>
                            <td>
                                <p style="margin: 5px 10px;">Pin:&nbsp;&nbsp;'.$ca_pin.'</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
            </div>

            <div class="con" style="position: relative;page-break-inside: avoid;top:345;">
                <div class="name-div" style="position: absolute;top:0;">
                    <p style="margin:5px 0px"><strong>Aadhaar card no.</strong>&nbsp;&nbsp;&nbsp;'.$aadhr.'</p>
                </div>
                <div class="name-div" style="position: absolute;top:30;">
                    <p style="margin:5px 0px"><strong>Email</strong>&nbsp;&nbsp;&nbsp;'.$email.'</p>
                </div>
                <div class="name-div" style="position: absolute;top:60;">
                    <p style="margin:5px 0px"><strong>Mobile</strong>&nbsp;&nbsp;&nbsp;'.$mob.'</p>
                </div>
                <div class="name-div" style="position: absolute;top:90;">
                    <p style="margin:5px 0px"><strong>Category</strong>&nbsp;&nbsp;&nbsp;'.$cat.'</p>
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

            <div class="exp1" style="position: relative;top: 210;font-size:9pt;">
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
                                <p id="teac-insti1" name="teac-insti1">ddd
                                    <?php echo $te1_in; ?>
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
                                <p id="teac-insti2" name="teac-insti2">ddd<?php echo $te2_in; ?></p>
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
                                <p id="teac-insti3" name="teac-insti3">ddd<?php echo $te3_in; ?></p>
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
                                <p id="ind-insti1" name="ind-insti1">dfd<?php echo $ie1_in; ?></p>
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
                                <p id="ind-insti2" name="ind-insti2">fdf<?php echo $ie2_in; ?></p>
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
                                <p id="ind-insti3" name="ind-insti3">dfd<?php echo $ie3_in; ?></p>
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
                                <p id="ref-name1" name="ref-name1">aa<?php echo $rf1_name; ?></p>
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
                                <p id="ref-name2" name="ref-name2">aa<?php echo $rf2_name; ?></p>
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
                                <p id="ref-name3" name="ref-name3">aa<?php echo $rf3_name; ?></p>
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
              "><?php echo $fullname; ?></strong>_declare that the information <br />
                    provided by me on the above mentioned form is true and correct to
                    the best of my knowledge and belief.
                </p>
            </div>

            <div class="signa" style="position:relative;top:101">
                <p style="position: absolute;top:15;"> SIGNATURE -</p>

                <img src="sig.jpg" style="width:200px;height:50px;position: absolute;top:0;left:70;" />
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
file_put_contents('../Application.pdf', $output);

?>
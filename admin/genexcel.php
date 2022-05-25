

<?php
require '../lib/phpexcel/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function genexcel($result)
{



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
    $active_sheet->setCellValue('T1', 'Correspondence Address');
    $active_sheet->setCellValue('U1', 'Correspondence Address-City');
    $active_sheet->setCellValue('V1', 'Correspondence Address-Country');
    $active_sheet->setCellValue('W1', 'Correspondence Address-State');
    $active_sheet->setCellValue('X1', 'Correspondence Address-Pin');
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
    return 1;
}
?>
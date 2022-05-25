<?php

if (!session_id()) {

    session_start();
}
ob_start();


if (isset($_SESSION['email']) && $_SESSION['pass'] == "Spicer*#1204") {
    //echo '<h1 style="color:green;margin:100px auto;width:100%;text-align:centre"><strong>..........Preparing files.</strong></h1><br>';
} else {
    header("location:index.php", true);
}

include '../include/config.php';
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$can = $comp = 0;
$db->select_db("$dbname");
$result = mysqli_query($db, "SELECT * FROM regis_candidate ORDER BY id ASC");
$can = mysqli_num_rows($result);
$resC = mysqli_query($db, "SELECT * FROM regis_candidate where complete='true' ORDER BY id ASC");
if ($resC != null)
    $comp = mysqli_num_rows($resC);



$email = $code = $phn = $aadr = "";

include 'genexcel.php';
include 'mail.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['res_code'])) {
        $email = $_POST['email'];
        $code = $_POST['code'];
        if (!mysqli_query($db, "UPDATE regis_candidate SET code='$code' where email ='$email'")) {
            echo '<script>alert("The process did not execute");</script>';
        } else {
            header("Refresh:0");
        }
    }
    if (isset($_POST['allow_edit'])) {
        $email = $_POST['email'];
        if (!mysqli_query($db, "UPDATE regis_candidate SET complete='' where email ='$email'")) {
            echo '<script>alert("The process did not execute");</script>';
        } else {
            header("Refresh:0");
        }
    }
    if (isset($_POST['edit_aadr'])) {
        $email = $_POST['email'];
        $phn = $_POST['phn'];
        $aadr = $_POST['aadr'];
        if (!mysqli_query($db, "UPDATE regis_candidate SET aadr='$aadr' mob='$phn' where email ='$email'")) {
            echo '<script>alert("The process did not execute");</script>';
        } else {
            header("Refresh:0");
        }
    }
    if (isset($_POST['res_email'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['comp'] = "yes";
        header("location:../layout/process.php", true);
        exit;
    }
    if (isset($_POST['edit'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['comp'] = "no";
        header("location:../layout/r_per.php", true);
        exit;
    }

    if (isset($_POST['fx_phd'])) {
        header("location:fix_phd.php", true);
        exit;
    }


    if (isset($_POST['gen_pdf'])) {

        
        header("location:fix_pdf.php", true);exit;
    }

    if (isset($_POST['up_excel'])) {


        if (genexcel($resC)) {
            if (isset($_POST['c-mail'])) {
                mailAdmin_Exl($adminemail);
            }
            if (isset($_POST['c-down'])) {

                header('Content-Description: File Transfer');
                header('Content-Type: application/force-download');
                header("Content-Disposition: attachment; filename=\"" . basename("../sau_uploads/record.xlsx") . "\";");
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize("../sau_uploads/record.xlsx"));
                ob_clean();
                flush();
                readfile("../sau_uploads/record.xlsx"); //showing the path to the server where the file is to be download
                exit;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="img/x-icon" href="../img/favicon.ico" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet" />
    <link href="style.css?version=7" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-2.2.2.js"></script>
    <script type="text/javascript" src="script.js?version=7"></script>
</head>

<body>
    <div class="site" align="center">
        <h2>
            Admin Panlel
        </h2>


        <div class="details" align="left">
            <span id="ent">Entries</span>
            <span id="file">Files Created</span>
            <br>
            <div class="table">
                <?php

                $all_property = array();  //declare an array for saving property

                //showing property
                echo '<table class="data-table"> <tr class="data-heading">';  //initialize table tag
                while ($property = mysqli_fetch_field($result)) {
                    echo '<td style="
                font-size: 20px;
                color: #660f3f"><strong>' . $property->name . '</strong></td>';  //get field name for header
                    array_push($all_property, $property->name);  //save those to array
                }
                echo '</tr>'; //end tr tag

                //showing all data
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";

                    foreach ($all_property as $item) {
                        echo '<td>' . $row[$item] . '</td>'; //get items using property value
                    }
                    echo '</tr>';

                    // $can+=1;
                }
                echo "</table>";
                //echo $can;


                ?>
            </div>
            <div id="files">
                <?php
                function listFolderFiles($dir)
                {
                    $ffs = scandir($dir);

                    unset($ffs[array_search('.', $ffs, true)]);
                    unset($ffs[array_search('..', $ffs, true)]);

                    // prevent empty ordered elements
                    if (count($ffs) < 1)
                        return;

                    echo '<ol style="margin:5px 10px;padding:10px 30px;">';
                    foreach ($ffs as $ff) {
                        echo '<li>' . $ff;
                        if (is_dir($dir . '/' . $ff)) listFolderFiles($dir . '/' . $ff);
                        echo '</li>';
                    }
                    echo '</ol>';
                }

                listFolderFiles('../sau_uploads'); ?>

            </div>

        </div>

        <div class="side" align="left">
            <h4 style="color: rgb(0, 0, 0);">OPTIONS</h4>
            <ul id="option">
                <li><a id="res_code" class="op">Reset Code.</a></li>
                <li><a id="allow_edit" class="op">Allow Applicant to edit.</a></li>
                <li><a id="edit_aadr" class="op">Edit Phn. No. and Aadhaar.</a></li>
                <li><a id="res_email" class="op">Resend Emails.</a></li>
                <li><a id="edit" class="op">Edit the form for Applicant.</a></li>
                <li><a id="fx_phd" class="op">Fix PhD-Organisation.</a></li>
                <li><a id="gen_pdf" class="op">Generate Corrected PDF.</a></li>
                <li><a id="up_excel" class="op">Update Excel and Download.</a></li>
                <li><a id="exit" class="op">Exit</a></li>
            </ul>
            <hr />
            <h4 style="color: rgb(0, 0, 0);">STATUS</h4>
            <div style="font-size: 14px;padding:3px 10px;background-color: rgb(121, 84, 221);">
                <p style="color: rgb(66, 66, 66);">Candidate Applied&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $can; ?></p>
                <p style="color: rgb(61, 61, 61);">Cadidate Completed&nbsp;&nbsp;: <?php echo $comp; ?></p>
            </div>
        </div>

        <div class="popup" id="popup">
            <h4 id="h">Hello this is popup</h4>
            <button id="close"><strong> X </strong></button>
            <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <div class="ele"></div>
            </form>
        </div>

        <div class="popup" id="popup2">
            <h4 id="h">Hello this is popup</h4>
        </div>


        <footer>
            <p style="
                font-size: 11px;
                width: 100%;
                text-align: right;
                padding-right: 20px;
              ">
                Created By @
                <a style="color: rgb(21, 116, 240);" href="https://surenhembram.com">Suren Hembram</a>
            </p>
        </footer>
    </div>
</body>

</html>


<?php
mysqli_close($db);
ob_end_flush();
?>
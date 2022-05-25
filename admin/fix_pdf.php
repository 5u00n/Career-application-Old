<?php

if (!session_id()) {

    session_start();
}
//ob_start();


if (isset($_SESSION['email']) && $_SESSION['pass'] == "Spicer*#1204") {
    //echo '<h1 style="color:green;margin:100px auto;width:100%;text-align:centre"><strong>..........Preparing files.</strong></h1><br>';
} else {
    header("location:index.php", true);
}

include '../include/config.php';
include 'genpdf.php';
include 'mail.php';
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$can = $comp = 0;
$db->select_db("$dbname");
$result = mysqli_query($db, "SELECT * FROM regis_candidate");
$can = mysqli_num_rows($result);
$resC = mysqli_query($db, "SELECT * FROM regis_candidate where complete='true' ORDER BY id ASC");
if ($resC != null)
    $comp = mysqli_num_rows($resC);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['no-mail'])) {
        header("location:panel.php",true);
        exit;
    }
    if (isset($_POST['mail'])) {
        if(mailAdmin_AllPDF($adminemail)){
            header("location:panel.php",true);
        exit;
        }
    }
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <title>PDF CORRECTION</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="img/x-icon" href="../img/favicon.ico" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-2.2.2.js"></script>
</head>

<body style="width: 100%;margin:0px">
    <div class="site-fx" align="center" style="width: 1280;">

        <h2>CORRECTION OF All PDF FILES.</h2>
        <br>
        <br>
        <br>

        <label for="file" style="font-size: 20px;">Generating PDF:</label>
        <br>
        <br>
        <br>
        <br>
        <div id="progress" style="width:500px;border:1px solid #ccc;" align="left"></div>
        <!-- Progress information -->
        <div id="information"></div>
        <br>
        <br>

        Processed PDFs:&nbsp;&nbsp;<label id="lbl" for="file" style="font-size: 20px;"></label>&nbsp;&nbsp;Files.<br>
        <br>
        <label for="file" style="font-size: 20px;">Total candidate submitted:&nbsp;&nbsp;<?php echo $comp; ?></label>&nbsp;&nbsp;Candidates.<br>

        <?php
        $prcnt = 0;
        $cnt = 0;
        set_time_limit(300);

        // Total processes
        $total = 10;

        // Loop through process
        foreach ($resC as $row) {
            // Calculate the percentation

            if (genPdf($row)) {
                $cnt++;
                $percent = intval($cnt / $comp * 100) . "%";
                

                // Javascript for updating the progress bar and information
                echo '<script language="javascript">
             document.getElementById("progress").innerHTML="<div style=\"width:' . $percent . ';background-color:#337299;height:30px;\">&nbsp;</div>";
             document.getElementById("information").innerHTML="' . $cnt . ' row(s) processed.";
             document.getElementById("lbl").innerHTML="' . $cnt . '";
              </script>';

                // This is for the buffer achieve the minimum size in order to flush data
                echo str_repeat(' ', 1024 * 64);

                // Send output to browser immediately
                flush();

                // Sleep one second so we can see the delay
            }
        }

        // Tell user that the process is completed
        echo '<script language="javascript">document.getElementById("information").innerHTML="Process completed"</script>';




        ?>
        <br>
        <br><br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input style="height:30px;margin:10px;font-weight:bold" type="submit" name="no-mail" value="Dont Send Files">
            <input style="height:30px;margin:10px;font-weight:bold" type="submit" name="mail" value="Send All Files to Admin">
        </form>
    </div>
</body>

</html>
<?php
mysqli_close($db);
//ob_end_flush();
?>
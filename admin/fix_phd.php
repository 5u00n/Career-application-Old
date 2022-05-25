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
$db->select_db("$dbname");
$can = 0;
$result = mysqli_query($db, "SELECT phd_docl,phd_org,email,fullname FROM regis_candidate WHERE phd_docl!='' and phd_org = '';");
if ($result)
    $can = mysqli_num_rows($result);
$row_c = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['sub'])) {
        if(isset($_POST['phd_org'])){
           $db->query("UPDATE regis_candidate SET phd_org='".$_POST['phd_org']."' where email='".$_POST['email']."';");
        }
        
    }
    if (isset($_POST['go-back'])) {
        echo "<script>location='panel.php'</script>";
        exit;
    }
    

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fixing PhD Data</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="img/x-icon" href="../img/favicon.ico" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-2.2.2.js"></script>
</head>
<style>
    body {
        width: 100%;
    }


    #site {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 40px 600px 40px;
    }

    #file {
        grid-row: 1;
        grid-column: 1;
        grid-column-end: 3;
        width: 700px;
        height: 40px;
        margin: 0px auto;
    }

    #prt {
        grid-row: 1;
        grid-column: 1;
        grid-column-end: 3;
        margin: 11px;
    }

    #edit {
        grid-row: 2;
        grid-column: 1;

    }

    #view {

        grid-row: 2;
        grid-column: 2;
    }

    #sub,#nxt,#go-back {
        width: 200px;
        height: 40px;
        margin: 0px auto;
    }

    .cmp{
        grid-row: 3;
        grid-column: 1;
        grid-column-end: 3;
    }

    .tabs {
        margin: 20px;
    }
</style>

<body style="width: 100%;margin:0px">
    <div class="site-fx" align="center" style="width: 1280;">

        <h2>Correcting the PhD Section.</h2>
        <p>Candidate with issues on phd Organisation Input:&nbsp;&nbsp;<?php echo $can; ?>&nbsp;&nbsp;Users</p>
        <?php
        ?>

        <script>
            window.onload = next;
            var nums = 0;

            function next() {
                /* if (str.length == 0) {
                     document.getElementById("name").innerHTML = "";
                     return;
                 } else {*/


                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("site").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "data.php?q=" + nums, true);
                xmlhttp.send();
                nums++;

            }
        </script>
        <form id="site" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" align="center">
        </form>
    </div>
</body>

</html>
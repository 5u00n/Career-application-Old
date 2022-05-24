<?php include '../include/config.php'; ?>

<?php
$email = "";
session_start();
if (isset($_SESSION['email']) && $_SESSION['comp'] == "yes") {
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
$fullname = $firname = $reg_date = $s_date = $s_place = "";
$row = getProgress($email, $db);
$fullname = $row['fullname'];
$name_mid = explode(" ", $fullname);
$firname = $name_mid[0];
$reg_date = $row['reg_date'];
$s_date = $row['s_date'];
$s_place = $row['s_place'];


function getProgress($email, $db)
{
  $sql = "SELECT fullname,sig_loc,img_loc,s_date,s_place,reg_date FROM regis_candidate where email ='$email'";
  $result = $db->query($sql);
  //echo $result;

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      return $row;
    }
  }
}




?>




<?php




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> JOB APPLICATION</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="../css/style1.css" rel="stylesheet" />
  <style>

  </style>
</head>

<body>
  <div class="site"  style="font-family:calibri">
    <header>
      <img src="../img/logo.png" />
      <h1>
        Organization Name
      </h1>
      <p>( Maharastra 2021 ))<br />Pune 411067</p>
      <h3>JOB APPLICATION FORM</h3>
    </header>

    <div class="sub-header">
      <span><strong>Thank You :</strong><?php echo $_SESSION['email']; ?></span>
      <h4>DONE</h4>
      <a href="logout.php">Logout</a>
    </div>
    <form method="post" action="logout.php" name="register" class="main-form" >

    <p style="margin: 20px auto;font-size:28px;text-align:center;"><strong>Thank You For completing The Form.</strong></p>
    <p style="margin: 20px auto;font-size:large;text-align:center;"><strong>Please Check your mail for the document you Application.</strong></p>
    <p style="margin: 20px auto;font-size:large;text-align:center;"><strong>Keep a copy for your reference.</strong></p>
    <div class="group-nav">
        <button class="button-basic" id="submit" name="submit" type="submit" value="Submit">
          <strong>LOGOUT</strong>
        </button>
      </div>
    </form>

    <footer>
      <p style="font-size: 11px;width: 100%;text-align: right;">Created By @ <a style="color: rgb(21, 116, 240);" href="https://surenhembram.com">Suren Hembram</a></p>
    </footer>

  </div>
</body>

</html>
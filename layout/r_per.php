<?php 
if ( ! session_id() ) {

session_start();

}

ob_start();
 ?>

<?php
include '../include/config.php';
$email = "";

if (isset($_SESSION['email']) && $_SESSION['comp'] == "no") {
  $email = $_SESSION['email'];
} else {
    header("location:../",true);
  //echo "<script>location='../'</script>";
  exit;
}

?>

<?php
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$db->select_db("$dbname");
?>

<?php
$refavt = $for_post = $name = $dob_d = $dob_m = $dob_y = $dob = $age = $sex =
  $fname = $mname = $cat_s = $cat = $c_married = $sname = $aadr = $mob =
  $pa_add = $pa_city = $pa_count = $pa_state = $pa_pin = $ca_add = $ca_city =
  $ca_count = $ca_state = $ca_pin = "";
$copr_padd = 0;
$page = 2;
$p_info = checkProgress($email, $db);
if (((int) $p_info - 2) >= 0) {
  $row = getProgress($email, $db);
  $refavt = $row["ref_avt"];
  $for_post = $row["for_post"];
  $name = $row["fullname"];
  $dob = $row["dob"];
  if ($dob != null) {
    $dobe = explode("/", $dob);
    $dob_d = $dobe[0];
    $dob_m = $dobe[1];
    $dob_y = $dobe[2];
  }
  $age = $row["age"];
  $sex = $row["sex"];
  $fname = $row["fname"];
  $mname = $row["mname"];
  $sname = $row["sname"];
  $c_married = $row["mstat"];
  $cat_s = $row["cat_s"];
  $cat = $row["cat"];
  $aadr = $row["aadr"];
  $mob = $row["mob"];
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
  if ($pa_add == $ca_add && $pa_city == $ca_city && $pa_count == $ca_count && $pa_state == $ca_state && $pa_pin == $ca_pin) {
    $copr_padd = 1;
  }
} else {
  $p_info = 2;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $refavt = $_POST['ref-avt'];
  $for_post = $_POST['for-post'];
  $name = $_POST['name'];
  $dob_d = $_POST['dob-d'];
  $dob_m = $_POST['dob-m'];
  $dob_y = $_POST['dob-y'];
  $dob = $dob_d . "/" . $dob_m . "/" . $dob_y;
  //$age=$_POST['age'];
  $sex = $_POST['sex'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];

  $cat_s = $_POST['cat_s'];
  if (strcmp("Other", $cat_s) == 0) {
    $cat = $_POST['cat'];
  }
  //$c_married=$_POST['c-married'];
  $sname = $_POST['sname'];
  if ($sname) {
    $c_married = "Married";
  } else {
    $c_married = "Single";
  }

  $dateDif = (int) date("d") - (int) $dob_d;
  $monthDif = (int) date("m") - (int) $dob_m;
  $yearDif = (int) date("Y") - (int) $dob_y;



  if ($monthDif < 0) {
    $age = $yearDif - 1;
  } elseif ($monthDif == 0) {
    if ($dateDif >= 0) {
      $age = $yearDif;
    } else {
      $age = $yearDif - 1;
    }
  } else {
    $age = $yearDif;
  }

  $aadr = $_POST['aadhaar'];
  $mob = $_POST['mobile'];


  $pa_add = $_POST['p-addr'];
  $pa_city = $_POST['p-city_town'];
  $pa_count = $_POST['p-country'];
  $pa_state = $_POST['p-state'];
  $pa_pin = $_POST['p-pincode'];
  $ca_add = $_POST['c-addr'];
  $ca_city = $_POST['c-city_town'];
  $ca_count = $_POST['c-country'];
  $ca_state = $_POST['c-state'];
  $ca_pin = $_POST['c-pincode'];


  if (put_data(
    $email,
    $name,
    $dob,
    $age,
    $sex,
    $fname,
    $mname,
    $cat_s,
    $cat,
    $c_married,
    $sname,
    $refavt,
    $for_post,
    $aadr,
    $mob,
    $pa_add,
    $pa_city,
    $pa_count,
    $pa_state,
    $pa_pin,
    $ca_add,
    $ca_city,
    $ca_count,
    $ca_state,
    $ca_pin,
    $p_info,
    $db
  ) == 1) {
      header("location:r_qual.php",true);
    //echo "<script>location='r_qual.php'</script>";
    exit;
  } else {
    //echo "error";
  }
}


function put_data(
  $email,
  $name,
  $dob,
  $age,
  $sex,
  $fname,
  $mname,
  $cat_s,
  $cat,
  $c_married,
  $sname,
  $refavt,
  $for_post,
  $aadr,
  $mob,
  $pa_add,
  $pa_city,
  $pa_count,
  $pa_state,
  $pa_pin,
  $ca_add,
  $ca_city,
  $ca_count,
  $ca_state,
  $ca_pin,
  $p_info,
  $db
) {
  if ($db->query("UPDATE regis_candidate SET fullname='$name',dob='$dob',
  age='$age' ,sex='$sex' ,fname='$fname' , mname='$mname', cat_s='$cat_s',
   cat='$cat' ,mstat='$c_married' , sname='$sname',p_info=$p_info,
   ref_avt='$refavt',aadr='$aadr',mob='$mob',
   pa_add='$pa_add',pa_city='$pa_city',pa_count='$pa_count',pa_state='$pa_state',
  pa_pin='$pa_pin',ca_add='$ca_add',ca_city='$ca_city',ca_count='$ca_count',
  ca_state='$ca_state',ca_pin='$ca_pin',
   for_post='$for_post'  where email ='$email'"))
    return 1;
  else {
    echo $db->error;
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
  $sql = "SELECT  
  fullname,dob,age ,sex ,fname , 
  mname, cat_s, cat ,mstat , sname,
  ref_avt,aadr,mob,
  pa_add,pa_city,pa_count,pa_state,pa_pin,ca_add,ca_city,ca_count,ca_state,ca_pin,
  for_post FROM regis_candidate where email ='$email'";
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
  <title>JOB APPLICATION</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="img/x-icon" href="../img/favicon.ico" sizes="16x16" />
  <link href="../css/style1.css?version=1" rel="stylesheet" />

</head>

<body>
  <div class="site">

    <header>
      <img src="../img/logo.png" />
      <h1>
        Any Oranization
      </h1>
      <p>(Vide Maharashtra Act No. XIV of 2014)<br />Pune 411067</p>
      <h3>JOB APPLICATION FORM</h3>
    </header>

   <?php
   include_once('../include/nav.php');
   ?>


    <div class="sub-header">
      <span><strong>Hello: </strong><?php echo $_SESSION['email']; ?></span>
      <h4>PERSONAL INFORMATIONS</h4>
      <a href="logout.php">Logout</a>
    </div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="register" class="main-form" style="text-align: center;">
      <div style="width: 420px;margin:0px auto">
        <p style="text-align:left;"><strong>JOB INFORMATION</strong></p>
        <br>

        <div class="group">
          <input class="material material-mid" type="text" name="ref-avt" value="<?php echo $refavt ?>" required />
          <span class="highlight"></span>
          <span class="bar bar-mid"></span>
          <label class="material">Ref. of Advertisement</label>
          <label style="color: red;margin-left:20px;margin-top:3px;font-size:11pt">*Enter from where you got the advertisement for the Job.</label>
        </div>

        <div class="group">
          <input class="material material-mid" type="text" name="for-post" value="<?php echo $for_post ?>" required />
          <span class="highlight"></span>
          <span class="bar bar-mid"></span>
          <label class="material">Application for the post of:</label>
          <label style="color: red;margin-left:20px;margin-top:3px;font-size:11pt">*Enter the post being applied for.</label>
        </div>
        <p style="text-align:left;"><strong>PERSONAL DETAILS</strong></p>
        <br>
        <div class="group">
          <input class="material material-mid" type="text" name="name" value="<?php echo $name ?>" required />
          <span class="highlight"></span>
          <span class="bar"></span>
          <label class="material">Name</label>
        </div>

        <div class="group-date" style="text-align:left;">
          <label>Date Of Birth</label>
          <br />
          <input class="input-small" name="dob-d" id="dob-d" value="<?php echo $dob_d ?>" onkeyup="getAge();" placeholder="DATE" required />
          <input class="input-small" name="dob-m" id="dob-m" onkeyup="getAge();" value="<?php echo $dob_m ?>" placeholder="MONTH" required />
          <input type="text" class="input-small" name="dob-y" id="dob-y" onkeyup="getAge();" value="<?php echo $dob_y ?>" placeholder="YEAR" required />
          <label>AGE:
            <p style="margin: 0px;display: inline;" name="age" id="age"><?php echo $age ?></p></label>
        </div>

        <div class="group-sex" style="text-align:left;">
          <label id="sexl" for="sex">GENDER :</label>
          <select name="sex" id="sex">
            <option <?php if (strcmp($sex, "") == 0) echo 'selected'; ?> value="">Select</option>
            <option <?php if (strcmp($sex, "Male") == 0) echo 'selected'; ?> value="Male">MALE</option>
            <option <?php if (strcmp($sex, "Female") == 0) echo 'selected'; ?> value="Female">FEMALE</option>
          </select>
        </div>

        <div class="group">
          <input class="material material-mid" type="text" name="fname" value="<?php echo $fname ?>" required />
          <span class="highlight"></span>
          <span class="bar"></span>
          <label class="material">Father's Name</label>
        </div>

        <div class="group">
          <input class="material material-mid" type="text" name="mname" value="<?php echo $mname ?>" required />
          <span class="highlight"></span>
          <span class="bar"></span>
          <label class="material">Mother's Name</label>
        </div>
        <div style="text-align:left;">
        <label id="catl" for="cat">CATEGORY:</label>
        <select class="cat" name="cat_s" id="cat-selc" onchange="writeCat();">
          <option <?php if (strcmp($cat_s, "") == 0) echo 'selected'; ?> value="">Select</option>
          <option <?php if (strcmp($cat_s, "ST") == 0) echo 'selected'; ?> value="ST">ST</option>
          <option <?php if (strcmp($cat_s, "SC") == 0) echo 'selected'; ?> value="SC">SC</option>
          <option <?php if (strcmp($cat_s, "ODC") == 0) echo 'selected'; ?> value="OBC">OBC</option>
          <option <?php if (strcmp($cat_s, "OPEN") == 0) echo 'selected'; ?> value="OPEN">OPEN</option>
          <option <?php if (strcmp($cat_s, "Other") == 0) echo 'selected'; ?> value="Other">Other</option>
        </select>
        <input class="input-small" type="text" id="cat" name="cat" placeholder="If Other" />
</div>
        <br>
        <br>
        <div style="text-align:left;">
        <label class="pure-material-checkbox">
          <input class="checkbox-married" name="c-married" type="checkbox" onchange="valueChanged()" <?php if (strcmp($c_married, "Married") == 0) echo 'checked'; ?> />
          <span>Married.</span>
        </label>

        <label class="pure-material-checkbox">
          <input class="checkbox-single" name="c-married" type="checkbox" onchange="valueChanged()" <?php if (strcmp($c_married, "Married") == 1) echo 'checked'; ?> />
          <span>Single.</span>
        </label>
        </div>
        <br />
        <br />
        <br />
        <div class="group" id="spouse-input-div">
          <input class="material material-mid" type="text" name="sname" id="spouse-input" value="<?php echo $sname ?>" />
          <span class="highlight"></span>
          <span class="bar"></span>
          <label class="material">Spouse's Name</label>
        </div>

        <p style="text-align:left;"><strong>CONTACT</strong></p>

        <br>
        <div class="group">
          <input class="material material-mid" type="text" name="aadhaar" value="<?php echo $aadr ?>" required />
          <span class="highlight"></span>
          <span class="bar bar-mid"></span>
          <label class="material">Aadhaar Card No.</label>
        </div>

        <div class="group">
          <input class="material material-mid" type="text" name="email" value="<?php echo $email ?>" required />
          <span class="highlight"></span>
          <span class="bar bar-mid"></span>
          <label class="material">Email</label>
        </div>

        <div class="group">
          <input class="material material-mid" type="text" name="mobile" value="<?php echo $mob ?>" required />
          <span class="highlight"></span>
          <span class="bar bar-mid"></span>
          <label class="material">Mobile</label>
        </div>
      </div>
      <p style="text-align:left;margin-left:35px"><strong>ADDRESS</strong></p>

      <table>
        <tr style="text-align:left;margin-left:28px">
          <th >
            <label style="margin-left:28px;" for="">Permanent Address</label>
          </th>
          <th><label style="margin-left:28px;" for="">Correspondence Address</label></th>
        </tr>
        <tr style="text-align:left;margin-left:28px">
          <td>
          </td>
          <td style="text-align:left;margin-left:35px">
            <label style="margin: 0px 30px;" class="pure-material-checkbox">
              <input id="copy-p-addr" name="copy-p-addr" type="checkbox" onclick="copyPer()" <?php if ($copr_padd == 1) echo 'checked'; ?>>
              <span>Same as Permanent.</span>
            </label>
          </td>
        </tr>
        <tr>
          <td>
            <div class="group-address">
              <textarea name="p-addr" id="p-addr" cols="46" rows="5" onkeyup=copyPer();><?php echo $pa_add ?></textarea>
              <br />
              <br />
              <div class="group">
                <input class="material material-small" type="text" name="p-city_town" id="p-city_town" onkeyup=copyPer(); value="<?php echo $pa_city ?>" required />
                <span class="highlight"></span>
                <span class="bar bar-small"></span>
                <label class="material">City/Town</label>
              </div>

              <div class="group">
                <input class="material material-small" type="text" name="p-state" id="p-state" onkeyup=copyPer(); value="<?php echo $pa_state ?>" required />
                <span class="highlight"></span>
                <span class="bar bar-small"></span>
                <label class="material">State</label>
              </div>

              <div class="group">
                <input class="material material-small" type="text" name="p-country" id="p-country" onkeyup=copyPer(); value="<?php echo $pa_count ?>" required />
                <span class="highlight"></span>
                <span class="bar bar-small"></span>
                <label class="material">Country</label>
              </div>

              <div class="group">
                <input class="material material-small" type="text" name="p-pincode" id="p-pincode" onkeyup=copyPer(); value="<?php echo $pa_pin ?>" required />
                <span class="highlight"></span>
                <span class="bar bar-small"></span>
                <label class="material">Pin</label>
              </div>
            </div>
          </td>
          <td>
            <div class="group-address">
              <textarea name="c-addr" id="c-addr" cols="46" rows="5"><?php echo $ca_add ?></textarea>
              <br />
              <br />
              <div class="group">
                <input class="material material-small" type="text" name="c-city_town" id="c-city_town" value="<?php echo $ca_city ?>" required />
                <span class="highlight"></span>
                <span class="bar bar-small"></span>
                <label class="material">City/Town</label>
              </div>

              <div class="group">
                <input class="material material-small" type="text" name="c-state" id="c-state" value="<?php echo $ca_state ?>" required />
                <span class="highlight"></span>
                <span class="bar bar-small"></span>
                <label class="material">State</label>
              </div>

              <div class="group">
                <input class="material material-small" type="text" name="c-country" id="c-country" value="<?php echo $ca_count ?>" required />
                <span class="highlight"></span>
                <span class="bar bar-small"></span>
                <label class="material">Country</label>
              </div>

              <div class="group">
                <input class="material material-small" type="text" name="c-pincode" id="c-pincode" value="<?php echo $pa_pin ?>" required />
                <span class="highlight"></span>
                <span class="bar bar-small"></span>
                <label class="material">Pin</label>
              </div>
            </div>
          </td>
        </tr>
      </table>

      <div class="group-nav">
        <button class="button-basic" id="submit" name="submit" type="submit" value="Submit">
          <strong>PROCEED</strong>
        </button>
      </div>

    </form>
    <?php
include_once('../include/foot.php');
  ?>

    <script src="https://code.jquery.com/jquery-2.2.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>



    <script type="text/javascript">
      $(document).ready(function() {
        $("#spouse-input-div").hide();
        document.getElementById('cat').disabled = true;
        document.getElementById("spouse-input").required = false;
        $(".checkbox-married").click(function() {
          if ($(".checkbox-married").is(":checked")) {
            $(".checkbox-single").prop("checked", false);
            $("#spouse-input-div").show();
            document.getElementById("spouse-input").required = true;
          } else {
            $(".checkbox-single").prop("checked", true);
            $("#spouse-input-div").hide();
            document.getElementById("spouse-input").required = false;
          }
        });

        $(".checkbox-single").click(function() {
          if ($(".checkbox-single").is(":checked")) {
            $(".checkbox-married").prop("checked", false);
            $("#spouse-input-div").hide();
            document.getElementById("spouse-input").required = false;
          } else {
            $(".checkbox-married").prop("checked", true);
            $("#spouse-input-div").show();
            document.getElementById("spouse-input").required = true;
          }
        });



      });

      function writeCat() {
        if (document.getElementById("cat-selc").value == "Other") {
          document.getElementById('cat').disabled = false;
        } else {
          document.getElementById('cat').disabled = true;
        }
      }


      function getAge() {
        var d = new Date();
        var dateDif = d.getDate() - document.getElementById("dob-d").value;
        var monthDif = (d.getMonth() + 1) - document.getElementById("dob-m").value;
        var yearDif = d.getFullYear() - document.getElementById("dob-y").value;
        var ageC = "";
        if (Math.sign(monthDif) == -1) {
          ageC = yearDif - 1;
        } else if (Math.sign(monthDif) == 0) {
          if (Math.sign(dateDif) != -1) {
            ageC = yearDif;
          } else {
            ageC = yearDif - 1;
          }
        } else {
          ageC = yearDif;
        }
        if (document.getElementById("dob-d").value && document.getElementById("dob-m").value && document.getElementById("dob-y").value)
          document.getElementById("age").innerHTML = ageC;
        else {
          document.getElementById("age").innerHTML = "";
        }
      }
    </script>

    <script type="text/javascript">
      function copyPer() {
        if ($("#copy-p-addr").is(":checked")) {
          $("#c-addr").val($("#p-addr").val());
          $("#c-city_town").val($("#p-city_town").val());
          $("#c-state").val($("#p-state").val());
          $("#c-country").val($("#p-country").val());
          $("#c-pincode").val($("#p-pincode").val());
        }
      }
    </script>
  </div>
</body>

</html>

<?php

ob_end_flush();
?>
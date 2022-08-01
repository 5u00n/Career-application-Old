<?php
if (!session_id()) {

    session_start();
}

ob_start();
?>

<?php
$usr="admin";
$pass="£££££££££££££££££££££";
$flag=0;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

     if(strcmp($usr,$_POST['ad-usr'])==0){
       $flag=1;
     }
     else{
         $flag=0;
         echo '<style type="text/css">
        #usr {
            border:1px solid red;
        }
        </style>';
         
     }
     if(strcmp($pass,$_POST['ad-pass'])==0){
        $flag=1;
      }
      else{
          $flag=0;

          echo "<style>#pass{border:1px solid red;}</style>";
      }


      if($flag==1){
          $_SESSION['email']=$usr;
          $_SESSION['pass']=$pass;
          header("location:panel.php");
          exit;
      }

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMIN LOGIN</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="img/x-icon" href="../img/favicon.ico" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>

<style>
    body {
        width: 100%;
        font-family: 'Roboto', sans-serif;

    }

    .site {
        margin: 70px auto;
        width: 500px;
        height: 200px;
        border-radius: 20px;
        box-shadow: 0 0 10px #9999, 0 0 10px #9999;
        padding: 20px 0px;
    }



    form input {
        margin: 20px;
        font-size: 20px;
        color: grey;
        width: 450px;
        border: 1px solid grey;
        border-radius: 5px;
        height: 40px;
    }

    form input:active,
    form input:hover,
    form input:valid {
        border: grey;
        box-shadow: 0 0 5px #9999, 0 0 5px #9999;
    }

    form button {
        font-size: 25px;

    }

    form button:hover {
        color: white;
        background-color: #0099ee;
        border: #0099ee;
    }
</style>

<body align="center">
    <div class="site">

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="register" class="main-form">
            <input type="text" name="ad-usr" placeholder="Username..."  id="usr">
            <br>
            <input type="password" name="ad-pass" placeholder="Password..." id="pass">
            <br>
            <button type="submit"><strong>LOGIN</strong></button>
        </form>
    </div>




</body>

</html>

<?php
ob_end_flush();
?>

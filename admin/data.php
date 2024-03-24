<?php
// Array with names
include '../include/config.php';
//database connection
$db = new mysqli("$dbhost", "$dbuser", "$dbpass");
$db->select_db("$dbname");
$can = 0;

$data = array();
$result = mysqli_query($db, "SELECT phd_docl,phd_org,email,fullname FROM regis_candidate WHERE phd_docl!='' and phd_org = '';");
//$result = mysqli_query($db, "SELECT phd_docl,phd_org,email,fullname FROM regis_candidate ;");


if ($result)
    $can = mysqli_num_rows($result);
$row_c = 0;

while($row = mysqli_fetch_array($result)){

    $data[]=$row;
}
// get the q parameter from URL
$q = $_REQUEST["q"];

$name = "";

// lookup all hints from array if $q is different from ""
/*if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}
*/

if($q!=="" && $q< count($data)){
    //$name=$data[$q];
    //foreach($data[$q] as $row){
        $fnum=((int)$q+1);
        $prt=($fnum/count($data))*100;
        $httpaddr=str_replace("..","http://localhost",$data[$q]['phd_docl']);
        echo '<progress id="file" stye="width:1000px;height:30px"value="'.$prt.'" max="100"></progress>';
        echo '<p id="prt" ><b>'.$prt.' %</b></p>';

        echo '<div id="edit" class="tabs" align="center">';
        echo '<h3>Enter the Corrected PhD Organisation For</h3>';
        
        echo '<h4>Name:  '.$data[$q]['fullname'].'</h4>';
        echo '<h3>Location:  '.$data[$q]['phd_docl'].'</h3>';
        echo 'Email: <input type="text" name="email" value="'.$data[$q]['email'].'" style="width:350px;height:30px;">';
        echo '<br><br><input type="text" name="phd_org" placeholder="Enter the PHd Organisation" style="width:400px;height:30px;">';
        echo '<br><br>';
        echo '<input type="submit" id="sub" name="sub" value="Update" >';
        echo '<br><br>';
        echo '<input type="button" id="nxt" name="nxt" value="Check Next Data" onclick="next()">';
        echo '<br><br>';
        echo '<input type="submit" id="go-back" name="go-back" value="Go Back">';
        
        echo '</div>';
        echo '<div id="view"class="tabs">';
        echo ' <embed src="https://drive.google.com/viewerng/viewer?embedded=true&url='.$httpaddr.'"  style="width:100%;height:100%;border:2px solid grey">';
        //echo '<iframe src="'.$data[$q]['phd_docl'].'" frameborder="0" style="width:100%;height:100%;border:2px solid grey"></iframe>';
        echo '</div>';
        
        
        //echo $data[$q]['email'];
    
}
else{
    echo "<br><br><h2 id='prt'>All data Processed .</h2>";
    echo '<input class="cmp" type="submit" id="go-back" name="go-back" value="Go Back">';
}

// Output "no suggestion" if no hint was found or output correct values
//echo $name === "" ? "no suggestion" : $name;

//print_r($data);
?>
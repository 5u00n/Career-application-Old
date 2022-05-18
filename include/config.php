<?php
$dbhost="localhost"; //hostname
$dbuser="root";  //mysql acc/ username
$dbpass="";  //mysql scc/ password
$dbname="career_table"; //mysql database name
$udir = "../sau_uploads/";
$adminemail="";
if (!file_exists("sau_uploads/")) {
   mkdir("sau_uploads/");
}

$conn = new mysqli($dbhost, $dbuser, $dbpass);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE)
  {
 // echo "Database created successfully";
} else {
 // echo "Error creating database: " . $conn->error;
}

mysqli_select_db( $conn,$dbname );
  $sql = "CREATE TABLE regis_candidate(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    email text,
    code INT(8),
    p_info text,
    ref_avt text,
    for_post text,
    fullname text ,
    dob text ,
    age INT(5),
    sex text,
    fname text,
    mname text,
    mstat text,
    sname text,
    pa_add text,
    pa_city text,
    pa_count text,
    pa_state text,
    pa_pin INT(10),
    ca_add text,
    ca_city text,
    ca_count text,
    ca_state text,
    ca_pin INT(10),
    aadr INT(20),
    mob INT(13),
    cat text,
    cat_s text,
    ssc_org text,
    ssc_my text,
    ssc_speci text,
    ssc_prcnt text,
    ssc_grade text,
    ssc_docl text,
    hsc_org text,
    hsc_my text,
    hsc_speci text,
    hsc_prcnt text,
    hsc_grade text,
    hsc_docl text,
    bd_org text,
    bd_my text,
    bd_speci text,
    bd_prcnt text,
    bd_grade text,
    bd_docl text,
    md_org text,
    md_my text,
    md_speci text,
    md_prcnt text,
    md_grade text,
    md_docl text,
    mph_org text,
    mph_my text,
    mph_speci text,
    mph_prcnt text,
    mph_grade text,
    mph_docl text,
    phd_org text,
    phd_my text,
    phd_speci text,
    phd_prcnt text,
    phd_grade text,
    phd_docl text,
    exm_org text,
    exm_my text,
    exm_speci text,
    exm_prcnt text,
    exm_grade text,
    exm_docl text,
    te1_in text,
    te1_pst text,
    te1_sub text,
    te1_napp text,
    te1_yexp text,
    te2_in text,
    te2_pst text,
    te2_sub text,
    te2_napp text,
    te2_yexp text,
    te3_in text,
    te3_pst text,
    te3_sub text,
    te3_napp text,
    te3_yexp text,
    ie1_in text,
    ie1_pst text,
    ie1_sub text,
    ie1_napp text,
    ie1_yexp text,
    ie2_in text,
    ie2_pst text,
    ie2_sub text,
    ie2_napp text,
    ie2_yexp text,
    ie3_in text,
    ie3_pst text,
    ie3_sub text,
    ie3_napp text,
    ie3_yexp text,
    rw_sup text,
    rpap_pre text,
    rpap_pub text,
    meet_attnd text,
    awards text,
    rf1_name text,
    rf1_title text,
    rf1_inst text,
    rf1_phn text,
    rf2_name text,
    rf2_title text,
    rf2_inst text,
    rf2_phn text,
    rf3_name text,
    rf3_title text,
    rf3_inst text,
    rf3_phn text,
    img_loc text,
    sig_loc text,
    s_date text,
    s_place text,
    complete text,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY(email)
    )";
    
    if ($conn->query($sql) === TRUE) {
     //echo "Table MyGuests created successfully";
    } else {
    //echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

?>
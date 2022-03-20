<?php
session_start();
include_once('../config.php');
date_default_timezone_set('Asia/Karachi');
$createdate = "";
$createby = "";
if (isset($_SESSION['name'])) {
    $createby = $_SESSION['name'];
}
$createdate = date('Y-m-d h:i:s');

if (isset($_POST['date'])) {
    $teacher = $_POST['teacher'];
    $date = $_POST['date'];
    $course = $_POST['course'];
    $student = $_POST['student'];
    
    
    $regiatrationQry = "INSERT INTO assign
    (date,cid,tid,sid)
    
    VALUES 
    ('$date','$teacher','$course','$student')";
    // echo $regiatrationQry;
    // die();
    $sql1 = mysqli_query($conn, $regiatrationQry);
    
    header('location: assigning.php');
}

?>
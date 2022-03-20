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
    $bookname = $_POST['bookname'];
    $date = $_POST['date'];
    $isbn = $_POST['isbn'];
    
    
    $regiatrationQry = "INSERT INTO course
    (date,bookname,isbn,isdelete,createby,createdate)
    
    VALUES 
    ('$date','$bookname','$isbn',0,'$createby','$createdate')";
    // echo $regiatrationQry;
    // die();
    $sql1 = mysqli_query($conn, $regiatrationQry);
    
    header('location: courseRegistration.php');
}

?>
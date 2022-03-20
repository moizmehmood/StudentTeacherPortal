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
    $name = $_POST['name'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobNo = $_POST['mobNo'];
    $cnic = $_POST['cnic'];
    // $role = $_POST['role'];

    if($_POST['role'] == "Teacher"){
        $regiatrationQry = "INSERT INTO teacher
    (date,name,username,address,password,email,mobileNo,cnic,isdelete,createby,createdate)
    
    VALUES 
    ('$date','$name','$userName','$address','$password','$email','$mobNo','$cnic',0,'$createby','$createdate')";
    // echo $regiatrationQry;
    // die();
    $sql1 = mysqli_query($conn, $regiatrationQry);
    
    header('location: registration.php');

    }


    if($_POST['role'] == "Student"){
        $regiatrationQry = "INSERT INTO student
    (date,name,username,address,password,email,mobileNo,cnic,isdelete,createby,createdate)
    
    VALUES 
    ('$date','$name','$userName','$address','$password','$email','$mobNo','$cnic',0,'$createby','$createdate')";
    // echo $regiatrationQry;
    // die();
    $sql1 = mysqli_query($conn, $regiatrationQry);
    
    header('location: registration.php');

    }
    
    // $regiatrationQry = "INSERT INTO registration
    // (rdate,name,username,address,password,email,mobileNo,CNIC,role,isdelete,createby,createdate)
    
    // VALUES 
    // ('$date','$name','$userName','$address','$password','$email','$mobNo','$cnic','$role',0,'$createby','$createdate')";
    
    // $sql1 = mysqli_query($conn, $regiatrationQry);
    
    // header('location: registration.php');
}

?>
<?php
include_once('../session/session.php');

require('../config.php');

if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registration
WHERE username = '$username' AND password = '$password' AND role = 'admin'";

$sql2 = "SELECT * FROM teacher
WHERE username = '$username' AND password = '$password'";

$sql3 = "SELECT * FROM student
 WHERE username = '$username' AND password = '$password'";

    $loginQuery = mysqli_query($conn, $sql);
    $loginQuery2 = mysqli_query($conn, $sql2);
    $loginQuery3 = mysqli_query($conn, $sql3);

    $loginRow = mysqli_fetch_array($loginQuery);
    $loginRow2 = mysqli_fetch_array($loginQuery2);
    $loginRow3 = mysqli_fetch_array($loginQuery3);

    if (is_array($loginRow)) {
        $_SESSION['user_id'] = $loginRow['id'];
        $_SESSION['name'] = $loginRow['name'];
        $_SESSION['user_name'] = $loginRow['username'];
        $_SESSION['user_role'] = $loginRow['role'];


        $login_msg = "success";
        header('location:../admin/index.php');
    } 
    else if(is_array($loginRow2)) {
        $_SESSION['user_id'] = $loginRow2['id'];
        $_SESSION['name'] = $loginRow2['name'];
        $_SESSION['user_name'] = $loginRow2['username'];
        $_SESSION['user_role'] = $loginRow2['role'];

        $login_msg = "success";
        header('location:../teacher/index.php');
    } 

    else if(is_array($loginRow3)) {
        $_SESSION['user_id'] = $loginRow2['id'];
        $_SESSION['name'] = $loginRow2['name'];
        $_SESSION['user_name'] = $loginRow2['username'];
        $_SESSION['user_role'] = $loginRow2['role'];

        $login_msg = "success";
        header('location:../student/index.php');
    }
    
    
    else {
        // echo "<script>alert('invalid username or password')</script>";
        $_SESSION['login_err'] = "Invalid username or password.";
        header("location:../index.php");
    }
}

<?php
session_start();
include_once('../config.php');
date_default_timezone_set('Asia/Karachi');

if (isset($_POST['btnRegister'])) {
  $id = $_POST['id'];
  $date = $_POST['date'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobileNo = $_POST['mobNo'];
  $cnic = $_POST['cnic'];

  $sql = "UPDATE student
    set 
    date = '$date',
    name = '$name',
    address = '$address',
    username = '$username',
    email = '$email',
    mobileNo = '$mobileNo',
    cnic = '$cnic'
    where sid = '$id'";

    // echo $sql;
    // die();

  $update = mysqli_query($conn, $sql);
  echo '<script type="text/javascript">
            location.replace("viewStudent.php");
          </script>';
}

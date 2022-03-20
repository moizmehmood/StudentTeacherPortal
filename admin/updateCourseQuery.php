<?php
session_start();
include_once('../config.php');
date_default_timezone_set('Asia/Karachi');

if (isset($_POST['btnRegister'])) {
  $id = $_POST['id'];
  $date = $_POST['date'];
  $bookname = $_POST['bookname'];
  $isbn = $_POST['isbn'];

  $sql = "UPDATE course
    set 
    date = '$date',
    bookname = '$bookname',
    isbn = '$isbn'
    where cid = '$id'";

    // echo $sql;
    // die();

  $update = mysqli_query($conn, $sql);
  echo '<script type="text/javascript">
            location.replace("viewCourse.php");
          </script>';
}

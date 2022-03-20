<?php
session_start();
include_once('../config.php');

$id = $_GET['id'];

$sql = "UPDATE course
set 
isdelete = '1'
where cid = '$id';";

$deleteStudent = mysqli_query($conn, $sql);

echo '<script type="text/javascript">
            location.replace("viewCourse.php");
          </script>';
<?php
session_start();
include_once('../config.php');

$id = $_GET['id'];

$sql = "UPDATE teacher
set 
isdelete = '1'
where tid = '$id';";

$deleteStudent = mysqli_query($conn, $sql);

echo '<script type="text/javascript">
            location.replace("viewTeacher.php");
          </script>';
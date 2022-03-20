<?php
session_start();
include_once('../config.php');

$id = $_GET['id'];

$sql = "UPDATE student
set 
isdelete = '1'
where sid = '$id';";

$deleteStudent = mysqli_query($conn, $sql);

echo '<script type="text/javascript">
            location.replace("viewStudent.php");
          </script>';
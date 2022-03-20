<?php
include('../session/session.php');

$id = "";

if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    unset($_SESSION['login_err']);
    sleep(1);
    header('location: login.php');
    // echo "<script>location.assign('login.php')</script>";
}

<?php
    session_start();
    unset($_SESSION['username']); //unsetting the session variables
    unset($_SESSION['id']);
    header('location: ./staffLogin.php'); //redirecting to login page
?>
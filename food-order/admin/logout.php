<?php
    //Include constants.php for home_url
    include('../config/constants.php');
    //Destroy the session
    session_destroy(); //Unsets $_SESSION['user']

    //redirect to login page
    header('location: '.HOME_URL.'admin/login.php');
?>
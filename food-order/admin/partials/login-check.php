<?php
    if(!isset($_SESSION['admin'])){
        //User is not logged in
        $_SESSION['no-login-message'] = "<div class='error'>Please login to access Admin Panel.</div>";
        header('location:'.HOME_URL.'admin/login.php');
    }
?>
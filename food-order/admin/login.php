<?php include('../config/constants.php')?>
<html>
    <head>
        <title> Login - Food Order System</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        <div class= "Admin login">
            <h1>Login</h1>
            <br>
            <?php
                if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset ($_SESSION['login']);
                }
                if(isset($_SESSION['no-login-message'])){
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br>
            <!--Login Form-->
            <form action="" method="POST" class="text-center">
                Username:<br>
                <input type= "text" name= "username" placeholder= "Enter Username"> <br><br>
                Password:<br>
                <input type= "password" name= "password" placeholder= "Enter Password"> <br><br>

                <input type= "submit" name= "submit" value= "Login" class= "btn-main"> <br>

            </form>
            <!--login form end-->
            
            <p class="zingals"> Not Registerd as Admin ? <a href="https://www.youtube.com/watch?v=QBWFBKJ6nb0">Register Yourself ! </a></p>
        </div>
    </body>
</html>

<?php
    //check whether the submit button is clicked or not
    if(isset($_POST['submit'])){
        //process for login
        //Get data from login form
        $username= $_POST['username'];
        $password= md5($_POST['password']);

        //SQL to check whether with username with password exist or not
        $sql = "SELECT *FROM tbl_admin WHERE username= '$username' AND password= '$password'";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Count rows whether the user exists or not
        $count = mysqli_num_rows($res);
        if($count==1){
            //user Available and successfully login 
            $_SESSION['login'] = "<div class= 'success'>Login Sucessful</div>";
            $_SESSION['admin'] = $username; //to check the user is logged in or not


            //redirecting to home page
            header('location:'.HOME_URL.'admin/');

        }else{
            //User not available here 
            $_SESSION['login'] = "<div class= 'error'>Login Failed</div>";
            //redirecting to home page
            header('location:'.HOME_URL.'admin/login.php');
        }

    }
?>
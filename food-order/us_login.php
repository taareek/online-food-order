<?php include('config/constants.php')?>
<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content= "width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content= "ie=edge">
        <meta name= "Description" content= "Enter your desription here"/>
        <title>Khadok</title>
        <!--Bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!--Own CSS-->
        <link rel= "stylesheet" href= "css/style.css">
        <link rel= "stylesheet" href= "css/responsive-style.css">
        <link rel="stylesheet" href="../css/admin.css">

    </head>
    <body>
        <!--Header Design-->
        <header>
            <nav class="navbar navbar-expand-lg navigation-wrap">
                <div class="container">
                  <a class="navbar-brand" href="#"><img src= "Images/logo.jpg" height="80"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <i class= "fas fa-stream navbar-toggler-icon"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#explore-food">Explore Foods</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#explore-restaurent">Explore Restaurents</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="registration.php">Register</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="us_login.php">Log in</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
 
 
        <!-- Register  section starts  -->
        <section id="contact">
          <div class= "contact wrapper">
            <div class= "container">
              <div class= "row">
                <div class="col-sm-12">
                  <div class= "text-content text-center pb-4">
                    <h2>User Login !</h2>
                    <br>
                    <?php
                        if(isset($_SESSION['login'])){
                            echo $_SESSION['login'];
                            unset ($_SESSION['login']);
                        }
                    ?>
                    <!--Login Form-->
                    <form action="" method="POST" >
                    <div class="row">
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                          <input class="form-control"  name="username" type="text" placeholder= "Enter your username here.."><br>
                      </div>                       
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                        <input class="form-control"  name="password" type="password" placeholder= "Enter your password here.."><br>
                      </div>
                      <div class= "col-md-4 col-12 text-content text-center pb-2">
                        <input class="main-btn"  name="submit" type= "submit" value="Login"><br>
                      </div>
                    </div>
                    </form>
            <!--login form end-->
            <br>
            <p class="zingals"> Don't have an account? - <a href="registration.php"> Register here! </a></p>
                   
              </div>
            </div>
          </div>
        </section>
        <!--Footer section-->
        <footer id= "footer">
          <div class= "footer py-5">
            <div class="container">
              <div class= "row">
                <div class= "col-md-12 text-center">
                  <a class= "footer-link" href="#">Register</a>
                  <a class= "footer-link" href="#">Forum</a>
                  <a class= "footer-link" href="#">Affiliats</a>
                  <a class= "footer-link" href="#">FAQ</a>
                </div>
                <div class= "footer-social pt-4 text-center">
                  <a href= "#"><i class= "fab fa-facebook-f"></i></a>
                  <a href= "#"><i class= "fab fa-twitter"></i></a>
                  <a href= "#"><i class= "fab fa-youtube"></i></a>
                  <a href= "#"><i class= "fab fa-snapchat"></i></a>
                  <a href= "#"><i class= "fab fa-linkedin"></i></a>
                  <a href= "#"><i class= "fab fa-instagram"></i></a>
                </div>
              </div>
              <div class= "col-sm-12">
                <div class= "footer-copy">
                  <div class= "copy-right text-center pt-5">
                    <p class= "text-light">@2021. Khadok. All rights reserved.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!--JS Libraires-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--Own JS -->
    <script src= "js/main.js"></script>
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
        $sql = "SELECT *FROM tbl_users WHERE username= '$username' AND password= '$password'";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Count rows whether the user exists or not
        $count = mysqli_num_rows($res);
        if($count==1){
            //user Available and successfully login 
            $_SESSION['login'] = "<div class= 'success'>Login Sucessful.</div>";
            $_SESSION['user'] = $username; //to check the user is logged in or not


            //redirecting to home page
           // header('location:'.'..\after-login.php');
            echo "<script> window.location.href= 'http://localhost/food-order/after-login.php'; </script> ";

        }else{
            //User not available here 
            $_SESSION['login'] = "<div class= 'error'>Login Failed! Provide correct Username and password. </div>";
            //redirecting to home page
            //header('location:'.HOME_URL.'admin/user-login.php');
            echo "<script> window.location.href= 'http://localhost/food-order/us_login.php'; </script> ";
        }

    }
?>

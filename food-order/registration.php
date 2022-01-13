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
                    <h2>Register Yourself !</h2>
                  </div>
                  <div class= "row">
                  <form action="" method="POST" >
                    <div class="row">
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                          <input class="form-control"  name="first_name" type="text" placeholder= "Enter your First name here.."><br>
                      </div>
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                        <input class="form-control"  name="last_name" type="text" placeholder= "Enter your Last name here.."><br>
                      </div>
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                        <input class="form-control"  name="email" type="email" placeholder= "Enter your email address here.."><br>
                      </div>
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                        <input class="form-control"  name="username" type="text" placeholder= "Enter your username here.."><br>
                      </div>
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                        <input class="form-control"  name="password" type="password" placeholder= "Enter your password here.."><br>
                      </div>
                      <div class= "col-md-4 col-12 text-content text-center pb-2">
                        <input class="main-btn"  name="submit" type= "submit" value="Register"><br>
                      </div>
                    </div>
                  </form>
                  </div>
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
    // Process the value from Form and save it in the database
    // Check whether the submit button is clicked or not 

    if(isset($_POST['submit'])){
        //Button clicked 
        //echo "Button Clicked";

        //Get the data from form 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Encrypting password

        // SQL Query to insert the data into database
        $sql = "INSERT INTO tbl_users SET
            first_name = '$first_name',
            last_name = '$last_name',
            email = '$email',
            username = '$username',
            password = '$password'
        ";
        
        // Execute Query and save to the database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res== TRUE){

            //data inserted
            //echo "Data Inserted";
            $_SESSION['complete'] = 'Your registration has been completed!';
            //Redirect page to manage admin
            //header("location:".HOME_URL.'admin/manage-admin.php');
            echo "<script> window.location.href= 'http://localhost/food-order/us_login.php'; </script> ";
        }else{

            //Failed to insert data
            $_SESSION['add'] = 'Failed to Registration!!';
            //Redirect page to add  admin page
            echo "<script> window.location.href= 'http://localhost/food-order/registration.php'; </script> ";
        }


    }
?>
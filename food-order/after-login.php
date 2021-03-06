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
        <!--Section1 top-banner-->
        <section id= "home">
            <div class= "container-fluid px-0 top-banner">
                <div class= "container">
                    <div class="row">
                        <div class= "col-lg-5 col-md-6">
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
                            <h1>Welcome Khadok! Let's have some foods!!</h1>
                            <p>Khadok is one of the largest food delivery system
                              in the country. We are here to provide you the best 
                              food delivery from your desired restaurents. 
                            </p>
                            <div class= "mt-4">
                                <button class="main-btn">Order Now<i class="fas fa-shopping-basket ps-3"></i></button>
                                <button class="white-btn ms-lg-4 mt-lg-0 mt-4">Order Now<i class="fas fa-angle-right ps-3"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--COunter Section-->
        <section id= "counter">
          <section class= "counter-section">
            <div class= "container">
              <div class= "row text-center">
                <div class= "col-md-3 mb-lg-0 mb-md-0 mb5">
                  <h2>
                    <span id= "count1"></span>+
                  </h2>
                  <p>RESTAURENTS</p>
                </div>
                <div class= "col-md-3 mb-lg-0 mb-md-0 mb5">
                  <h2>
                    <span id= "count2"></span>+
                  </h2>
                  <p>FOOD ITEMS</p>
                </div>
                <div class= "col-md-3 mb-lg-0 mb-md-0 mb5">
                  <h2>
                    <span id= "count3"></span>+
                  </h2>
                  <p>REVIEWS</p>
                </div>
                <div class= "col-md-3 mb-lg-0 mb-md-0 mb5">
                  <h2>
                    <span id= "count4"></span>+
                  </h2>
                  <p>RATING</p>
                </div>
              </div>
            </div>
          </section>
        </section>

        <!--About Section-->
        <section id= about>
          <div class= "about-section wrapper">
            <div class= "container">
              <div class= "row align-items-center">
                <div class= "col-lg-7 col-md-12 mb-lg-0 mb-5">
                  <div class= "card border-0">
                    <img src= "images/bg-2.jpg" class= "image-fluid">
                  </div>
                </div> 
                <div class= "col-lg-5 col-md-12 text-sec">
                  <h2>We are here to servs you all sorts of delicious food.</h2>
                  <p>
                    Khadok is promised to provide you the diffrents 
                    types of foods. You can choose any types of food
                    like Pizza, Burger, Kacchi, drinks etc. We always 
                    try to provide the most delicious food to our 
                    consumers. 
                  </p>
                  <button class= "main-btn mt-4"> Learn More</button>
                </div>
              </div>
            </div>
            <div class= "container food-type">
              <div class= "row align-items-center">
                <div class= "col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
                  <h2>We provide the foods made with joy and best ingredient</h2>
                  <p>
                    When comes to food then quality matters. We are here 
                    to provide the foods which are made with the best ingredients.
                    We make sure that our consumers are getting the helathy foods 
                    from us. We always maintain food quality from our website.
                  </p>
                  <ul class= "list-unstyled py-3">
                    <li>la isla minima </li>
                    <li>el camino</li>
                    <li>la sita cantare</li>
                  </ul>
                  <button class= "main-btn mt-4">Learn More</button>
                </div>
                <div class= "col-lg-7 col-md-12">
                  <div class="card border-0">
                    <img src="images/bacg.jpg" class= "img-fluid">
                  </div>
                </div> 
              </div>
              
            </div>
          </div>
        </section>
        <!--Story-->
        <section id= "story">
          <div class= "story-section">
            <div class= "container">
              <div class= "row">
                <div class= "col-sm-12">
                  <h2>Khudar Rajje Prithibi Goddomoy, Purnima Chand Jeno Jholshano Ruti</h2>
                  <p>
                    Actually this is a well known proverb in our country.
                    If you are hungry enough then everything is gonna be 
                    tasty to you. But we always assure that our consumers 
                    are getting the tasty foods by our delviry systems.
                  </p>
                  <button class= "main-btn mt-3">Read More</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Explore Foods-->
        <section id= "explore-food">
          <div class= "explore-food wrapper">
            <div class= "container">
              <div class= "row">
                <div class= "col-sm-12">
                  <div class= "text-content text center">
                    <h2>Explore Our Foods</h2>
                    <p>
                      Here is our food categories. You can choose by yoursellf
                      whatever you want to eat. We are here to provide you the 
                      best experience with the different categories foods. 
                    </p>
                  </div>
                </div>
              </div>
              <div class= "row pt-5">
                <div class= "col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class= "card">
                    <img src= "images/bg1.jpg" class= "img-fluid">
                    <div class= "pt-3">
                      <h4>Food 1</h4>
                      <p>Time: 15-20 minutes | Serves: 1</p>
                      <span>225.00 TK <del>290.00 TK</del></span>
                      <button class= "mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class= "col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class= "card">
                    <img src= "images/bg-2.jpg" class= "img-fluid">
                    <div class= "pt-3">
                      <h4>Food 1</h4>
                      <p>Time: 15-20 minutes | Serves: 1</p>
                      <span>225.00 TK <del>290.00 TK</del></span>
                      <button class= "mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class= "col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class= "card">
                    <img src= "images/bg3.jpg" class= "img-fluid">
                    <div class= "pt-3">
                      <h4>Food 1</h4>
                      <p>Time: 15-20 minutes | Serves: 1</p>
                      <span>225.00 TK <del>290.00 TK</del></span>
                      <button class= "mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
        <section id= "explore-restaurent">
          <div class= "explore-restaurent wrapper">
            <div class= "container">
              <div class= "row">
                <div class= "col-sm-12">
                  <div class= "text-content text center">
                    <h2>Explore Our Restaurent</h2>
                    <p>
                      I want to buy a Burger but I also want it from a 
                      specific restaurent. Yes, you are right! For you, we
                      are offering foods from diffrents restaurents. Select your 
                      desired restaurent and order your favourite food items. 
                    </p>
                  </div>
                </div>
              </div>
              <div class= "row pt-5">
                <div class= "col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class= "card">
                    <img src= "images/bg1.jpg" class= "img-fluid">
                    <div class= "pt-3">
                      <h4>Restaurent 1</h4>
                      <p>Items: Burger, Sandwich, French fries</p>
                      <span>Rating: 4.3 (5.00)</span>
                      <button class= "mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class= "col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class= "card">
                    <img src= "images/bg-2.jpg" class= "img-fluid">
                    <div class= "pt-3">
                      <h4>Restaurent 2</h4>
                      <p>Items: Kacchi, Biriyani, Chui jhal</p>
                      <span>Rating: 4.8 (5.00)</span>
                      <button class= "mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class= "col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class= "card">
                    <img src= "images/bg3.jpg" class= "img-fluid">
                    <div class= "pt-3">
                      <h4>Restaurent 3</h4>
                      <p>Items: Pizza, Pasta, Mojito</p>
                      <span>Rating: 4.1 (5.00)</del></span>
                      <button class= "mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
        <!--parallex section-->
        <section class= "eat-healthy">
          <div class= "eat-healthy">
            <div class= "container eat-healthy-text">
              <div class= "row text-center">
                <div class= "col-lg-9 col-md-12">
                  <h2>Eat better foods and stay healthy !!</h2>
                </div>
                <div class= "col-lg-3 col-md-12 mt-lg-0 mt-4">
                  <button class= "main-btn">Learn More</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact section starts  -->

        <section id="contact">
          <div class= "contact wrapper">
            <div class= "container">
              <div class= "row">
                <div class="col-sm-12">
                  <div class= "text-content text-center pb-4">
                    <h2>Contact Us !</h2>
                  </div>
                  <form class= "contact" action= "" method= "POST">
                    <div class="row">
                      <div class= "col-md-6 col-12">
                        <input class="form-control" placeholder= "Your Name.." name="cnt_name" type="name"><br>
                      </div>
                      <div class= "col-md-6 col-12"> 
                        <input class="form-control" placeholder= "Your Email address.." name="cnt_email" type="email"><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class= "col-md-12 col-12">
                        <textarea class= "form-text-area" placeholder= "Your message.." name="cnt_msg"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class= "col-md-4 col-12 text-content text-center">
                        <br>
                        <button class= "main-btn" type= "submit" name= "cnt_submit">Send Message</button>
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

    if(isset($_POST['cnt_submit'])){
        //Button clicked 
        //echo "Button Clicked";

        //Get the data from form 
        $name = $_POST['cnt_name'];
        $email = $_POST['cnt_email'];
        $message = $_POST['cnt_msg'];

        // SQL Query to insert the data into database
        $sql = "INSERT INTO tbl_contact SET
            name = '$name',
            email = '$email',
            message = '$message'
        ";
        
        // Execute Query and save to the database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res== TRUE){

            //data inserted
            //echo "Data Inserted";
            $_SESSION['contact'] = 'Your message has been sent!';
            //Redirect page to manage admin
            //header("location:".HOME_URL.'admin/manage-admin.php');
            echo "<script> window.location.href= 'http://localhost/food-order/after-login.php'; </script> ";
        }else{

            //Failed to insert data
            $_SESSION['add'] = 'Failed to send message!!';
            //Redirect page to add  admin page
            echo "<script> window.location.href= 'http://localhost/food-order/'; </script> ";
        }


    }
?>
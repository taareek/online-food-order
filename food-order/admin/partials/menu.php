<?php 
  include('../config/constants.php');
  include('login-check.php');
?>

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
        <link rel= "stylesheet" href= "../css/style.css">
        <link rel= "stylesheet" href= "../css/admin.css">
        <link rel= "stylesheet" href= "../css/responsive-style.css">
        

    </head>
    <body>
        <!--Header Design-->
        <header>
            <nav class="navbar sticky-top navbar-expand-lg navigation-wrap  navbar-light" style="background-color: #ab2c48">
                <div class="container">
                  <a class="navbar-brand" href="#"><img src= "../Images/logo.jpg" height="80"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <i class= "fas fa-stream navbar-toggler-icon"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="manage-admin.php">Admin</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="manage-food-category.php">Foods Category</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="manage-restaurent.php">Restaurents</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="manage-foods.php">Food Items</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="manage-order.php">Order</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
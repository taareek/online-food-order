<?php include('partials/menu2.php');?>
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
<?php include('partials/footer.php');?>
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
            echo "<script> window.location.href= 'http://localhost/food-order/admin/user-login.php'; </script> ";
        }else{

            //Failed to insert data
            $_SESSION['add'] = 'Failed to Registration!!';
            //Redirect page to add  admin page
            echo "<script> window.location.href= 'http://localhost/food-order/user-registration.php'; </script> ";
        }


    }
?>

<?php include('partials/menu.php'); ?>
 
        <!-- contact section starts  -->

        <section id="contact">
          <div class= "contact wrapper">
            <div class= "container">
              <div class= "row">
                <div class="col-sm-12">
                  <div class= "text-content text-center pb-4">
                    <h2>Change Password</h2>
                  </div>
                  <?php
                    if(isset($_GET['id'])){
                        $id= $_GET['id'];
                    }
                  ?>
                  <form action="" method="POST" >
                    <div class="row">
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                          <input class="form-control"  name="current_password" type="password" placeholder= "Enter current password"><br>
                      </div>
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                        <input class="form-control"  name="new_password" type="password" placeholder="Enter new password"><br>
                      </div>
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                        <input class="form-control"  name="confirm_password" type="password" value="" placeholder="Confirm password"><br>
                      </div>
                       
                      <div class= "col-md-4 col-12 text-content text-center pb-2">
                        <input type="hidden" name= "id" value="<?php echo $id;?>">
                        <input class="main-btn"  name="submit" type= "submit" value="Change Password"><br>
                      </div>
                    </div>
                  </form>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </section>

<?php 
    if(isset($_POST['submit'])){
        //Get the data from form 
        $id = $_POST['id'];
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

        //Check wheter the user with current password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password' ";
        
        //Execute the query
        $res = mysqli_query($conn, $sql);

        if($res == true){
            //Check data availabity
            $count = mysqli_num_rows($res);

            if($count==1){
                //User Exists and password can be changed
                //echo "User Found.";
                //Check wheter the new password and confirm password match or not 
                if($new_password == $confirm_password){
                    //update password
                    $sql2 = "UPDATE tbl_admin SET
                    password = '$new_password' WHERE id= $id
                    ";

                    //Execute the Query
                    $res2 = mysqli_query($conn,$sql2);

                    //Checking query executing or not
                    if($res2 == true){
                        //Display Success message
                        $_SESSION['password_match']=  "<div class= 'success'>Password changed successfully !</div>";
                        //Redericting 
                        echo "<script> window.location.href= 'http://localhost/food-order/admin/manage-admin.php'; </script> ";

                    }else{
                        //Redirect to the manage admin page 
                        $_SESSION['password_match']=  "<div class= 'error'>Failed to change password!</div>";
                        //Redericting 
                        echo "<script> window.location.href= 'http://localhost/food-order/admin/manage-admin.php'; </script> ";

                    }

                }else{
                    //Redirect to the manage admin page 
                    $_SESSION['password_mismatch']=  "<div class= 'error'>Password didn't match !!</div>";
                    //Redericting 
                    echo "<script> window.location.href= 'http://localhost/food-order/admin/manage-admin.php'; </script> ";
                    } 

            }else{
                //User doen't exit
                $_SESSION['user_not_found']=  "<div class= 'error'>User Not Found.</div>";
                //Redericting 
                echo "<script> window.location.href= 'http://localhost/food-order/admin/manage-admin.php'; </script> ";
            }
        }
    }
?>
<?php include('partials/footer.php'); ?>
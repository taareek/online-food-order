<?php include('partials/menu.php'); ?>
 
        <!-- contact section starts  -->

        <section id="contact">
          <div class= "contact wrapper">
            <div class= "container">
              <div class= "row">
                <div class="col-sm-12">
                  <div class= "text-content text-center pb-4">
                    <h2>Update Admin</h2>
                  </div>
                  <div class= "row">
                    <?php
                        //get the id
                        $id= $_GET['id'];
                        
                        //createSQL Query
                        $sql = "SELECT *FROM tbl_admin WHERE id= $id";

                        //Execute the Query
                        $res = mysqli_query($conn, $sql);

                        //Check the query executed or not 
                        if($res == true){
                            //Check wheter the data is available or not
                            $count = mysqli_num_rows($res);
                            //Check whether we have admin data or not 
                            if($count==1){
                                //get the details
                                //echo "Admin Available";
                                $row = mysqli_fetch_assoc($res);
                                $full_name = $row['full_name'];
                                $username = $row['username'];
                            
                            }else{
                                //redirect to manage admin page
                                header('location:'.HOME_URL.'admin/manage-admin.php');
                            }
                        }
                    
                    ?>
                  <form action="" method="POST" >
                    <div class="row">
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                          <input class="form-control"  name="full_name" type="text" value="<?php echo $full_name;?>"><br>
                      </div>
                      <div class= "col-md-6 col-12 text-content text-center pb-2">
                        <input class="form-control"  name="username" type="text" value= "<?php echo $username;?>"><br>
                      </div>
                       
                      <div class= "col-md-4 col-12 text-content text-center pb-2">
                        <input type="hidden" name= "id" value="<?php echo $id;?>">
                        <input class="main-btn"  name="submit" type= "submit" value="Update Admin"><br>
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
        //echo "Button Clicked";
        //Get all the value from form to update
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        //Createa SQL Query to Update Admin
        $sql = "UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username'
        WHERE id= '$id'
        ";

        //Execute the Query
        $res = mysqli_query($conn, $sql);
        
        //Check whether the query successfully executed or not 
        if($res == true){
            //Query Executed and Admin updated
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";
            //Redirect to manage admin page
            //header("location:".HOME_URL.'admin/manage-admin.php');
            echo "<script> window.location.href= 'http://localhost/food-order/admin/manage-admin.php'; </script> ";
        }else{

            //Failed to update 
            $_SESSION['update'] = "<div class='error'>Admin Updated Failed.</div>";
            //Redirect to manage admin page
            //header("location:".HOME_URL.'admin/manage-admin.php');
            echo "<script> window.location.href= 'http://localhost/food-order/admin/manage-admin.php'; </script> ";
        }
    }
?>
<?php include('partials/footer.php'); ?> 
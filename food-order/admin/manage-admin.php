<?php include('partials/menu.php'); ?>
<section id="contact">
          <div class= "contact wrapper">
            <div class= "container">
              <div class= "row">
                <div class="col-sm-12">
                  <div class="row">
                    <?php
                    if(isset($_SESSION['add'])){
                      echo $_SESSION['add']; //Displaying session message
                      unset($_SESSION['add']); //Removing Session message
                    }
                    if(isset($_SESSION['delete'])){
                      echo $_SESSION['delete'];
                      unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['update'])){
                      echo $_SESSION['update'];
                      unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user_not_found'])){
                      echo $_SESSION['user_not_found'];
                      unset($_SESSION['user_not_found']);
                    }

                    if(isset($_SESSION['password_mismatch'])){
                      echo $_SESSION['password_mismatch'];
                      unset($_SESSION['password_mismatch']);
                    }

                    if(isset($_SESSION['password_match'])){
                      echo $_SESSION['password_match'];
                      unset($_SESSION['password_match']);
                    }

                    ?>
                  </div>
                  <div class= "text-content text-center pb-4">
                    <br/>
                    <h2>Manage Admin</h2>
                    <!--Button admin-->
                    <a class="main-btn mt-4" href="add-admin.php" >Add Admin</a>
                  </div>
                  <div class="row">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">SL</th>
                          <th scope="col">Full Name</th>
                          <th scope="col">Username</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          //Query to get all admin
                          $sql = "SELECT * FROM tbl_admin";
                          //Execute the Query
                          $res = mysqli_query($conn, $sql);

                          //Check wheter the Query is Executed or not
                          if($res== TRUE)
                          {
                            //COunt Rows to Check whether we have data in the database or not
                            $count = mysqli_num_rows($res);

                            $sn= 1;

                            //Check the num of rows
                            if($count> 0){
                              // We have data in database
                              while($rows= mysqli_fetch_assoc($res)){
                                //using while loop to get all the data from the database 
                                
                                //Getting individual data 
                                $id = $rows['id'];
                                $full_name = $rows['full_name'];
                                $username = $rows['username'];

                                //Display the values in our table 
                                ?>
                                <tr>
                                  <th scope="row"><?php echo $sn++; ?></th>
                                  <td><?php echo $full_name; ?></td>
                                  <td><?php echo $username; ?></td>
                                  <td>
                                    <a class="btn-main" href= "<?php echo HOME_URL; ?>admin/update-password.php?id=<?php echo $id;?>">Change Password</a>
                                    <a class="btn-secondary" href="<?php echo HOME_URL; ?>admin/update-admin.php?id=<?php echo $id;?>"> Update Admin </a>
                                    <a class="btn-danger" href="<?php echo HOME_URL; ?>admin/delete-admin.php?id=<?php echo $id; ?>"> Delete Admin </a>
                                  </td>
                                </tr>
                                <?php
                              }
                            }else{
                              //We don't have database
                            }
                          }
                        ?>
                        
                      </tbody>
                    </table>
                    
                </div>
              </div>
            </div>
          </div>
        </section>
<?php include('partials/footer.php'); ?>
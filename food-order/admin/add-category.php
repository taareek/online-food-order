<?php include('partials/menu.php'); ?>
<section id="contact">
          <div class= "contact wrapper">
            <div class= "container">
              <div class= "row">
                <div class="col-sm-12">
                  <div class= "text-content text-center pb-4">
                    <h2>Add Food Category</h2>
                    <!--Button add food category-->
                    <?php 
        
                        if(isset($_SESSION['add']))
                        {
                            echo $_SESSION['add'];
                            unset($_SESSION['add']);
                        }

                        if(isset($_SESSION['upload']))
                        {
                            echo $_SESSION['upload'];
                            unset($_SESSION['upload']);
                        }
                    
                    ?>
                  
                  </div>
                  <div class= "row">
                    <form action= "" method= "POST">
                        <table class= "table">
                            <tr>
                                <td>Title: </td>
                                <td>
                                    <input type= "text" name= "title" placeholder= "Category Title">
                                </td>
                            </tr>
                            <tr>
                                <td>Featured: </td>
                                <td>
                                    <input type= "radio" name= "featured" value= "Yes"> Yes
                                    <input type= "radio" name= "featured" value= "No"> No
                                </td>
                            </tr>
                            <tr>
                                <td>Active: </td>
                                <td>
                                    <input type= "radio" name= "active" value= "Yes"> Yes
                                    <input type= "radio" name= "active" value= "No"> No
                                </td>
                            </tr>
                            <tr>
                                <td colspan= "2">
                                    <!--Button add food category-->
                                    <input type= "submit" name= "submit" value= "Add Category" class= "main-btn mt-4">
                                     
                                </td>
                            </tr> 
                        </table>

                    </form>
                    <!-- Catagory forms ends here -->
                    
                    <?php
                        //Check the button is working or not 
                        if(isset($_POST['submit'])){
                            //echo "Clicked";
                            //1. Get the Value from CAtegory Form
                            $title = $_POST['title'];

                            //For Radio input, we need to check whether the button is selected or not
                            if(isset($_POST['featured'])){
                                //Get the value form from
                                $featured = $_POST['featured'];

                            }else{
                                //Set the default value
                                $featured = "No";

                            }
                            if (isset($_POST['active'])){
                                $active = $_POST['active'];
                            }else{
                                $active = "No"; 
                            }
                            //Create sql query to insert category into database
                            $sql = "INSERT INTO tbl_food_category SET
                                    title = '$title',
                                    featured = '$featured',
                                    active = '$active'
                            ";

                            //Execute the query and saved in databse
                            $res = mysqli_query($conn, $sql);

                            //Check the query executed or not
                            if($res == true){
                                //Query Executed
                                $_SESSION['add'] = "<div class='success'>Food Category Added successfully.</div>";
                                //Redirect to manage category page
                                echo "<script> window.location.href= 'http://localhost/food-order/admin/manage-food-category.php'; </script> ";

                            }else{
                                //Failed to add category
                                $_SESSION['add'] = "<div class='error'>Food Category Added Failed!</div>";
                                //Redirect to manage category page
                                echo "<script> window.location.href= 'http://localhost/food-order/admin/add-category.php'; </script> ";

                            }
                

                        }
                    ?>
                   
                </div>
              </div>
            </div>
          </div>
        </section>
<?php include('partials/footer.php');?>
 
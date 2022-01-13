<?php
    //Include constants.php file here
    include('../config/constants.php'); 
    //Get the ID of aadmin which will be deleted
    $id = $_GET['id'];
    //Create SQL Query to delete the admin
    $sql = "DELETE FROM tbl_admin WHERE id= $id";

    //Execute the Query
    $res = mysqli_query($conn, $sql);
    //Check wheter the query executed successfully or not
    if($res==true){
        //Query executed successfully 
        //echo "Admin Deleted Successfully !";
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully. </div>";

        //Redirect to manage admin page
        header("location:".HOME_URL.'admin/manage-admin.php');
    }else{
        //Failed to Delete Admin 
        //echo "Failed to delete Admin !!";

        $_SESSION['delete'] = "<div class='error'>Failed to Delete, Try again.</div>";
        header("location:".HOME_URL.'admin/manage-admin.php');
    }
    //Redirect to manage admin page with messages
    

?>
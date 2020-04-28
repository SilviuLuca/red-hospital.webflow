<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $user_delete = $_GET['delete'];

        $query = "DELETE FROM users WHERE id = {$user_delete} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: users.php");

    }
?>
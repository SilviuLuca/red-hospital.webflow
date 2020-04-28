<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_blog = $_GET['delete'];

        $query = "DELETE FROM blog WHERE id = {$delete_blog} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-blog.php");

    }
?>
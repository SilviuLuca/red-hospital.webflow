<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_promotii = $_GET['delete'];

        $query = "DELETE FROM promotii WHERE id = {$delete_promotii} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-promotii.php");

    }
?>
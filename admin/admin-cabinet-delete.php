<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_cabinet = $_GET['delete'];

        $query = "DELETE FROM cabinet WHERE id = {$delete_cabinet} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-cabinet.php");

    }
?>
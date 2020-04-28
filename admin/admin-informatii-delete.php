<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_informatii = $_GET['delete'];

        $query = "DELETE FROM informatii WHERE id = {$delete_informatii} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-informatii.php");

    }
?>
<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_certificari = $_GET['delete'];

        $query = "DELETE FROM certificari WHERE id = {$delete_certificari} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-certificari.php");

    }
?>
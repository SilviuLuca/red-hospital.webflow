<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_gdpr = $_GET['delete'];

        $query = "DELETE FROM gdpr WHERE id = {$delete_gdpr} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-gdpr.php");

    }
?>
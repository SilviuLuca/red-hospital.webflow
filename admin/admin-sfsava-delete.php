<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_sfsava = $_GET['delete'];

        $query = "DELETE FROM sfsava WHERE id = {$delete_sfsava} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-sfsava.php");

    }
?>
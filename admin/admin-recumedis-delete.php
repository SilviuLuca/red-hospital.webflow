<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_recumedis = $_GET['delete'];

        $query = "DELETE FROM recumedis WHERE id = {$delete_recumedis} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-recumedis.php");

    }
?>
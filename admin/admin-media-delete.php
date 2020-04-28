<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_sfaturi = $_GET['delete'];

        $query = "DELETE FROM sfaturi WHERE id = {$delete_sfaturi} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-media.php");

    }
?>
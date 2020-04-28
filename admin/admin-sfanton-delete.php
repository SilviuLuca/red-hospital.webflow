<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_sfanton = $_GET['delete'];

        $query = "DELETE FROM sfanton WHERE id = {$delete_sfanton} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-sfanton.php");

    }
?>
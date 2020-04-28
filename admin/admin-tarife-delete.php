<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_tarife = $_GET['delete'];

        $query = "DELETE FROM tarife WHERE id = {$delete_tarife} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-tarife.php");

    }
?>
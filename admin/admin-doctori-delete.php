<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $doctori_delete = $_GET['delete'];

        $query = "DELETE FROM doctori WHERE id = {$doctori_delete} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-doctori.php");

    }
?>
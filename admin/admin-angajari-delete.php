<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_angajari = $_GET['delete'];

        $query = "DELETE FROM angajari WHERE id = {$delete_angajari} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-angajari.php");

    }
?>
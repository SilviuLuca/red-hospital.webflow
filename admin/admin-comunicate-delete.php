<?php

include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_comunicate = $_GET['delete'];

        $query = "DELETE FROM comunicate WHERE id = {$delete_comunicate} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-comunicate.php");

    }
?>

<?php

include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_codetica = $_GET['delete'];

        $query = "DELETE FROM comunicate WHERE id = {$delete_codetica} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-comunicate.php");

    }
?>

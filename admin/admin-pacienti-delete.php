<?php

include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_pacienti = $_GET['delete'];

        $query = "DELETE FROM pacienti WHERE id = {$delete_pacienti} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-pacienti.php");

    }
?>

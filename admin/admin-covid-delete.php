<?php

include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_covid = $_GET['delete'];

        $query = "DELETE FROM covid WHERE id = {$delete_covid} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-covid.php");

    }
?>

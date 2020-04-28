<?php 
            
include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $delete_produs = $_GET['delete'];

        $query = "DELETE FROM grupuliasisting WHERE id = {$delete_produs} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: grupul-iasisting.php");

    }
?>
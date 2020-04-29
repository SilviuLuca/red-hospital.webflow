<?php

include ('include-admin/db.php');
if (isset($_GET['delete'])) {

        $newsletter_delete = $_GET['delete'];

        $query = "DELETE FROM newsletter WHERE id = {$newsletter_delete} ";
        $delete_query = mysqli_query($connection,$query);

        header ("Location: admin-newsletter.php");

    }
?>

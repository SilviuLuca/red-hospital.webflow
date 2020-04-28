<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iasisting - Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/styleadmin.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bitcover Admin Panel</a>
            </div>
            
            <?php include 'include-admin/nav-admin.php'; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Editeaza Utilizatorul
                            
                        </h1>
                        
                    </div>
                    
                    <div class="col-md-12">
                         
                        
                        
                       <div class="col-md-12">
                         
                    
                        <?php 
                            
                           include "include-admin/db.php";
                           
                                           
                           if (isset($_GET['update'])) {

                                $user_id = $_GET['update'];
                               
                               
                            }

                            $query = "SELECT * FROM users WHERE id = {$user_id} ";
                            $update_query = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($update_query)) {
                                    $user_nume = $row['nume'];
                                    $user_email = $row['email'];
                                    $user_role_stabilit = $row['role'];
                                
                            }  
                           
                               
                           
                           if (isset($_POST['submit'])) {
                                $user_nume = $_POST['nume'];
                                $user_email = $_POST['email'];
                                $user_role = $_POST['user_role'];
                         
    
                                $sql = "UPDATE users SET nume='$user_nume', email='$user_email', role='$user_role' WHERE id = '$user_id'";
                               
                                            
                                $query = mysqli_query($connection, $sql);
                               
                               if (! $query) {
                                   die("QUERY FAILED" . mysqli_error($connection));

                               }
                               
                               
                        ?>
                           
                           
                            <script type="text/javascript">
                                window.location = "users.php";
                            </script>    
                               
                        <?php
                               
                           }
                              
                        ?>
                           
                           
                           
                           <form action="" method="post" enctype="multipart/form-data">
                            
                            <label for="nume">Nume: </label>
                            <input type="text" id="nume" name="nume" value = "<?php echo $user_nume; ?>" required>
                            
                            <label for="email">Email: </label>
                            <input type="email" name="email" id="email" value = "<?php echo $user_email; ?>" required>
                            
                            <label for="user_role">Rolul utilizatorului: </label>
                            <select name="user_role" id="user_role" required>
                                <option value = "<?php echo $user_role_stabilit; ?>">Rolul stabilit: <?php echo $user_role_stabilit; ?></option>
                                
                                <?php
                                    include 'include-admin/db.php';
                                    
                                    $sql = "SELECT * FROM users_role";
                                    $query = mysqli_query ($connection,$sql);

                                    while ($row = mysqli_fetch_assoc($query)) {
                                        $role_id = $row['id'];
                                        $role_nume = $row['role'];
                                   
                                        echo "<option value='{$role_nume}'>{$role_nume}</option>" ;      
                                    }
                                
                                ?>
                            
                            </select>
                            
                            <label></label>
                            <input name="submit" type="submit" value="Adauga" class="btn btn-primary">
                            
                           
                        </form>
                                
                           
                           
                        
                                
                                     
                                  
                            
                            <?php 

                                
                                mysqli_close($connection);
                        
                            ?>
                           
                           
                           
                                
                           
                    </div>
                         
                        
                        
                        
                    </div>
                    
                    
               
                    
                   
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
        CKEDITOR.replace( 'editor',
             {
                 filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                 filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                 filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                 filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
             });
    </script>

</body>

</html>



                    
                    
                    
                   
        
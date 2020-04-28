<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recumedis - Administrator</title>

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
                           Editeaza Doctorul
                            
                        </h1>
                        
                    </div>
                    
                    <div class="col-md-12">
                         
                        
                        
                       <div class="col-md-12">
                         
                    
                        <?php 
                            
                           include "include-admin/db.php";
                           
                                           
                           if (isset($_GET['update'])) {

                                $doctori_id = $_GET['update'];
                               
                               
                            }

                            $query = "SELECT * FROM doctori WHERE id = {$doctori_id} ";
                            $update_query = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($update_query)) {
                                    $doctori_nume = $row['nume'];
                                    $doctori_functie = $row['functie'];
                                
                            }  
                           
                               
                           
                           if (isset($_POST['submit'])) {
                                $doctori_nume = $_POST['nume'];
                                $doctori_functie = $_POST['functie'];
                         
    
                                $sql = "UPDATE doctori SET nume='$doctori_nume', functie='$doctori_functie' WHERE id = '$doctori_id'";
                               
                                            
                                $query = mysqli_query($connection, $sql);
                               
                               if (! $query) {
                                   die("QUERY FAILED" . mysqli_error($connection));

                               }
                               
                               
                        ?>
                           
                           
                            <script type="text/javascript">
                                window.location = "admin-doctori.php";
                            </script>    
                               
                        <?php
                               
                           }
                              
                        ?>
                           
                           
                           
                           <form action="" method="post" enctype="multipart/form-data">
                            
                            <label for="nume">Nume: </label>
                            <input type="text" id="nume" name="nume" value = "<?php echo $doctori_nume; ?>" required size="100">
                            
                            <label for="email">Functia: </label>
                            <input type="text" name="functie" id="functie" value = "<?php echo $doctori_functie; ?>" required size="200">
                            
        
                            
                            
                            <label></label>
                            <input name="submit" type="submit" value="Modifica" class="btn btn-primary">
                            
                           
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



                    
                    
                    
                   
        
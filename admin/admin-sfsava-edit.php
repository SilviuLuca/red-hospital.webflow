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
    
    <link href="dist/summernote.min.css" rel="stylesheet">

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
                           Editeaza pagina Spitalului Sf Sava
                            
                        </h1>
                        
                    </div>
                    
                    <div class="col-md-12">
                         
                        
                        
                       <div class="col-md-12">
                         
                    
                        <?php 
                            
                           require "include-admin/db.php";
                           
                                           
                           if (isset($_GET['update'])) {

                                $update_sfsava_id = $_GET['update'];
                               
                            }

                            $query = "SELECT * FROM sfsava WHERE id = {$update_sfsava_id} ";
                            $update_query = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($update_query)) {
                                    $sfsava_categorie = $row['categorie'];
                                    $sfsava_titlu = $row['titlu'];
                                    $sfsava_id = $row['id'];                               
                                    $sfsava_continut = $row['continut'];
                                
                            }  
                           
                               
                           
                           if (isset($_POST['submit'])) {
                                
                                $categorie = $_POST['categorie'];
                                $titlu = $_POST['titlu'];
                                $continut = mysqli_real_escape_string($connection, $_POST['content']);
                  
                                $sql = "UPDATE sfsava SET categorie='$categorie', titlu='$titlu', continut='$continut' WHERE id = '$update_sfsava_id'";
                               
                                            
                                $query = mysqli_query($connection, $sql);
                               
                               if (! $query) {
                                   die("QUERY FAILED" . mysqli_error($connection));

                               }
                               
                               
                        ?>
                           
                           
                            <script type="text/javascript">
                                window.location = "admin-sfsava.php";
                            </script>    
                               
                        <?php
                               
                           }
                              
                        ?>
                           
                           
                           <form action="" method="POST" onSubmit="window.location.reload()" enctype="multipart/form-data">
                            
                            <label for="categoria">Categoria: </label>
                            <input type="text" id="categorie" name="categorie" value = "<?php echo $sfsava_categorie; ?>" >
                            
                            <label for="nume">Titlu: </label>
                            <input type="text" value = "<?php echo $sfsava_titlu; ?>" name="titlu" id="titlu">

                            <label for="editor">Continut: </label>
                            <textarea cols="100" rows="12"  id="summernote"  name="content"><?php echo $sfsava_continut; ?>
                                    
                            </textarea>
                                            
                            <label></label>
                            <input name="submit" type="submit" value="Modifica" class="btn btn-primary" >
                            
                           
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
    
    <script src="dist/summernote.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
</body>

</html>



                    
                    
                    
                   
        


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
    
   
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  
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
                            Angajari
                            
                        </h1>
                        
                    </div>
                    
                    <div class="col-md-12">
                         
                        
                        
                        <table class="table table-bordered table-hover">
                            <tr>
                             <th>Nume</th>
                             <th>Categorie</th>
                            </tr>
                            
                            
                            <?php
                                require 'include-admin/db.php';

                                $query = "SELECT * FROM angajari";
                                $select_all_angajari = mysqli_query($connection,$query);
                            
                                
                                while ($row = mysqli_fetch_assoc($select_all_angajari)) {
                                    $angajari_categorie = $row['categorie'];
                                    $angajari_titlu = $row['titlu'];
                                    $angajari_id = $row['id'];
                                ?>
                            
                            
                         
                            
                             
                             <tr>
                                <td><?php echo $angajari_titlu; ?></td>
                                <td><?php echo $angajari_categorie; ?></td>
                                <td><a href="admin-angajari-delete.php?delete=<?php echo $angajari_id ?>" class="btn btn-danger" onclick="return confirm('Sigur vrei sa stergi?')">Stergere</a></td>
                                 <td><a href="admin-angajari-edit.php?update=<?php echo $angajari_id ?>" class="btn btn-success">Modifica</a></td>
                             </tr>
                            
                              <?php 
                                
                                }
                            ?>
                            
                        </table>
                        
                         
                        
                        
                        
                    </div>
                    
                    
                    <div class="col-md-12">
                        <h2>Adauga textul</h2>
                        <form action="admin-angajari-adauga.php" method="post" enctype="multipart/form-data">
                            
                            <label for="categoria">Categoria: </label>
                            <input type="text" id="categorie" name="categorie">
                            
                            <label for="nume">Titlu: </label>
                            <input type="text" name="nume" id="nume">
                            
                            <label for="editor">Continut: </label>
                            <textarea cols="100" rows="12" id="summernote" name="content"></textarea>
                                                    
                            <label></label>
                            <input name="submit" type="submit" value="Adauga" class="btn btn-primary">
                            
                           
                        </form>
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
        $('#summernote').summernote({placeholder: 'completeaza...'});
    });
  </script>

</body>

</html>

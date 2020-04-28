

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
                            Tarife
                            
                        </h1>
                        
                    </div>
                    
                    <div class="col-md-12">
                         
                        
                        
                        <table class="table table-bordered table-hover">
                            <tr>
                             <th>Nume</th>
                             <th>Categorie</th>
                             <th>Foto</th>
                             </tr>
                            
                            
                            <?php
                                include 'include-admin/db.php';

                                $query = "SELECT * FROM tarife";
                                $select_all_tarife = mysqli_query($connection,$query);

                                while ($row = mysqli_fetch_assoc($select_all_tarife)) {
                                    $tarife_categorie = $row['categorie'];
                                    $tarife_titlu = $row['titlu'];
                                    $tarife_fotografie = $row['imagine'];
                                    $tarife_id = $row['id'];
                                ?>
                            
                            
                         
                            
                             
                             <tr>
                                <td><?php echo $tarife_titlu; ?></td>
                                <td><?php echo $tarife_categorie; ?></td>
                                <td><img src="../images/blog/<?php echo $tarife_fotografie; ?>" style="max-width:50px"></td>
                                <td><a href="admin-tarife-delete.php?delete=<?php echo $tarife_id ?>" class="btn btn-danger" onclick="return confirm('Sigur vrei sa stergi?')">Stergere</a></td>
                                 <td><a href="admin-tarife-edit.php?update=<?php echo $tarife_id ?>" class="btn btn-success">Modifica</a></td>
                             </tr>
                            
                              <?php 
                                
                                }
                            ?>
                            
                        </table>
                        
                         
                        
                        
                        
                    </div>
                    
                    
                    <div class="col-md-12">
                        <h2>Adauga articol</h2>
                        <form action="admin-tarife-adauga.php" method="post" enctype="multipart/form-data">
                            
                            <label for="categoria">Categoria: </label>
                            <input type="text" id="categorie" name="categorie">
                            
                            <label for="nume">Titlu: </label>
                            <input type="text" name="nume" id="nume">
                            
                            <label for="imagine">Imagine: (ATENTIE: maxim 2mb) </label>
                            <input type="file" name="imagine" id="imagine">
                            
                            <label for="editor">Continut: </label>
                            <textarea cols="100" rows="12"  id="editor"  class="ckeditor" name="content"></textarea>
                            
                            <label for="nume">Taguri: </label>
                            <input type="text" name="tags" id="tags">
                            
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

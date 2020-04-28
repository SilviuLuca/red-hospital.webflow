

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
                <a class="navbar-brand" href="#">Bitcover Admin Panel</a>
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
                            Grupul de firme Iasisting
                            
                        </h1>
                        
                    </div>
                    
                    <div class="col-md-12">
                         
                        
                        
                       <div class="col-md-12">
                          <?php 
                            
                           include "include-admin/db.php";
                           
                                
                                $titlu = $_POST['titlu'];
                                $imagine = $_FILES['imagine']['name'];
                                $imagine_tmp = $_FILES['imagine']['tmp_name'];
                                $imagine_size = $FILES['imagine']['size'];
                                $continut = $_POST['content'];
                        
                                if (isset($_POST['submit'])) {
                                    
                                    $target = "../images/grupul/" . basename($_FILES['imagine']['name']);
                                    
                                    
                                    
                                    if (move_uploaded_file($_FILES['imagine']['tmp_name'], $target)) {
                                        $msg = "Image uploaded successfully";
                                        $sql = "INSERT INTO grupuliasisting (titlu,imagine,continut) VALUE ('$titlu', '$imagine', '$continut')";    
                                        $query = mysqli_query($connection, $sql);
                                        
                                    }  else {
                                        $msg = "Eroare la incarcare imagine. Probabil s-a depasit dimensiunea de 2mb.";
                                        echo $msg;
                                    }
                                    
                                    if ($query) {
                                        echo 'Articol adaugat cu succes.';
                                    } else {
                                        echo 'Eroare la adaugare in baza de date.';
                                    }
                                    
                                }
                            
                                

                        
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



                    
                    
                    
                   
        
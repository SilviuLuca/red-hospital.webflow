

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
                            Newsletter
                            
                        </h1>
                        
                    </div>
                    
                    
                    <div class="col-md-12">
                        <h2>Mail</h2>
                        
                        
                        
                        
                        
                       <?php
                        
                            include 'include-admin/db.php'; 
                            if (isset($_POST['submit'])) {
                                    
                                
                                $sender_name = $_POST['nume'];
                                $sender_email = 'office@iasisting.ro';
                                $subject = $_POST['subject'];
                                $mesaj = $_POST['content'];
                                $to_email = $_POST['to_email'];
                                
                                if ($to_email == 1) {
                                    $sql = 'SELECT * FROM users';
                                } else {
                                    $sql = "SELECT * FROM users WHERE role ='".$to_email."'";
                                                            

                            }
                    
                                    $query = mysqli_query ($connection, $sql);
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        $cursuri_categorie = $row['categorie'];
                                        $to = $row['email'];  
                                        $headers  = "From: $sender_name < $sender_email >\n";
                                        $headers .= "X-Sender: $sender_name < $sender_email >\n";
                                        $headers .= 'X-Mailer: PHP/' . phpversion();
                                        $headers .= "X-Priority: 1\n"; // Urgent message!
                                        $headers .= "Return-Path: $sender_email\n"; // Return path for errors
                                        $headers .= "MIME-Version: 1.0\r\n";
                                        $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

                                        mail($to,$subject,$mesaj,$headers);

                                        
                                    }
                                
                                   echo 'Mesajul a fost trimis cu succes.';  

                            } else {
                                echo 'Mesajul nu a plecat.';
                            }
                        ?>
                        
                        
                        
                        
                        
                        
                        
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

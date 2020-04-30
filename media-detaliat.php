<?php include 'includes/db.php'; ?>


 <?php


        if (isset($_GET['blog'])) {

            $sfaturi_id = $_GET['blog'];
            $query = "SELECT * FROM sfaturi WHERE id = {$sfaturi_id} ";
            $select_sfaturi = mysqli_query ($connection,$query);

        }

        while ($row = mysqli_fetch_assoc($select_sfaturi)) {

            $sfaturi_interogat_titlu = $row['titlu'];
            $sfaturi_interogat_categorie = $row['categorie'];
            $sfaturi_interogat_imagine = $row['imagine'];
            $sfaturi_interogat_tags = $row['tags'];
            $sfaturi_interogat_date = $row['date'];
            $sfaturi_interogat_continut = $row['continut'];
            $sfaturi_interogat_id = $row['id'];

        ?>


<!DOCTYPE html>

<html>
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131420019-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-131420019-4');
  </script>

    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:image" content="http://www.recumedis.ro/images/blog/<?php echo $sfaturi_interogat_imagine; ?>" />
    <meta property="og:title" content="Media" />

  <meta charset="utf-8">
  <title><?php echo $sfaturi_interogat_titlu; ?></title>



  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/red-hospital.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body-11">


    <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>



  <div class="first-line-top">
    <div class="container-2 w-container">
      <div class="phone-program-first-line">
        <div class="text-block"></div><a href="tel:+40232230332" class="link">0232 230 332</a>
        <div class="text-block-6"></div>
        <div class="text-block-7">Lun-Vin 08:00 - 17:00</div>
        <div class="text-block-8"></div>
        <div class="text-block-9">office@sfsava.ro</div>
      </div>
      <div class="social-media-my-account"><a href="https://www.facebook.com/RedHospitalSpitalulSfSava/" class="social-buttons" target="_blank" class="social-buttons"></a>
        <a href="spitale-formular-de-satistactie.php" target="_blank" class="link-block w-inline-block">
          <div class="text-block-15 formulare">Formulare</div>
        </a>
        <a href="http://clienti.recumedis.ro" target="_blank" class="link-block w-inline-block">
          <div class="text-block-15">Acces Clienti</div>
        </a>
      </div>
    </div>
  </div>
  <div class="logo-line">
    <div class="container-3 w-container"><a href="http://www.recumedis.ro" class="logo w-inline-block"><img src="images/hf.png" alt=""><div class="text-block-11">SPITALELE DE PALIAȚIE<br>ȘI RECUPERARE MEDICALĂ</div></a>
      <div class="div-block-2">
        <div><img src="images/logo-unit-in-proces-de-acreditare.png" width="100" srcset="images/logo-unit-in-proces-de-acreditare-p-500.png 500w, images/logo-unit-in-proces-de-acreditare-p-800.png 800w, images/logo-unit-in-proces-de-acreditare-p-1080.png 1080w, images/logo-unit-in-proces-de-acreditare-p-1600.png 1600w, images/logo-unit-in-proces-de-acreditare-p-2000.png 2000w, images/logo-unit-in-proces-de-acreditare.png 2369w" sizes="(max-width: 479px) 42vw, 100px" alt="" class="image"></div>
        <div class="text-block-12"></div>
        <div class="text-block-13">Sunați acum <br><br><span><strong>0232 230 332</strong></span></div>
        <div class="text-block-14"></div>
        <div class="text-block-13 locatia">Locatia<br><br><span><strong class="bold-text">Iasi, Str. Mitropolit Varlaam</strong></span></div>
      </div>
    </div>
  </div>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="w-container">

        <?php include 'includes/nav.php'; ?>

      <div class="menu-button w-nav-button">
        <div class="icon w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="breadcrumb">
    <div class="container-8 w-container">
      <div class="text-block-24"></div>
      <div class="text-block-22">Te afli aici: </div><a href="http://www.recumedis.ro" class="link-bread">Acasa</a>
      <div class="text-block-23"> &gt;</div><a href="media.php" class="link-bread">Media</a>
      <div class="text-block-23"> &gt;</div><a href="media-detaliat.php?blog=<?php echo $sfaturi_interogat_id; ?>" class="link-bread"><?php echo $sfaturi_interogat_titlu; ?></a></div>
  </div>
  <div class="spitale-informatii-generale">
    <div class="w-container">
      <h3 class="heading-3"><strong>Elemente media</strong></h3>
    </div>
  </div>

    <?php }; ?>

    <?php
            include 'includes/db.php';



      ?>


  <div class="section-6">
    <div class="w-container">



        <div class="div-block-9 all-blog-text">
          <h4><?php echo $sfaturi_interogat_titlu; ?></h4>
          <div class="text-block-39">
              Postat: <span class="text-span-3"><?php echo $sfaturi_interogat_date; ?></span> -
              Autor: <span class="text-span-2">Recumedis</span> -
              Categoria: <span class="text-span"><?php echo $sfaturi_interogat_categorie; ?></span>
            </div>

          <div class="text-block-40">


              <div class="imagine-left"><img src="images/blog/<?php echo $sfaturi_interogat_imagine; ?>" alt="" width="320px"></div>
              <div class="text-blog-right"><p><?php echo $sfaturi_interogat_continut; ?></p>

              <div class="fb-share-button" data-href="http://www.recumedis.ro/media-detaliat.php?blog=<?php echo $sfaturi_id; ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>


              </div>



          </div>



          </div>
      </div>
    </div>









    <?php include 'includes/footer.php'; ?>

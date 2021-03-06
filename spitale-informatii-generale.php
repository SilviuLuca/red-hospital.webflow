<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Dec 05 2019 10:10:21 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5dde718c63de4e0512653840" data-wf-site="5ddba24dd31f0f85cd6cc289">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131420019-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-131420019-4');
  </script>
  <meta charset="utf-8">
  <title>spitale-informatii-generale</title>
  <meta content="spitale-informatii-generale" property="og:title">
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
    <link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#222222","text":"#ffffff","border":"#b4eae4"},"button":{"background":"#b4eae4","text":"#000000"}},"position":"top","content":{"href":"https://www.recumedis.ro/gdpr.php","message":"Site-ul nostru utilizează module cookie proprii și de la partenerii noștri pentru a-ți îmbunătăți experiența și pentru a-ți afișa conținut sau anunțuri personalizate, relevante pentru tine.\n          Continuă să navighezi pe site sau alege să accepți dacă ești de acord cu utilizarea acestora.","button":"Accept!","link":"Detalii GDPR"},"pushdown":true})});</script>
</head>
<body class="body-2">

  <?php include 'includes/first-line.php'?>

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

        <?php
            //aici vine codul care citeste textul din termeni si conditii
            require 'includes/db.php';
            $query = "SELECT * FROM informatii";
            $update_query = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($update_query)) {
                    $info_categorie = $row['categorie'];
                    $info_titlu = $row['titlu'];
                    $info_id = $row['id'];
                    $info_continut = $row['continut'];



            ?>


      <div class="menu-button w-nav-button">
        <div class="icon w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="breadcrumb">
    <div class="container-8 w-container">
      <div class="text-block-24"></div>
      <div class="text-block-22">Te afli aici: </div><a href="http://recumedis.ro" class="link-bread">Acasa</a>
      <div class="text-block-23"> &gt;</div><a href="spitale-informatii-generale.php" class="link-bread"><?php echo $info_titlu; ?></a></div>
  </div>
  <div class="spitale-informatii-generale">
    <div class="w-container">
      <h3 class="heading-3"><?php echo $info_titlu; ?></h3>
    </div>
  </div>
  <div class="section-6">
    <div class="w-container">
      <div class="w-row">
        <div class="w-clearfix w-col w-col-3">


            <?php include 'includes/menu-left-side.php'; ?>



          <div class="program spitale">
            <?php include 'includes/program-de-lucru.php'; ?>
          </div>
          
        </div>
        <div class="column-3 w-col w-col-9">
          <div class="text-block-25">


            <?php echo $info_continut; ?>


            </div>

            <?php } ?>





            <div class="doctori w-clearfix">
            <?php
            //aici vine codul care citeste textul din termeni si conditii
            require 'includes/db.php';
            $query = "SELECT * FROM doctori";
            $update_query = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($update_query)) {
                    $doctori_nume = $row['nume'];
                    $doctori_functie = $row['functie'];



            ?>

            <div class="div-block-7">
              <div class="text-block-27"></div>
              <h4 class="heading-5"><?php echo $doctori_nume; ?></h4>
              <div class="text-block-26"><?php echo $doctori_functie; ?></div>
            </div>

           <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>


    <?php include 'includes/footer.php'; ?>

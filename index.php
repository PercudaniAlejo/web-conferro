<!DOCTYPE html>
<html>
  <head>
    <title>CONFERRO - MUEBLES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
    font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="css/header-reponsive.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- FOOTER -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


<!-- -------------------------- -->
        <!-- NAVEGACIÓN -->
<!-- -------------------------- -->
 <div class="topnav" id="myTopnav">
  <img src="img/conferro.jpg" alt="">  

  <a href="#">INICIO</a>
  <a href="html/categories.php">PRODUCTOS</a>
  <a href="#contact">CONTACTO</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()" id="btn-option">
    <i class="fa fa-bars"></i>
  </a>
</div>


<!-- -------------------------- -->
        <!-- PORTADA -->
<!-- -------------------------- -->
<div id="myCarousel" class="carousel slide" data-interval="2500" data-ride="carousel">
      <!-- Carousel items -->
      <div class="carousel-inner">

        <!-- PRUEBA DE FOOTER EN EL CAROUSEL -->
        <div class="carousel-caption">
          <h5 id="footer__carousel">SOLDANDO IDEAS</h5>
        </div>

        <div class="item active">
          <img src="img/portada/photo6.jpg" alt="First Slide">
        </div>
        <div class="item">
          <img src="img/portada/photo4.jpg" alt="Third Slide">
          <div class="carousel-caption">  
        </div>
      </div>
      <div class="item">
          <img src="img/portada/photo3.jpg" alt="Third Slide">
          <div class="carousel-caption">  
        </div>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>


<!-- -------------------------- -->
        <!-- ¿QUIÉNES SOMOS? -->
<!-- -------------------------- -->
  <div class="separator">
    <h1>¿QUIÉNES SOMOS?</h1>
  </div>
  <div class="content-aboutUs">
    <p class="lead">
        Somos una empresa argentina especializada en construcciones ferrosas. En CONFERRO tenemos
        para ofrecerte una amplia gama de productos 
        y servicios relacionados al área metalúrgica.
    </p>wwwwwwwwwwwww
  </div>


  <!-- -------------------------- -->
            <!-- FOOTER -->
  <!-- -------------------------- -->
    <?php
      include ('footer/footer.php');
     ?>

     
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>

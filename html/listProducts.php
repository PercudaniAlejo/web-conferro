<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<title> LISTA DE PRODUCTOS </title>

	<link rel="stylesheet" href="../header/header.css">
  <link rel="stylesheet" href="../footer/footer.css">

  <link rel="stylesheet" href="../css/listProducts.css"> 

  <!-- ICONOS REDES FOOTER -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

</head>
<body>

	<!-- -------------------------- -->
            <!-- NAVEGACIÓN -->
    <!-- -------------------------- -->
    <div class="topnav" id="myTopnav">
      <img src="../img/conferro.jpg" alt="">  
      <a href="../index.php">INICIO</a>
      <a href="categories.php">PRODUCTOS</a>
      <a href="contact.php">CONTACTO</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()" id="btn-option">
        <i class="fa fa-bars"></i>
      </a>
    </div>

  <!-- -------------------------- -->
          <!-- PRODUCTOS -->
  <!-- -------------------------- -->
    <h1 class="titleProducts"> *NOMBRE DE CATEGORIA* </h1>

    <div class="cards">

      <div class="categorie__card">
        <img src="../img/fotoDePrueba2.jpg" alt="imgProduct">
        <div class="desc__categorie">
          <h5> PRODUCTO 1</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba2.jpg" alt="imgProduct">
        <div class="desc__categorie">
          <h5> PRODUCTO 2</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba2.jpg" alt="imgProduct">
        <div class="desc__categorie">
          <h5> PRODUCTO 3</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba2.jpg" alt="imgProduct">
        <div class="desc__categorie">
          <h5> PRODUCTO 4</h5>
        </div>
      </div>

      <div class="categorie__card">
        <img src="../img/fotoDePrueba2.jpg" alt="imgProduct">
        <div class="desc__categorie">
          <h5> PRODUCTO 5</h5>
        </div>
      </div>

      <div class="categorie__card">
        <img src="../img/fotoDePrueba2.jpg" alt="imgProduct">
        <div class="desc__categorie">
          <h5> PRODUCTO 6</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba2.jpg" alt="imgProduct">
        <div class="desc__categorie">
          <h5> PRODUCTO 7</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba2.jpg" alt="imgProduct">
        <div class="desc__categorie">
          <h5> PRODUCTO 8</h5>
        </div>
      </div> 


    <!-- -------------------------- -->
          	 <!-- FOOTER -->
    <!-- -------------------------- -->

    <?php
      include ('../footer/footer.php');
    ?>

    <script type="text/javascript" src="../js/main.js"></script> 
</body>
</html>
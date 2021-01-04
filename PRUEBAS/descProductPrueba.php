<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PRODUCT DESCRIPTION</title>

	<!-- CSS CUSTOM -->

  <!-- ICONOS REDES SOCIALES FOOTER -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

	<link rel="stylesheet" href="../css/header-reponsive.css">
	<link rel="stylesheet" href="../footer/footer.css">
	<link rel="stylesheet" href="../header/header.css">

  <link rel="stylesheet" type="text/css" href="descProductPruebaNew.css">
</head>
<body>

	<!-- -------------------------- -->
    	    <!-- NAVEGACIÓN -->
	<!-- -------------------------- -->
 	<div class="topnav" id="myTopnav">
 		<img src="../img/conferro.jpg" alt="">  
  		<a href="../index.php">INICIO</a>
  		<a href="../html/categories.php">PRODUCTOS</a>
  		<a href="#contact">CONTACTO</a>
  		<a href="javascript:void(0);" class="icon" onclick="myFunction()" id="btn-option">
    		<i class="fa fa-bars"></i>
  		</a>
	</div>
 

  <!-- -------------------------- -->
        <!-- PRODUCT DETAILS -->
  <!-- -------------------------- -->

    <div class="container">
      <img src="../img/productos/lampara-techo.jpg" alt="imageProduct">
      <div class="info__product">

        <div class="title__product">
          <h1 class="name_product"> LAMPARA DE TECHO </h1>
          <h2 class="id_product"> Nro. Pruducto #666 </h2>
        </div>

        <p class="description__product">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.  
        </p>

        <h4 class="moreDetail__product"> DETALLES DEL PRODUCTO: </h4>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
        </ul>

        <button class="btn_product">
          CONSULTAR
        </button>

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
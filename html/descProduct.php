<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PRODUCT DESCRIPTION</title>

	<!-- CSS CUSTOM -->
	<link rel="stylesheet" href="../css/descProduct.css">

	<link rel="stylesheet" href="../css/header-reponsive.css">
	<link rel="stylesheet" href="../footer/footer.css">
	<link rel="stylesheet" href="../header/header.css">

	<!-- FOOTER -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>

	<!-- -------------------------- -->
    	    <!-- NAVEGACIÓN -->
	<!-- -------------------------- -->
 	<div class="topnav" id="myTopnav">
 		<img src="../img/conferro.jpg" alt="">  
  		<a href="../index.php">INICIO</a>
  		<a href="../html/categories.php">PRODUCTOS</a>
  		<a href="contact.php">CONTACTO</a>
  		<a href="javascript:void(0);" class="icon" onclick="myFunction()" id="btn-option">
    		<i class="fa fa-bars"></i>
  		</a>
	</div>
 

  <!-- -------------------------- -->
        <!-- PRODUCT DETAILS -->
  <!-- -------------------------- -->

  <div class="container">

        <div class="card">
            <div class="images">
                <div class="imgProduct">
                  <img id="big-image" src="../img/fotoDePrueba.jpg" alt="">
                </div>

            </div>
            <div class="infos">
                <div id="more-infos">
                    <h5 class="choose">MESADA ESTILO MEDIEVAL CON VIDRIO POLARIZADO</h5>
                    <!-- FALTA ID PRODUCT -->
                </div>
                <div id="info-content">
                    <p  class="paragraph" style="display: block;">
                    <ul>
                      <li>CARACTERISTICA 1asdasdas</li>
                      <li>CARACTERISTICA 2</li>
                      <li>CARACTERISTICA 3</li>
                      <li>CARACTERISTICA 4didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation</li>
                      <li>CARACTERISTICA 5 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation</li>
                    </ul>
                    </p>

                    <a href="contact.php"><button id="add-to-cart">CONSULTAR</button></a>

                </div>
            </div>
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
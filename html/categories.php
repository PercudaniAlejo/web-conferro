<!DOCTYPE html>
<html>
  <head>
    <title>CATEGORIAS</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
   <link rel="stylesheet" href="../header/header.css">
   <link rel="stylesheet" href="../footer/footer.css">  
   <link rel="stylesheet" href="../css/categories.css">

    <!-- FOOTER -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
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
          <!-- CATEGORIAS -->
    <!-- -------------------------- -->

    <h1 class="titleProducts"> SELECCIONE UNA CATEGORÍA </h1>

    <div class="cards">

      <div class="categorie__card">
        <img src="../img/fotoDePrueba.jpg" alt="imgCategorie">
        <div class="desc__categorie">
          <h5> CATEGORIA 1</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba.jpg" alt="imgCategorie">
        <div class="desc__categorie">
          <h5> CATEGORIA 2</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba.jpg" alt="imgCategorie">
        <div class="desc__categorie">
          <h5> CATEGORIA 3</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba.jpg" alt="imgCategorie">
        <div class="desc__categorie">
          <h5> CATEGORIA 4</h5>
        </div>
      </div>

      <div class="categorie__card">
        <img src="../img/fotoDePrueba.jpg" alt="imgCategorie">
        <div class="desc__categorie">
          <h5> CATEGORIA 5</h5>
        </div>
      </div>

      <div class="categorie__card">
        <img src="../img/fotoDePrueba.jpg" alt="imgCategorie">
        <div class="desc__categorie">
          <h5> CATEGORIA 6</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba.jpg" alt="imgCategorie">
        <div class="desc__categorie">
          <h5> CATEGORIA 7</h5>
        </div>
      </div>
  
      <div class="categorie__card">
        <img src="../img/fotoDePrueba.jpg" alt="imgCategorie">
        <div class="desc__categorie">
          <h5> CATEGORIA 8</h5>
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

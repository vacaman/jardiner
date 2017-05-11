<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>El Jardiner</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    	<link rel="stylesheet" type="text/css" href="css/header.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/caroussel-modal.js"></script>
      <!-- Traduccions -->
      <?php
        include 'trans/trans-header.php';
        include 'trans/trans-mapaweb.php';
        include 'trans/trans-footer.php'; ?>
  </head>
  <body>

     <div class="main">
       <!-- Import del header, navegador superior -->
       <?php
         include 'header.php';
        ?>
        <div class="container">
        <h1 style="color:#00693C;"><?php echo tradueix_mapa('titol') ?></h1>
        <ul class="list-group">
          <ul class="list-group-item"><a href="inici.php"> <?php echo tradueix_mapa('inici'); ?> </a>
          <li class="list-group-item"><a href="perfil.php"> <?php echo tradueix_mapa('sobre'); ?> </a></li>
          <li class="list-group-item"><a href="consells.php"> <?php echo tradueix_mapa('consells'); ?> </a></li>
        </ul>
        </ul>
      </div>
     <!-- FOOTER -->
     <?php include 'footer.php'; ?>
  </body>
</html>

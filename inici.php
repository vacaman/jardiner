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
        include 'trans/trans-inici.php';
        include 'trans/trans-footer.php';
       ?>

  </head>
  <body>

     <div class="main">
       <!-- Import del header, navegador superior -->
       <?php
         include 'header.php';
        ?>

       <div class="caixa-anuncis">
        <div class="caixa-anuncis-text">
            <div id="titol-caixa-anuncis"><?php echo tradueix_inici('titol-caixa1'); ?></div>
            <div id="subtitol-caixa-anuncis"><?php echo tradueix_inici('subt-caixa1'); ?></div>
        </div>
       </div>

       <!-- Imatges carousel -->
       <div class="hidden" id="img-repo">

      		<!-- #image-1 -->
      		<div class="item" id="image-1">
      			<img class="thumbnail img-responsive" title="<?php echo tradueix_inici('petunies'); ?> " src="img/plantes/petunies.jpg" alt="<?php echo tradueix_inici('petunies'); ?>">
      		</div>
      		<div class="item" id="image-1">
      			<img class="thumbnail img-responsive" title="<?php echo tradueix_inici('pensaments'); ?>" src="img/plantes/pensaments.jpg" alt="<?php echo tradueix_inici('pensaments'); ?> ">
      		</div>
      		<div class="item" id="image-1">
      			<img class="thumbnail img-responsive" title="<?php echo tradueix_inici('roses'); ?>" src="img/plantes/roses.jpg" alt="<?php echo tradueix_inici('roses'); ?> ">
      		</div>

      		<!-- #image-2 -->
      		<div class="item" id="image-2">
      			<img class="thumbnail img-responsive" title="<?php echo tradueix_inici('pachira'); ?>" src="img/plantes/pachira.jpg" alt="<?php echo tradueix_inici('pachira'); ?> ">
      		</div>
      		<div class="item" id="image-2">
      			<img class="thumbnail img-responsive" title="<?php echo tradueix_inici('nenufar'); ?>" src="img/plantes/nenufar.jpg" alt="<?php echo tradueix_inici('nenufar'); ?> ">
      		</div>

      		<!-- #image-3-->
      		<div class="item" id="image-3">
      			<img class="thumbnail img-responsive" title="<?php echo tradueix_inici('salvia'); ?>" src="img/plantes/salvia.jpg" alt="<?php echo tradueix_inici('salvia'); ?>" >
      		</div>
      		<div class="item" id="image-3">
      			<img class="thumbnail img-responsive" title="<?php echo tradueix_inici('seto'); ?>" src="img/plantes/seto.jpg" alt="<?php echo tradueix_inici('seto'); ?> ">
      		</div>
      		<div class="item" id="image-3">
      			<img class="thumbnail img-responsive" title="<?php echo tradueix_inici('boix'); ?>" src="img/plantes/boix.jpg" alt="<?php echo tradueix_inici('boix'); ?> ">
      		</div>

	</div>


  <div class="modal" id="modal-gallery" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">×</button>
          
      </div>
      <div class="modal-body">
          <div id="modal-carousel" class="carousel">

            <div class="carousel-inner">
            </div>

            <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
            <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>

          </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal"><?php echo tradueix_inici('tanca'); ?></button>
      </div>
    </div>
  </div>
</div>
  <!-- fi img carousel -->

       <div class="row" id="recomanacions">
         <div class="col-sm-4"><?php echo tradueix_inici('recomanacio1'); ?></div>
         <div class="col-sm-4"><?php echo tradueix_inici('recomanacio2'); ?></div>
         <div class="col-sm-4"><?php echo tradueix_inici('recomanacio3'); ?></div>
      </div>
      <hr>
       <div class="row">
         <div class="col-sm-7 col-md-offset-1">
           <span id="titol-caixa-benvinguda"><?php echo tradueix_inici('titol-caixa-benvinguda'); ?></span>
           <span id="text-caixa-benvinguda"><?php echo tradueix_inici('text-caixa-benvinguda'); ?></span>
        </div>
        <div class="col-sm-4">
          <img id="img-benvinguda" src="img/gardener1.jpg" alt="foto de jardiner" />
       </div>
     </div>
     <hr>
     <!-- FOOTER -->
     <?php include 'footer.php'; ?>
  </body>
</html>

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
      <link rel="stylesheet" type="text/css" href="css/form.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/caroussel-modal.js"></script>
      <!-- Traduccions -->
      <?php
        include 'trans/trans-header.php';
        include 'trans/trans-mapaweb.php';
        include 'trans/trans-footer.php';
        include 'trans/trans-form.php'; ?>
  </head>
  <body>

     <div class="main">
       <!-- Import del header, navegador superior -->
       <?php
         include 'header.php';
        ?>

        <!-- Sections -->
      <section id="contact">

          <div id="map"></div>

          <div class="container text-center">

              <!-- Example row of columns -->
              <div class="row">
                  <div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
                      <div class="contact-form-area">
                          <form action="php/comentaris.php" method="post">
                              <h3><?php echo tradueix_formulari('contacte'); ?></h3>
                              <div class="form-group">
                                  <input type="text" class="form-control" name='name' id='name' placeholder="<?php echo tradueix_formulari('nom'); ?>"  required >
                              </div>

                              <div class="form-group">
                                  <textarea class="form-control" name="comment" id="comment" rows="7" placeholder="<?php echo tradueix_formulari('comment'); ?>" required></textarea>
                              </div>

                              <button type="submit" class="btn btn-primary contact-btn"><?php echo tradueix_formulari('enviar'); ?></button>
                          </form>
                      </div>
                  </div>
              </div>
          </div> <!-- /container -->
      </section>


<!-- ADD THis before ending body tag -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCZ3R3HV2ECPiClKyFX8Y_UMFg6T_2L1e0"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.min.js"></script>
      <script type="text/javascript">
      var map = new GMaps({
              el: '#map',
              lat: 41.7333,
              lng: 1.8333,
              scrollwheel: false
          });
      </script>

      </div>
        </div>
      </div>
     <!-- FOOTER -->
     <?php include 'footer.php'; ?>
  </body>
</html>

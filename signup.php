<?php
include 'libs/load.php';
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

   <?php load_template('__meta');?>


  <!-- <?php load_template('_signup');?> -->

  
  <body>
<?php load_template('__button');?>

    
<header data-bs-theme="dark">
<?php load_template('__header');?>
</header>

<main>

  <section class="py-5 text-center container">
   <!-- <?php load_template('__photogram');?> -->
  </section>


<?php load_template('__signup');?>

</main>

<?php load_template('__footer');?>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>

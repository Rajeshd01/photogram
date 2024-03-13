<?php
include 'libs/load.php';
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

   <?php load_template('_loginmeta');?>

  <!-- <?php load_template('_indexstyle');?> -->
  <!-- <?php load_template('_signupstyle');?> -->

  
  <body>
<?php load_template('_button');?>

    
<header data-bs-theme="dark">
<?php load_template('_header');?>
</header>

<main>

  <section class="py-5 text-center container">
   <!-- <?php load_template('_albumexample');?> -->
  </section>

<!-- <?php load_template('_card');?> -->
<?php load_template('_signup');?>

</main>

<?php load_template('_footer');?>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>

<?php
include 'libs/load.php';
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/photogram/assets/js/color-modes.js"></script>
    <?php
      load_template('__meta')
    ?>
    <title>Photogram</title>
 

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php
      load_template('__style')
    ?>

    
  </head>
  <body>
    

    
<header data-bs-theme="dark">
  
  <?php
    load_template('__header')
  ?>
  
</header>

<main>

  <?php
    load_template('__calltoaction')
 ?>
 <?php
    load_template('__photogram')
  ?>

</main>

<?php
  load_template('__footer')

?>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>

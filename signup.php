<?php
include 'libs/load.php';



?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/photogram/assets/js/color-modes.js"></script>
    <?php
      load_template('__meta')
    ?>
    <title>Signup_Photogram</title>
    <link href="/photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img{
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        } 

.form-signup {
  max-width: 330px;
  padding: 1rem;
}

.form-signup .form-floating:focus-within {
  z-index: 2;
}

.form-signup input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signup input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>


    <?php
      load_template('__style')
    ?>

    
  </head>
  <body>
    

    
<?php
  load_template('__header')
?>

<main>


  <?php
    load_template('__signup')
 ?>

</main>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>

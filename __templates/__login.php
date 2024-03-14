<?php



$username = $_POST['email'];
$password = $_POST['password'];


$result = validate_crediential($username, $password);
if($result){
    ?>
    <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>login successfully</h1>
    <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
    <a class="btn btn-lg btn-primary" href="login.php" role="button">Back to login »</a>
  </div>
<?php
}else{
    
?> 


<?php
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.0/css/hover-min.css" integrity="sha512-glciccPoOqr5mfDGmlJ3bpbvomZmFK+5dRARpt62nZnlKwaYZSfFpFIgUoD8ujqBw4TmPa/F3TX28OctJzoLfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    

    

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">


<?php
      load_template('__style')
    ?>


    
    <!-- Custom styles for this template -->
<!-- <link href="signin.css" rel="stylesheet"> -->
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form method="post" action="index.php">
    <img class="mb-4" src="https://www.instagram.com/static/images/web/logged_out_wordmark.png/7a252de00b20.png" alt="" height="70">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary hvr-shrink" type="submit">Sign in</button>
  </form>
</main>


    
  </body>
</html>


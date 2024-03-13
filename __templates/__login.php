<?php

use LDAP\Result;

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

<main class="form-signin w-100 m-auto">
  <form method="post" action="login.php">
    <img class="mb-4" src="https://imgs.search.brave.com/lmxmHab14SbREs_uqLVdU4gEBj_1bVLkpm29lnE43rc/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9zZWVr/bG9nby5jb20vaW1h/Z2VzL1QvdGhyZWFk/cy1sb2dvLTFBQkJB/MjQ2QkUtc2Vla2xv/Z28uY29tLnBuZw" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <!-- <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p> -->
  </form>
</main>

<?php
}
?>

<?php
	$companyName = "Fresh Headlines";
    $title = "Fresh Headlines | privacy";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="opia austin">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <img class="mb-4 priv-img" src="../img/privacy.jpg" alt="image of the admin">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">
          &copy;<?php echo date('Y'); ?> <a href="http://facebook.com/opiaaustin"><?php echo $companyName; ?></a>
        </p>
    </form>
  </body>
</html>

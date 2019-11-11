<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PTPN XI PG SEMBORO</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="<?php echo base_url('c_signin/ceklogin'); ?>" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="user" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div id="name" style="font-size: 18px; font-family: comic-sans; color:; text-align: center;">
            <b><?php echo $error ?></b>
        </div>
        <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="LOGIN">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; Faishal Basbeth 2019</p>
    </form>
  </body>
</html>

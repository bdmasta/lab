
<?php
if(session_status() == PHP_SESSION_NONE){
  session_start();
}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Member</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="app.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Member</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <?php if (isset($_SESSION['auth'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Se déconnecter</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="register.php">S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Se connecter</a>
          </li>
        <?php endif; ?>
        </ul>
      </div>
    </nav>

    <div class="container">
        <?php if (isset($_SESSION['flash'])): ?>
          <?php foreach($_SESSION['flash'] as $type => $message): ?>
            <div class="alert alert-<?= $type; ?>">
              <?= $message; ?>
            </div>
          <?php endforeach; ?>
          <?php unset($_SESSION['flash']); ?>
        <?php endif; ?>
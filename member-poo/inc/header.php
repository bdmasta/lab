<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Member</title>

    <!-- Bootstrap core CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css">


    <!-- Custom styles for this template -->

  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Vitalbase partner Hub</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php if (isset($_SESSION['auth'])): ?>
            <li class="active"><a href="logout.php">Se déconnecter</a></li>
            <?php else: ?>
            <li><a href="register.php">S'inscrire</a></li>
            <li><a href="login.php">Se connecter</a></li>
          </ul>
          <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

        <?php if (Session::getInstance()->hasFlashes()): ?>
          <?php foreach(Session::getInstance()->getFlashes() as $type => $message): ?>
            <div class="alert alert-<?= $type; ?>">
              <?= $message; ?>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
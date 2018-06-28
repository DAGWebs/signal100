<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Bungee+Shade|Crimson+Text" rel="stylesheet">

    <title>Signal100 RP</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" id="logo" href="#">Signal100 RolePlay</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" id="home" href="index.php#main-img-div">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" id="about" href="index.php#abouth1">About</a>
          <a class="nav-item nav-link" id="apply" href="index.php#Applications">Apply</a>
          <a class="nav-item nav-link" id="contact" href="index.php#contactus">Contact Us</a>
          <button class="button-menu btn bg-dark" data-toggle="modal" data-target="#login">Login</button>
          <a href="register.php"><button class="button-menu btn bg-dark">Register</button></a>
            <form action="includes/actions/startserver.php" method="post">
              <button type="submit" name="submit" value="start">Start</button>
            </form>
            <form action="includes/actions/startserver.php" method="post">
              <button name="stop">STOP</button>
            </form>
        </div>
      </div>
    </nav>
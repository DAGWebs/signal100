<?php session_start(); ?>
<?php  
$_URL = "/localhost/siganl100/";
$page = $_SERVER["PHP_SELF"];
  switch($page){
    case $_URL . "index.php":
      $title = "Home";
      $description = "Signal 100 Roleplaye Homepage. Signal 100 is a police and life roleplay server that has been in development for the past month. We have a dedicated staff team who are very active with in the server.";
      break;
      case $_URL . "apply.php":
        $title = "Apply";
        $description = "Looking to apply for one of our many Server or staff applications. Signal 100 takes pride in its application process. First we have our written part of the application followed by a an interview on the discord.";
        break;
      case $_URL . "register.php": 
        $title = "Register";
        $description = "Register now to have access to our member ownly parts of our website. We offer a one of a kind member dashboard and realy cool member only benifits. As a Signal 100 member you are required to have an account";
        break;
      case $_URL . "login.php":
        $title = "Login";
        $description = "Login in now to your Signal 100 user dashboard.";
        break;
    default:
      $title = "Roleplaye";
      $description = "Signal 100 Roleplaye Homepage. Signal 100 is a police and life roleplay server that has been in development for the past month. We have a dedicated staff team who are very active with in the server.";
      break;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Bungee+Shade|Crimson+Text" rel="stylesheet">

    <title>Signal100 RP | <?php echo $title; ?></title>
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
          <<a href="login.php"><button class="button-menu btn bg-dark">Login</button></a>
          <a href="register.php"><button class="button-menu btn bg-dark">Register</button></a>
        </div>
      </div>
    </nav>
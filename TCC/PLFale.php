<?php

  session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: FormLogin.php');
  }
  $logado = $_SESSION['email'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GL - Fale Conosco</title>
    <link rel="icon" href="Images/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
   
      <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
    <div class="container-fluid">
      <a href="PLHome.php"><img src="Images/home/logorodape.png" class="navbar-brand" width="157" height="43"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="PLPromo.php">Promoções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="PLAli.php">Alimentação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="PLVest.php">Vestuário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="PLHig.php">Higiene</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="PLCos.php">Cosméticos</a>
          </li>
        </ul>

        <div class="text-end">
          <a href="sair.php"><button type="button" class="btn btn-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
              <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg> Sair</button></a>
        </div>
      </div>
    </div>
  </nav>
</header>

<br><br><br>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <div class="thumbnail"><a href="https://www.instagram.com/greenlifevegan01/?next=%2F"><img src="Images/fale/redes1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"></a></div>
            <br>
            <div class="thumbnail"><img src="Images/fale/redes2.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"></div>
            <br>
            <div class="thumbnail"><img src="Images/fale/redes3.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"></div>
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><font style="font-family: Corbel; color: #198754;">Deseja entrar em contato conosco?</font></h1>
            <p class="lead"><font style="font-family: Corbel;">Sinta-se à vontade de utilizar um dos nossos meios de contato. Nós responderemos o mais breve possível.</font></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            </div>
        </div>
        </div>
    </div>

<br><br><br>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="PLPromo.php" class="nav-link px-2 text-muted">Promoções</a></li>
      <li class="nav-item"><a href="PLAli.php" class="nav-link px-2 text-muted">Alimentação</a></li>
      <li class="nav-item"><a href="PLVest.php" class="nav-link px-2 text-muted">Vestuário</a></li>
      <li class="nav-item"><a href="PLHig.php" class="nav-link px-2 text-muted">Higiene</a></li>
      <li class="nav-item"><a href="PLCos.php" class="nav-link px-2 text-muted">Cosméticos</a></li>
      <li class="nav-item"><a href="PLFale.php" class="nav-link px-2 text-muted">Fale Conosco</a></li>
    </ul>
    <p class="text-center text-muted">GreenLife &copy; 2022</p>
  </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<style type="text/css">

  .thumbnail { 
    top:-50px; 
    left:-35px; 
    display:block; 
    z-index:999; 
    cursor: pointer;
    -webkit-transition-property: all; 
    -webkit-transition-duration: 0.3s; 
    -webkit-transition-timing-function: ease; 
  } 

  /*change the number below to scale to the appropriate size*/ 
  .thumbnail:hover { 
    transform: scale(1.1); 

  }
</style>
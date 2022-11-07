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
    <title>GL - Página Inicial</title>
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
      <a href="Home.html"><img src="Images/logorodape.png" class="navbar-brand" width="157" height="43"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="promocoes.html">Promoções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="alimentacao.html">Alimentação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="vestuario.html">Vestuário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="higiene.html">Higiene</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cosmeticos.html">Cosméticos</a>
          </li>
        </ul>

        <div class="text-end">
          <a href="login.html"><button type="button" class="btn btn-outline-light me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg> Perfil</button></a>
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

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/slide1.png">
    </div>
    <div class="carousel-item">
      <img src="Images/slide2.png">
    </div>
    <div class="carousel-item">
      <img src="Images/slide3.png">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>

<br><br><br>

      <font size="10" style= "font-family: 'Corbel'"><center>── DESTAQUES ──</center></font>



  <div class="container text-center">
  <div class="row">
    <div class="col">

<div class="thumbnail">  
<center>   
<div class="card" style="width: 18rem;">
  <img src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><center>Barra de Chocolate</center></h5>
    <p class="card-text"> <font face="Arial Light" size="5">  R$ 04,90</font></p>
    <center><a href="#" class="btn btn-success"><b>Comprar</b></center></a>
  </div>
</div>
</center>
</div> 

  <br>

    </div>
    <div class="col">

<div class="thumbnail"> 
<center>     
<div class="card" style="width: 18rem;">
  <img src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><center>Barra de Chocolate</center></h5>
    <p class="card-text"> <font face="Arial Light" size="5">  R$ 04,90</font></p>
    <center><a href="#" class="btn btn-success"><b>Comprar</b></center></a>
  </div>
</div>
</center>
</div>

  <br>

    </div>
    <div class="col">

<div class="thumbnail">
<center>
<div class="card" style="width: 18rem;">
  <img src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><center>Barra de Chocolate</center></h5>
    <p class="card-text"> <font face="Arial Light" size="5">  R$ 04,90</font></p>
    <center><a href="#" class="btn btn-success"><b>Comprar</b></center></a>
  </div>
</div>
</center>
</div>



    </div>
  </div>
</div>

<br><br><br>

<font size="10" style= "font-family: 'Corbel'"><center>── CATEGORIAS ──</center></font>
      
      <div class="container text-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
              
              <div class="col" id="categorias">
                <center><a href="alimentacao.html"><img id="alimentacao" class="thumbnail" src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg"></a></center>
                <font size="5" style="font-family: Corbel">ALIMENTAÇÃO</font>
              </div>

              <div class="col" id="categorias">
                <center><a href="vestuario.html"><img id="vestuario" class="thumbnail" src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg"></a></center>
                <font size="5" style="font-family: Corbel">VESTUÁRIO</font>
              </div>

              <div class="col" id="categorias">
                <center><a href="higiene.html"><img id="higiene" class="thumbnail" src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg"></a></center>
                <font size="5" style="font-family: Corbel">HIGIENE</font>
              </div>

              <div class="col" id="categorias">
                <center><a href="cosmeticos.html"><img id="cosmeticos" class="thumbnail" src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg"></a></center>
                <font size="5" style="font-family: Corbel">COSMÉTICOS</font>
              </div>

            </div>
        </div>

  <br><br><br>

  <font size="10" style= "font-family: 'Corbel'"><center>── AVALIAÇÕES ──</center></font>

      <div class="container text-center">
  <div class="row">
    <div class="col">
      <center><img id="filomena" class="thumbnail" src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg"></center>
      <font size="5" style="font-family: Corbel"><b>Filomena Dantas</b></font>
      <br>
      <font size="4" style="font-family: Corbel">“Comprei um hidratante corporal de
  macadâmia com leite de coco.
  Simplesmente maravilhoso! Super
  indico!”</font>
    </div>
    <div class="col">
      <center><img id="camila" class="thumbnail" src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg"></center>
      <font size="5" style="font-family: Corbel"><b>Camila dos Santos</b></font>
      <br>
      <font size="4" style="font-family: Corbel">“Loja maravilhosa! Preços ótimos,
  alimentos de qualidade e entregas
  muito bem embaladas. Com certeza
  comprarei novamente!”</font>
    </div>
    <div class="col">
      <center><img id="luis" class="thumbnail" src="https://i.pinimg.com/originals/02/2b/d4/022bd43f0605873322add5b1e42ae15f.jpg"></center>
      <font size="5" style="font-family: Corbel"><b>Luís Freitas</b></font>
      <br>
      <font size="4" style="font-family: Corbel">“Superou todas minhas expectativas.
  A entrega foi super rápida, há tempos
  procurava por uma loja assim.”</font>
    </div>
  </div>
</div>

<br><br><br>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Promoções</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Alimentação</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Vestuário</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Higiene</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cosméticos</a></li>
    </ul>
    <p class="text-center text-muted">GreenLife &copy; 2022</p>
  </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<style type="text/css">
    #alimentacao {
    width: 200px;
    height: 200px;
    border: 6px solid #198754;
    border-radius: 100%;
  }

  #vestuario {
    width: 200px;
    height: 200px;
    border: 6px solid #198754;
    border-radius: 100%;
  }

  #higiene {
    width: 200px;
    height: 200px;
    border: 6px solid #198754;
    border-radius: 100%;
  }

  #cosmeticos {
    width: 200px;
    height: 200px;
    border: 6px solid #198754;
    border-radius: 100%;
  }

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

    #filomena {
    width: 180px;
    height: 180px;
    border: 5px solid #198754;
    border-radius: 100%;
  }

  #camila {
    width: 180px;
    height: 180px;
    border: 5px solid #198754;
    border-radius: 100%;
  }

  #luis {
    width: 180px;
    height: 180px;
    border: 5px solid #198754;
    border-radius: 100%;
  }
</style>
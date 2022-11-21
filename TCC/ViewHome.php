<?php

  include_once('config.php');
  $sql = "SELECT * FROM destaques";

  $result = $conexao->query($sql);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GL - Página Inicial</title>
    <link rel="icon" href="Images/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
   
      <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-success">
    <div class="container-fluid">
      <a href="ViewHome.php"><img src="Images//home/logorodape.PNG" class="navbar-brand" width="157" height="43"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="ViewPromocoes.php">Promoções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="ViewAlimentacao.php">Alimentação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="ViewVestuario.php">Vestuário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="ViewHigiene.php">Higiene</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="ViewCosmeticos.php">Cosméticos</a>
          </li>
        </ul>

        <div class="text-end">
          <a href="FormLogin.php"><button type="button" class="btn btn-outline-light me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
              <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg> Login</button></a>
          <a href="FormCadastro.php"><button type="button" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
              <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg> Cadastro</button></a>
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
      <img src="Images/home/1.png" class="img-fluid">
    </div>
    <div class="carousel-item">
      <img src="Images/home/2.png" class="img-fluid">
    </div>
    <div class="carousel-item">
      <img src="Images/home/3.png" class="img-fluid">
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

      <font size="10" style= "font-family: 'Corbel'"><center>⎯ DESTAQUES ⎯</center></font>

    <div class="d-flex flex-sm-row flex-column flex-sm-nowrap justify-content-center">

    <?php
        while($user_data = mysqli_fetch_assoc($result)): ?>        

          <div class='card m-5' style='width: 18rem;'>
            <img src="/Images/home/<?= $user_data['imgdes'] ?>" class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'><center> <?= $user_data['produtodes'] ?> </center></h5>
              <p class='card-text'><font size="5" style="font-family: Arial Light;"><center><?= $user_data['precodes'] ?></center></font></p>
              <center><a href=" <?= $user_data['linkdes'] ?>" class='btn btn-success'><b>Comprar</b></center></a>
            </div>
          </div>
            
          
    <?php  endwhile ?>

   </div>
    


<br><br>

<center><hr class="featurette-divider"></center>

<br>

<font size="10" style= "font-family: 'Corbel'"><center>⎯ CATEGORIAS ⎯</center></font>
      
      <div class="container text-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
              
              <div class="col" id="categorias">
                <center><a href="ViewAlimentacao.html"><img id="alimentacao" class="thumbnail" src="Images/home/alimentacao1.png"></a></center>
                <font size="5" style="font-family: Corbel">ALIMENTAÇÃO</font>
              </div>

              <div class="col" id="categorias">
                <center><a href="ViewVestuario.html"><img id="vestuario" class="thumbnail" src="Images/home/vestuario1.png"></a></center>
                <font size="5" style="font-family: Corbel">VESTUÁRIO</font>
              </div>

              <div class="col" id="categorias">
                <center><a href="ViewHigiene.html"><img id="higiene" class="thumbnail" src="Images/home/higiene1.png"></a></center>
                <font size="5" style="font-family: Corbel">HIGIENE</font>
              </div>

              <div class="col" id="categorias">
                <center><a href="ViewCosmeticos.html"><img id="cosmeticos" class="thumbnail" src="Images/home/cosmeticos1.png"></a></center>
                <font size="5" style="font-family: Corbel">COSMÉTICOS</font>
              </div>

            </div>
        </div>

  <br><br><br>

  <center><hr class="featurette-divider"></center>

  <br>

  <font size="10" style= "font-family: 'Corbel'"><center>⎯ AVALIAÇÕES ⎯</center></font>

  <div class="container text-center">
    <div class="row">
      <div class="col">
  
  <div class="thumbnail">  
  <center>   
  <div class="card" id="card2" style="width: 18rem;">
    <img src="Images/home/filomena.png" class="card-img-top" id="card" alt="...">
    <div class="card-body">
      <h5 class="card-title"><center>Filomena Dantas</center></h5>
      <p class="card-text"><font size="4" style="font-family: Corbel"><i>“Comprei um hidratante corporal de
        macadâmia com leite de coco.
        Simplesmente maravilhoso! Super
        indico!”</i></font></p>
    </div>
  </div>
  </center>
  </div> 
  
    <br>
  
      </div>
      <div class="col">
  
  <div class="thumbnail"> 
  <center>     
  <div class="card" id="card2" style="width: 18rem;">
    <img src="Images/home/camila.PNG" class="card-img-top" id="card" alt="...">
    <div class="card-body">
      <h5 class="card-title"><center>Camila dos Santos</center></h5>
      <p class="card-text"><font size="4" style="font-family: Corbel"><i>“Loja maravilhosa! Preços ótimos,
        alimentos de qualidade e entregas
        muito bem embaladas. Comprarei novamente.”</i></font></p>
    </div>
  </div>
  </center>
  </div>
  
    <br>
  
      </div>
      <div class="col">
  
  <div class="thumbnail">
  <center>
  <div class="card" id="card2" style="width: 18rem;">
    <img src="Images/home/luis.PNG" class="card-img-top" id="card" alt="...">
    <div class="card-body">
      <h5 class="card-title"><center>Luís Freitas</center></h5>
      <p class="card-text"><font size="4" style="font-family: Corbel"><i>“Superou todas minhas expectativas.
        A entrega foi super rápida, há tempos
        procurava por uma loja assim.”</i></font></p>
    </div>
  </div>
  </center>
  </div>
  
  
  
      </div>
    </div>
  </div>

<br><br><br>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="ViewPromocoes.php" class="nav-link px-2 text-muted">Promoções</a></li>
      <li class="nav-item"><a href="ViewAlimentacao.php" class="nav-link px-2 text-muted">Alimentação</a></li>
      <li class="nav-item"><a href="ViewVestuario.php" class="nav-link px-2 text-muted">Vestuário</a></li>
      <li class="nav-item"><a href="ViewHigiene.php" class="nav-link px-2 text-muted">Higiene</a></li>
      <li class="nav-item"><a href="ViewCosmeticos.php" class="nav-link px-2 text-muted">Cosméticos</a></li>
      <li class="nav-item"><a href="ViewFaleConosco.php" class="nav-link px-2 text-muted">Fale Conosco</a></li>
      <li class="nav-item"><a href="FormLoginAdm.php" class="nav-link px-2 text-muted">Sessão Administrativa</a></li>
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

  #card {
    width: 50%;
    border: 4px solid #198754;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
  }

  #card2 {
    padding: 1.5em .5em .5em;
    text-align: center;
  }

  .featurette-divider{
    width: 1200px;
  }

</style>

<?php

  session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['emailadm']) == true) and (!isset($_SESSION['senhaadm']) == true))
  {
    unset($_SESSION['emailadm']);
    unset($_SESSION['senhaadm']);
    header('Location: FormLoginAdm.php');
  }
  $logado = $_SESSION['emailadm'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sessão Administrativa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
    <div class="container-fluid">
      <a class="navbar-brand">GreenLife</a>
    </div>

    <form class="d-flex" role="search">
      <button href="sairadm.php" class="btn btn-outline-warning" type="submit">Sair</button>
    </form>

  </nav>
</header>

<br>
<br>
<br>
<br>
<br>
<br>

<center><h1><font style="font-family: Corbel">Sessão Administrativa</font></h1></center>
<br>

<center>
<a href="sessaoadmcadastros.html"><img src="Images/admp1i1.png" class="thumbnail" class="img-fluid" alt="..."></a>
<br> <br>
<a href="sessaoadmlistas.html"><img src="Images/admp1i2.png" class="thumbnail" class="img-fluid" alt="..."></a>
</center>

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
} 

/*change the number below to scale to the appropriate size*/ 
.thumbnail:hover { 
transform: scale(1.1); 

}

</style>
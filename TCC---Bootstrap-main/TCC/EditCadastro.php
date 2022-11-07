<?php

    if(!empty($_GET['idclientes']))
    {
        include_once ('config.php');

        $idclientes = $_GET['idclientes'];

        $sqlSelect = "SELECT * FROM clientes WHERE idclientes=$idclientes";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
            }

        }
        else
        {
            header('Location: ListCadastro.php');
        }
        

    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fazer Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-white" placeholder="Pesquisar..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="FormLogin.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="FormCadastro.php"><button type="button" class="btn btn-light">Cadastro</button></a>
        </div>
      </div>
    </div>
  </nav>
</header>

<br>
<br>
<br>
<br>
<br>
<br>


<center><h1><font style="font-family: Corbel">Atualizar Cadastro</font></h1></center>


<center>
<div id="formlogin"> 

  <form action="saveeditcadastro.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome"></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Nome completo" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="email"></label>  
    <div class="col-md-4">
    <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md">
      
    </div>
  </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha"></label>  
  <div class="col-md-4">
  <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md">
  </div>
</div>

<input type="hidden" name="idadm" value="<?php echo $idclientes ?>">

<br>
<button type="submit" id="update" name="update" class="btn btn-success">Atualizar</button>

<center><h1><font style="font-family: Corbel; font-size: small;" >Já possui uma conta?</font></h1></center>
<center><a href="login.html"><font style="font-family: Corbel; font-size: small">Fazer Login</font></a></center>

</fieldset>
</form>

</div>
</center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
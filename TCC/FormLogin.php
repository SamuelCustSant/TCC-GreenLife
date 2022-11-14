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
      <a href="ViewHome.html"><img src="Images/home/logorodape.png" class="navbar-brand" width="157" height="43"></a>
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

<br>
<br>
<br>
<br>
<br>
<br>
<br>


<center><h1><font style="font-family: Corbel">Fazer Login</font></h1></center>


<center>
<div id="formlogin"> 

  <form action="testlogin.php" method="POST" class="form-horizontal">
<fieldset>

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

<br>
<button type="submit" id="submit" name="submit" class="btn btn-success">Entrar</button>

<center><h1><font style="font-family: Corbel; font-size: small;" >Não possui uma conta?</font></h1></center>
<center><a href="FormCadastro.php"><font style="font-family: Corbel; font-size: small">Cadastre-se</font></a></center>



</fieldset>
</form>

</div>
</center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
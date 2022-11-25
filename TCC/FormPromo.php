<?php

    if(isset($_POST['submit']))
    {
        include_once ('config.php');
        
        $produtopromo = $_POST['produtopromo'];
        $precoanterior = $_POST['precoanterior'];
        $precoatual = $_POST['precoatual'];
        $descricaopromo = $_POST['descricaopromo'];
        $imgpromo = $_POST['imgpromo'];
        $linkpromo = $_POST['linkpromo'];

        $result = mysqli_query($conexao, "INSERT INTO promocoes(produtopromo,precoanterior,precoatual,descricaopromo,imgpromo,linkpromo)
        VALUES('$produtopromo','$precoanterior', '$precoatual','$descricaopromo','$imgpromo','$linkpromo')");

        header('Location: ListPromo.php');  
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sessão Administrativa</title>
    <link rel="icon" href="Images/gear.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
        <div class="container-fluid">
          <a href="sessaoadm.php"><img src="Images/home/logorodape.png" class="navbar-brand" width="157" height="43"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
            <div class="text-end">
              <a href="sairadm.php"><button type="button" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg> Sair</button></a>
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


<center><h1><font style="font-family: Corbel">Cadastrar Promoções</font></h1></center>
<br>

<center>
  
<form action="FormPromo.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nomepromo"></label>  
  <div class="col-md-4">
  <input id="produtopromo" name="produtopromo" type="text" placeholder="Nome do Produto" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="precoanteriorpromo"></label>  
  <div class="col-md-4">
  <input id="precoanterior" name="precoanterior" type="text" placeholder="Preço Anterior" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="precoatualpromo"></label>  
  <div class="col-md-4">
  <input id="precoatual" name="precoatual" type="text" placeholder="Preço Atual" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricaopromo"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descricaopromo" name="descricaopromo" placeholder="Descrição"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="imgpromo"></label>
  <div class="col-md-4">
    <input id="imgpromo" name="imgpromo" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="linkpromo"></label>  
  <div class="col-md-4">
  <input id="linkpromo" name="linkpromo" type="text" placeholder="Link Pag Seguro" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="promobotao"></label>
  <div class="col-md-4">
    <button type="submit" id="submit" name="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</fieldset>
</form>

</center>

<br><br><br><br><br><br>

<center><a href="sessaoadmcadastros.html"><button type="button" class="btn btn-success">Voltar</button></a></center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<style type="text/css">
  
.img-fluid { 
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
.img-fluid:hover { 
transform: scale(1.1); 

}

</style>
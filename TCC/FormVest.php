<?php

    if(isset($_POST['submit']))
    {
        include_once ('config.php');
        
        $produtovest = $_POST['produtovest'];
        $precovest = $_POST['precovest'];
        $descricaovest = $_POST['descricaovest'];
        $imgvest = $_POST['imgvest'];
        $linkvest = $_POST['linkvest'];

        $result = mysqli_query($conexao, "INSERT INTO vestuario(produtovest,precovest,descricaovest,imgvest,linkvest)
        VALUES('$produtovest','$precovest','$descricaovest','$imgvest','$linkvest')");
    }

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
  </nav>
</header>

<br>
<br>
<br>
<br>
<br>


<center><h1><font style="font-family: Corbel">Cadastrar Vestuários</font></h1></center>
<br>

<center>
  
<form action="FormCos.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nomevest"></label>  
  <div class="col-md-4">
  <input id="produtoves" name="produtovest" type="text" placeholder="Nome do Produto" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="precovest"></label>  
  <div class="col-md-4">
  <input id="precovest" name="precovest" type="text" placeholder="Preço" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricaovest"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descricaovest" name="descricaovest">Descrição</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="imgvest"></label>
  <div class="col-md-4">
    <input id="imgvest" name="imgvest" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="linkvest"></label>  
  <div class="col-md-4">
  <input id="linkvest" name="linkvest" type="text" placeholder="Link Pag Seguro" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="vestbotao"></label>
  <div class="col-md-4">
    <button type="submit" id="submit" name="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</fieldset>
</form>

</center>

<br><br><br><br><br><br>

<center><a href="cadastros.html"><button type="button" class="btn btn-success">Voltar</button></a></center>


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
} 

/*change the number below to scale to the appropriate size*/ 
.img-fluid:hover { 
transform: scale(1.1); 

}

</style>
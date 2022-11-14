<?php

    if(!empty($_GET['id']))
    {
        include_once ('config.php');

        $idpromocoes = $_GET['id'];

        $sqlSelect = "SELECT * FROM promocoes WHERE idpromocoes=$idpromocoes";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $produtopromo = $user_data['produtopromo'];
                $precoanterior = $user_data['precopromo'];
                $precoatual = $user_data['precopromo'];
                $descricaopromo = $user_data['descricaopromo'];
                $imgpromo = $user_data['imgpromo'];
                $linkpromo = $user_data['linkpromo'];
            }

        }
        else
        {
            header('Location: ListPromo.php');
        }
        

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


<center><h1><font style="font-family: Corbel">Editar Promoções</font></h1></center>
<br>

<center>
  
<form action="saveeditpromo.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nomepromo"></label>  
  <div class="col-md-4">
  <input id="produtopromo" name="produtopromo" type="text" placeholder="Nome do Produto" class="form-control input-md" value="<?php echo $produtopromo ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="precoanteriorpromo"></label>  
  <div class="col-md-4">
  <input id="precoanterior" name="precoanterior" type="text" placeholder="Preço Anterior" class="form-control input-md" value="<?php echo $precoanterior ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="precoatualpromo"></label>  
  <div class="col-md-4">
  <input id="precoatual" name="precoatual" type="text" placeholder="Preço Atual" class="form-control input-md" value="<?php echo $precoatual ?>">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricaopromo"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descricaopromo" name="descricaopromo" value="<?php echo $descricaopromo ?>">Descrição</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="imgpromo"></label>
  <div class="col-md-4">
    <input id="imgpromo" name="imgpromo" class="input-file" type="file" value="<?php echo $imgpromo ?>">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="linkpromo"></label>  
  <div class="col-md-4">
  <input id="linkpromo" name="linkpromo" type="text" placeholder="Link Pag Seguro" class="form-control input-md" value="<?php echo $linkpromo ?>">
    
  </div>
</div>

<input type="hidden" name="id" value="<?php echo $idpromocoes ?>">

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="promobotao"></label>
  <div class="col-md-4">
    <button type="submit" id="update" name="update" class="btn btn-primary">Atualizar</button>
  </div>
</div>

</fieldset>
</form>

</center>

<br><br><br><br><br><br>

<center><a href="ListPromo.php"><button type="button" class="btn btn-success">Voltar</button></a></center>


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
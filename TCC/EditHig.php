<?php

    if(!empty($_GET['idhigiene']))
    {
        include_once ('config.php');

        $idhigiene = $_GET['idhigiene'];

        $sqlSelect = "SELECT * FROM higiene WHERE idhigiene=$idhigiene";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $produtohig = $user_data['produtohig'];
                $precohig = $user_data['precohig'];
                $descricaohig = $user_data['descricaohig'];
                $imghig = $user_data['imghig'];
                $linkhig = $user_data['linkhig'];
            }

        }
        else
        {
            header('Location: ListHig.php');
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


<center><h1><font style="font-family: Corbel">Editar Produtos de Higiene</font></h1></center>
<br>

<center>
  
<form action="saveedithig.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="produtohig"></label>  
  <div class="col-md-4">
  <input id="produtohig" name="produtohig" type="text" placeholder="Nome do Produto" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="precohig"></label>  
  <div class="col-md-4">
  <input id="precohig" name="precohig" type="text" placeholder="Preço" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricaohig"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descricaohig" name="descricaohig">Descrição</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="imghig"></label>
  <div class="col-md-4">
    <input id="imghig" name="imghig" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="linkhig"></label>  
  <div class="col-md-4">
  <input id="linkhig" name="linkhig" type="text" placeholder="Link Pag Seguro" class="form-control input-md">
    
  </div>
</div>

<input type="hidden" name="idhigiene" value="<?php echo $idhigiene ?>">

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="higbotao"></label>
  <div class="col-md-4">
    <button type="submit" id="update" name="update" class="btn btn-primary">Atualizar</button>
  </div>
</div>

</fieldset>
</form>

</center>

<br><br><br><br><br><br>

<center><a href="ListHig.php"><button type="button" class="btn btn-success">Voltar</button></a></center>


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
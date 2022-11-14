<?php

    if(!empty($_GET['id']))
    {
        include_once ('config.php');

        $idadm = $_GET['id'];

        $sqlSelect = "SELECT * FROM adm WHERE idadm=$idadm";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $emailadm = $user_data['emailadm'];
                $senhaadm = $user_data['senhaadm'];
            }

        }
        else
        {
            header('Location: ListAdm.php');
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


<center><h1><font style="font-family: Corbel">Editar Administrador</font></h1></center>
<br>

<center>
  
  <form action="saveeditadm.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailadm"></label>  
  <div class="col-md-4">
  <input id="emailadm" name="emailadm" type="text" placeholder="Email" class="form-control input-md" value="<?php echo $emailadm ?>">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senhaadm"></label>
  <div class="col-md-4">
    <input id="senhaadm" name="senhaadm" type="password" placeholder="Senha" class="form-control input-md" value="<?php echo $senhaadm ?>">
    
  </div>
</div>

<input type="hidden" name="id" value="<?php echo $idadm ?>">

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="admbotao"></label>
  <div class="col-md-4">
    <button type="submit" id="update" name="update" class="btn btn-primary">Atualizar</button>
  </div>
</div>

</fieldset>
</form>

</center>

<br><br><br><br><br><br>

<center><a href="ListAdm.php"><button type="button" class="btn btn-success">Voltar</button></a></center>


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
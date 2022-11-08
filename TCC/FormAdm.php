<?php

    if(isset($_POST['submit']))
    {
        include_once ('config.php');
        
        $emailadm = $_POST['emailadm'];
        $senhaadm = $_POST['senhaadm'];

        $result = mysqli_query($conexao, "INSERT INTO adm(email,senha) 
        VALUES('$emailadm','$senhaadm')");

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


<center><h1><font style="font-family: Corbel">Cadastrar Administradores</font></h1></center>
<br>

<center>
  
  <form action="FormAdm.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="admemail"></label>  
  <div class="col-md-4">
  <input id="emailadm" name="admemail" type="text" placeholder="Email" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="admsenha"></label>
  <div class="col-md-4">
    <input id="senhaadm" name="admsenha" type="password" placeholder="Senha" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="admbotao"></label>
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
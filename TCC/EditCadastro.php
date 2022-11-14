<?php

    if(!empty($_GET['id']))
    {
        include_once ('config.php');

        $idclientes = $_GET['id'];

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
      <a class="navbar-brand">GreenLife</a>
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
  <input id="nome" name="nome" type="text" placeholder="Nome completo" class="form-control input-md" value="<?php echo $nome ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="email"></label>  
    <div class="col-md-4">
    <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" value="<?php echo $email ?>">
      
    </div>
  </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha"></label>  
  <div class="col-md-4">
  <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" value="<?php echo $senha ?>">
  </div>
</div>

<input type="hidden" name="id" value="<?php echo $idclientes ?>">

<br>
<button type="submit" id="update" name="update" class="btn btn-success">Atualizar</button>

</fieldset>
</form>

<br><br><br><br>
<a href="sessaoadmlistas.html"><button class='btn btn-sm btn-danger'>VOLTAR</button></a>


</div>
</center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
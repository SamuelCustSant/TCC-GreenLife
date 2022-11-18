<?php

  session_start();
  include_once('config.php');
  //print_r($_SESSION);
  if((!isset($_SESSION['emailadm']) == true) and (!isset($_SESSION['senhaadm']) == true))
  {
    unset($_SESSION['emailadm']);
    unset($_SESSION['senhaadm']);
    header('Location: FormLogin.php');
  }
  $logado = $_SESSION['emailadm'];

  $sql = "SELECT * FROM clientes";

  $result = $conexao->query($sql);

  print_r($result);

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


<center><h1><font style="font-family: Corbel">Clientes Cadastrados</font></h1></center>
<br>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $name; ?></h5>
    <h5 class="card-title"><?php echo $email; ?></h5>
    <h5 class="card-title"><?php echo $senha; ?></h5>
   <p class="card-text">Apenas um teste de merda</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>    

  </tbody>
</table>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
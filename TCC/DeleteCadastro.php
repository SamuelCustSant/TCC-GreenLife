<?php
include_once ('config.php');
    

    if(!empty($_GET['id']))
    {
        $idcadastro = $_GET['id'];

        $sqlSelect = "DELETE FROM clientes WHERE idclientes=$idclientes";

        $result = $conexao->query($sqlSelect);

        /*if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM clientes WHERE idclientes=$idclientes";
            $resultDelete = $conexao->query($sqlSelect);
        }*/
    }
    header('Location: ListCadastro.php');

?>
<?php
include_once ('config.php');


    if(!empty($_GET['id']))
    {
        $idalimentacao = $_GET['id'];

        $sqlSelect = "DELETE FROM vestuario WHERE idvestuario=$idvestuario";

        $result = $conexao->query($sqlSelect);

        /*if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM vestuario WHERE idvestuario=$idvestuario";
            $resultDelete = $conexao->query($sqlSelect);
        }*/
    }
    header('Location: ListVest.php');

?>
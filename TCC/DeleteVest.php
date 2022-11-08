<?php

    if(!empty[$_GET['idvestuario']])
    {
        include_once ('config.php');

        $idalimentacao = $_GET['idvestuario'];

        $sqlSelect = "SELECT * FROM vestuario WHERE idvestuario=$idvestuario";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM vestuario WHERE idvestuario=$idvestuario";
            $resultDelete = $conexao->query($sqlSelect);
        }
    }
    header('Location: ListVest.php');

?>
<?php
include_once ('config.php');


    if(!empty($_GET['id']))
    {
        $idadm = $_GET['id'];
        
        $sqlSelect = "DELETE FROM adm WHERE idadm=$idadm";

        //exit($sqlSelect);

        $result = $conexao->query($sqlSelect);

        /*if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM adm WHERE idadm=$idadm";
            $resultDelete = $conexao->query($sqlSelect);
        }*/
    }
    header('Location: ListAdm.php');

?>
<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $idadm = $_POST['id'];

        $emailadm = $_POST["emailadm"];
        $senhaadm = $_POST['senhaadm'];

        $sqlUpdate = "UPDATE adm SET emailadm= '$emailadm',senhaadm= '$senhaadm'
        WHERE idadm='$idadm'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ListAdm.php');

?>
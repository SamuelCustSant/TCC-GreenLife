<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $emailadm = $_POST["emailadm"];
        $senhaadm = $_POST['senhaadm'];

        $sqlUpdate = "UPDATE adm SET emailadm= '$emailadm',senhaadm= '$senhaadm'
        WHERE idadm='$idadm'";

        $result = mysqli_query($conexao, $sqlUpdate);
    }
    header('Location: ListAdm.php');

?>
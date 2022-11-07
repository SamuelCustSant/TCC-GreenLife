<?php

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['emailadm']) && !empty($_POST['senhaadm']))
    {
        include_once('config.php');
        $emailadm = $_POST['emailadm'];
        $senhaadm = $_POST['senhaadm'];

        //print_r('Email:' . $email);
        //print_r('Senha:' . $senha);

        $sql = "SELECT * FROM adm WHERE emailadm = '$emailadm' and senhaadm = '$senhaadm'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['emailadm']);
            unset($_SESSION['senhaadm']);
            header('Location: FormLoginAdm.php');
        }
        else 
        {
            $_SESSION['emailadm'] = $emailadm;
            $_SESSION['senhaadm'] = $senhaadm;
            header('Location: sessaoadm.php');
        }

    }
    else
    {
        header('Location: FormLoginAdm.php');
    }

?>
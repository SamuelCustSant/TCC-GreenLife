<?php

    session_start();
    unset($_SESSION['emailadm']);
    unset($_SESSION['senhaadm']);
    header("Location: FormLoginAdm.php");

?>
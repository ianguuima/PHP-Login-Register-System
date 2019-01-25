<?php

    require_once "config.php";

    $nivel_necessario = 2;


    if (!isset($_SESSION['user']) || ($_SESSION["usernivel"] < $nivel_necessario)) {
        // Destrói a sessão por segurança
        session_destroy();
        // Redireciona o visitante de volta pro login
        header("Location: ../index.php"); exit;
    }

    ?>


<h1 align="center">Autenticado com Sucesso, seja bem vindo <?php echo $_SESSION['username'] ?></h1>

<form action="logout.php" method="post">
    <input type="submit" name="logout" value="Logout" />
</form>
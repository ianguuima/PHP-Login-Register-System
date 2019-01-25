<?php

    require_once "../config.php";
    require_once "mysql.php";

    if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      exit;
    }

    $db = array(
        "host" => "127.0.0.1",
        "user" => "root",
        "password" => "vertrigo",
        "database" => "login"

    );

     $start = new mysql($db["host"], $db["user"], $db["password"], $db["database"]);
     $mysql = $start->getConnection();

    $usuario = mysqli_real_escape_string($mysql, $_POST['usuario']);
    $senha = mysqli_real_escape_string($mysql, $_POST['senha']);


    $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
    $query = mysqli_query($mysql, $sql);
    if (mysqli_num_rows($query) != 1) {
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
        echo "Login inválido!"; exit;
    } else {
        // Salva os dados encontados na variável $resultado
        $resultado = mysqli_fetch_assoc($query);
    }

    if (!isset($_SESSION)) session_start();

    $_SESSION['user'] = $resultado['id'];
    $_SESSION['username'] = $resultado['nome'];
    $_SESSION['usernivel'] = $resultado['nivel'];

    header("Location: ../panel.php"); exit;


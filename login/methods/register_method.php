<?php

    require_once "mysql.php";

    if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']) OR empty($_POST['email']))) {
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

    $nome = mysqli_real_escape_string($mysql, $_POST['nome']);
    $usuario = mysqli_real_escape_string($mysql, $_POST['usuario']);
    $senha = mysqli_real_escape_string($mysql, $_POST['senha']);
    $email = mysqli_real_escape_string($mysql, $_POST['email']);

    //$sql = "SELECT nome, email FROM usuarios WHERE (usuario = '".$usuario."', email = '". $email."')";
    $emailsearch = "SELECT * FROM usuarios WHERE email = '$email'";
    $nomesearch = "SELECT * FROM usuarios WHERE usuario = '$usuario'";


    $query = mysqli_query($mysql, $emailsearch);

    if (mysqli_num_rows($query) > 0) {
    echo "Email em uso!"; exit;
    }

    $query = mysqli_query($mysql, $nomesearch);

    if (mysqli_num_rows($query) > 0) {
        echo "Usuario em uso!"; exit;
    }

    $register = "INSERT INTO usuarios VALUES (NULL, '$nome', '$usuario', SHA1( '$senha'), '$email', 2, 1, NOW( ));";


    $valor = mysqli_query($mysql, $register);


    if ($valor){
        header("Location: ../../index.php");
    } else {
        echo "ERROR!";
    }

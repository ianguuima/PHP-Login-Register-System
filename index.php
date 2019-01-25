<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Login</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.php">Login</a></li>
            <li><a href="register.php">Registrar</a></li>
        </ul>
    </nav>

    <div class="login">

        <form action="login/methods/login_method.php" method="post">
            <label for="user">Usuário</label>
            <input type="text" name="usuario" id="user" />
            <label for="pass">Senha</label>
            <input type="password" name="senha" id="pass" />
            <input id="button" type="submit" value="Entrar" />
        </form>



    </div>


    <footer><p>Criado por Ian Guimarães!</p></footer>



</body>
</html>
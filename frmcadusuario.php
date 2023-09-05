<html>
    <head>
        <meta charset = "UFT-8">
        <title> Cadastrar Usuário </title>
    </head>
    <body>
        <h1>Formulário de Cadastro de Usuário</h1>
        <hr>
        <a href = "menu.php"> Voltar ao Menu </a>
        <form action = "inserirusuario.php" method = "post">
            Login             <input name = "login" type = "text" required> * <br>
            Senha             <input name = "senha" type = "password"> <br>
            Email             <input name = "email" type = "email"> <br>
            Data de cadastro  <input name = "dtcad" type = "date"><br>
                              <input type = "submit" value = "Cadastrar"> <br><br>
        </form>
    </body>
</html>
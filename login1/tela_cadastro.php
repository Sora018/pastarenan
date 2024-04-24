<?php
    if(isset($_POST['submit'])) {
        include_once('config.php');

        $username = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO user(username, email, senha)
        VALUES ('$username', '$email', '$senha')");

        if($result) {
            echo "Usuário cadastrado com sucesso.";
        } else {
            echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action='tela_cadastro.php' method="POST">
        <label for="usuario">Usuário</label><br>
        <input type="text" name="usuario" id="usuario" class="inputUser" required>
        <br>
        <label for="email">Email</label> <br>
        <input type="email" name="email" id="email" class="inputUser" required>
        <br>
        <label for="senha">Senha</label> <br>
        <input type="password" name="senha" id="senha" class="inputUser" required>
        <br>
        <input type="submit" name="submit" id="submit">
    </form>
    <a href="home.php">Voltar</a>
</body>
</html>

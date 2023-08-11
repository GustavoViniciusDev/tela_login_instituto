<?php
    require_once('classes/Usuario.php');
    require_once('conexao/conexao.php');

    $database = new Conexao();
    $db = $database->getConnection();
    $usuario = new Usuario($db);

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confSenha'];

        if($usuario->cadastrar($nome,$email,$senha,$confSenha)){
            echo "Cadastro realizado com sucesso";
        }else{
            echo "Erro ao cadastrar!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
</head>
<body>
    <form  method="POST">
        <label for="">Nome de usuario</label>
        <input type="text" name="nome">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Senha</label>
        <input type="password" name="senha">
        <label for="">Confirmar senha</label>
        <input type="password" name="confSenha">
        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>
    <a href="index.php">Voltar para tela de login</a>
</body>
</html>
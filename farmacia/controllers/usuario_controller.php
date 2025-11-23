<?php
require '../banco/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = hash('sha512', $_POST["senha"]);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$nome, $email, $senha])) {
        echo "<script>alert('Usuário cadastrado com sucesso!');
        window.location='../views/login.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar usuário!');
        window.location='../views/cadastro.php';</script>";
    }
}

<?php
session_start();
require '../banco/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $senha = hash('sha512', $_POST["senha"]);

    $sql = "SELECT nome, email FROM usuarios WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email, $senha]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $_SESSION["usuario"] = $usuario["email"];
        $_SESSION["nome"] = $usuario["nome"];

        header("Location: ../views/home.php");
        exit;
    } else {
        echo "<script>
                alert('Login inválido!');
                window.location='../views/login.php';
             </script>";
    }
}

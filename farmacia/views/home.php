<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home - Farmácia</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark d-flex align-items-center justify-content-center" style="height: 100vh;">

<div class="text-center p-4 bg-white shadow-lg rounded" style="max-width: 400px; width: 100%;">
    <h2 class="mb-3">Bem-vindo, <span class="text-primary"><?php echo $_SESSION["nome"]; ?></span>!</h2>

    <a href="produtos/cadastrar.php" class="btn btn-success w-100 mb-2">Cadastrar Produto</a>
    <a href="produtos/listar.php" class="btn btn-info w-100 mb-2">Listar Produtos</a>
    <a href="../logout.php" class="btn btn-danger w-100">Sair</a>
</div>

</body>
</html>

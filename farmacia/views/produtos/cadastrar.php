<?php session_start(); if (!isset($_SESSION["usuario"])) { header("Location: ../login.php"); exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<div class="container">
    <h3>Cadastrar Produto</h3>
    <form action="../../controllers/produto_controller.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" class="form-control mb-2" required>
        <input type="number" step="0.01" name="preco" placeholder="Preço" class="form-control mb-2" required>
        <input type="number" name="quantidade" placeholder="Quantidade" class="form-control mb-2" required>
        <textarea name="descricao" class="form-control mb-2" placeholder="Descrição" rows="3"></textarea>
        <button type="submit" name="cadastrar" class="btn btn-success">Salvar</button>
        <a href="../home.php" class="btn btn-secondary">Voltar</a>
    </form>
</div>
</body>
</html>

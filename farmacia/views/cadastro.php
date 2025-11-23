<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Farmácia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-dark d-flex align-items-center justify-content-center" style="height: 100vh;">
<form action="../controllers/usuario_controller.php" method="POST" class="p-4 shadow-lg rounded bg-white" style="width: 350px;">
    <h3 class="text-center mb-3">Criar Conta</h3>

    <input type="text" name="nome" class="form-control mb-2" placeholder="Nome completo" required>
    <input type="email" name="email" class="form-control mb-2" placeholder="E-mail" required>
    <input type="password" name="senha" class="form-control mb-3" placeholder="Senha" required>

    <button type="submit" class="btn btn-success w-100">Cadastrar</button>
    <a href="login.php" class="d-block text-center mt-2">Já tenho conta</a>
</form>

</body>
</html>

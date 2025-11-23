<?php
session_start();
if (!isset($_SESSION["usuario"])) { header("Location: ../login.php"); exit; }
require '../../banco/conexao_produto.php';

$sql = "SELECT * FROM medicamentos";
$stmt = $conn->query($sql);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listar Medicamentos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4 rounded-4">
        <h2 class="text-center mb-4"> Medicamentos Cadastrados</h2>

        <div class="d-flex justify-content-between mb-3">
            <a href="cadastrar.php" class="btn btn-success">➕Cadastrar Novo</a>
            <a href="../home.php" class="btn btn-secondary">⬅ Voltar</a>
        </div>

        <?php if (count($produtos) > 0): ?>
            <table class="table table-hover table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($produtos as $p): ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['nome'] ?></td>
                        <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                        <td><?= $p['quantidade'] ?></td>
                        <td>
                            <a href="../../controllers/produto_controller.php?excluir=<?= $p['id'] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Excluir este medicamento?')">
                               Excluir
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-warning text-center">Nenhum medicamento cadastrado.</div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>

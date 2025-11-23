<?php
require '../banco/conexao_produto.php';

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO medicamentos (nome, preco, quantidade, descricao) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$nome, $preco, $quantidade, $descricao])) {
        echo "<script>alert('Medicamento cadastrado com sucesso!');
        window.location='../views/produtos/listar.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar medicamento!');
        window.location='../views/produtos/cadastrar.php';</script>";
    }
}


if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];
    $sql = "DELETE FROM medicamentos WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    echo "<script>alert('Medicamento deletado!'); window.location='../views/produtos/listar.php';</script>";
}
?>

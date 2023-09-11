<?php
include("conecta.php");

$cod = $_POST['cod'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare('INSERT INTO alunos (nome) VALUES (:nome)');
$stmt->bindValue(':nome', $nome);
$stmt->execute();

if ($stmt->rowCount() >= 1) {
    echo json_encode('Salvo com sucesso');
}else {
    echo json_encode('Erro');
}
?>
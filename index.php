<?php
require_once 'funcoes.php';
$alunos = require 'alunos.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nome"])) {
    $novoAluno = [
        "nome" => $_POST["nome"],
        "rm" => $_POST["rm"],
        "email" => $_POST["email"],
        "notas" => [
            floatval($_POST["nota1"]),
            floatval($_POST["nota2"]),
            floatval($_POST["nota3"]),
        ]
    ];
    $alunos[] = $novoAluno;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Alunos</h1>
        
        <form method="POST" class="formulario">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="rm" placeholder="RM" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="number" step="0.1" name="nota1" placeholder="Nota 1" required>
            <input type="number" step="0.1" name="nota2" placeholder="Nota 2" required>
            <input type="number" step="0.1" name="nota3" placeholder="Nota 3" required>
            <button type="submit">Cadastrar</button>
        </form>

        <h2>Lista de Alunos</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>RM</th>
                    <th>Email</th>
                    <th>Notas</th>
                    <th>Média</th>
                    <th>Situação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno): ?>
                    <?php exibirAluno($aluno); ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

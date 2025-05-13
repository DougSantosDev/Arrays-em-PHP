<?php
// Carrega o array de alunos do arquivo alunos.php
$alunos = require 'alunos.php';

// Importa as funções auxiliares do arquivo funcoes.php
require_once 'funcoes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <!-- Importa o CSS para estilização da tabela -->
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h2>Lista de Alunos</h2>

    <!-- Tabela para exibir os dados dos alunos -->
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
            <!-- Percorre o array de alunos e exibe os dados de cada um -->
            <?php foreach ($alunos as $aluno): ?>
                <?php exibirAluno($aluno); ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

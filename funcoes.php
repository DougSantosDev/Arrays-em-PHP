<?php
// Calcula a média das notas do aluno
function calcularMedia(array $notas): float {
    return array_sum($notas) / count($notas);
}

// Retorna a situação do aluno com base na média
function obterSituacao(float $media): string {
    return $media >= 6.0 ? 'Aprovado' : 'Reprovado';
}

// Formata as notas como uma string separada por vírgulas
function formatarNotas(array $notas): string {
    return implode(", ", $notas);
}

// Exibe uma linha da tabela HTML com os dados de um aluno
function exibirAluno(array $aluno): void {
    $media = calcularMedia($aluno['notas']);
    $situacao = obterSituacao($media);

    echo "<tr>";
    echo "<td>{$aluno['nome']}</td>";
    echo "<td>{$aluno['rm']}</td>";
    echo "<td>{$aluno['email']}</td>";
    echo "<td>" . formatarNotas($aluno['notas']) . "</td>";
    echo "<td>" . number_format($media, 2) . "</td>";
    echo "<td>$situacao</td>";
    echo "</tr>";
}

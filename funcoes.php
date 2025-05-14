<?php
function calcularMedia(array $notas): float {
    return array_sum($notas) / count($notas);
}

function obterSituacao(float $media): string {
    return $media >= 6.0 ? 'Aprovado' : 'Reprovado';
}

function formatarNotas(array $notas): string {
    return implode(', ', $notas);
}

function exibirAluno(array $aluno): void {
    $media = calcularMedia($aluno['notas']);
    $situacao = obterSituacao($media);

    echo '<tr>';
    echo "<td>{$aluno['nome']}</td>";
    echo "<td>{$aluno['rm']}</td>";
    echo "<td>{$aluno['email']}</td>";
    echo "<td>" . formatarNotas($aluno['notas']) . "</td>";
    echo "<td>" . number_format($media, 2) . "</td>";
    echo "<td>{$situacao}</td>";
    echo '</tr>';
}

/*
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
                25363636-2 - Jheymis Bueno Gonçalves
                25363611-2 - Thiago de Barros Inácio
                25363487-2 - Leonardo Schimock Silveira 
                25357718-2 - Jean Carlos Siqueira dos Santos

Data: 16 de Setembro de 2025
Descritivo: Faça um programa que classifique notas (A, B, C, D, F)
*\

<?php
$nota = 85;

if ($nota >= 90) {
    $classificacao = "A";
} elseif ($nota >= 80) {
    $classificacao = "B";
} elseif ($nota >= 70) {
    $classificacao = "C";
} elseif ($nota >= 60) {
    $classificacao = "D";
} else {
    $classificacao = "F";
}

echo "Nota: $nota → Classificação: $classificacao";
?>
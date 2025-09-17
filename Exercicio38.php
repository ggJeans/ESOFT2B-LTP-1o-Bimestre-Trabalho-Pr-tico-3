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
Descritivo: Faça um programa que converta temperatura entre Celsius e Fahrenheit baseado em uma escolha
*\

<?php
$valor = 30;
$tipo = "C"; // "C" para Celsius, "F" para Fahrenheit

if ($tipo == "C") {
    $resultado = ($valor * 9/5) + 32;
    echo "$valor °C = $resultado °F";
} else {
    $resultado = ($valor - 32) * 5/9;
    echo "$valor °F = $resultado °C";
}
?>
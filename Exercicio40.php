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
Descritivo: Crie uma calculadora simples com switch case
*\

<?php
$valor1 = 10;
$valor2 = 5;
$operacao = "+"; // "+", "-", "*", "/"

switch ($operacao) {
    case "+":
        $resultado = $valor1 + $valor2;
        break;
    case "-":
        $resultado = $valor1 - $valor2;
        break;
    case "*":
        $resultado = $valor1 * $valor2;
        break;
    case "/":
        $resultado = $valor2 != 0 ? $valor1 / $valor2 : "Erro: Divisão por zero";
        break;
    default:
        $resultado = "Operação inválida";
}
echo "Resultado: $resultado";
?>
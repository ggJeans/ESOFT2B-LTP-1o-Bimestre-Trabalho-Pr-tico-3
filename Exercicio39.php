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
Descritivo: Escreva um script que determine o maior entre três números
*\

<?php
$a = 15;
$b = 22;
$c = 9;

$maior = $a;

if ($b > $maior) $maior = $b;
if ($c > $maior) $maior = $c;

echo "O maior número é $maior";
?>
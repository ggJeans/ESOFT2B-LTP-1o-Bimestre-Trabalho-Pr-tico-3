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
Descritivo: Crie uma condição que verifique se um triângulo é válido
*\

<?php
$a = 5;
$b = 7;
$c = 10;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "O triângulo é válido";
} else {
    echo "O triângulo não é válido";
}
?>
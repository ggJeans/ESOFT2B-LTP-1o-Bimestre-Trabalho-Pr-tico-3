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
Descritivo: Crie uma expressão ternária que verifique se um ano é bissexto
*\

<?php
$ano = 2016;
echo (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) ? "Bissexto" : "Não bissexto";
?>
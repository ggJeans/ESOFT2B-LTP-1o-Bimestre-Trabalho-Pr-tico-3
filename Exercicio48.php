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
Descritivo: Crie um ternário que retorne "Frio" se temperatura < 15, "Agradável" se entre 15-25, "Quente" se >25*\

<?php
$temperatura = 20;
echo ($temperatura < 15) ? "Frio" : (($temperatura <= 25) ? "Agradável" : "Quente");
?>
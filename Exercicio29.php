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
Descritivo: Teste se uma string não está vazia E tem mais de 3 caracteres
*\

<?php
$str = "Olá!";

if (!empty($str) && strlen($str) > 3) {
    echo "A string não está vazia e tem mais de 3 caracteres";
} else {
    echo "A string está vazia ou tem 3 caracteres ou menos";
}
?>
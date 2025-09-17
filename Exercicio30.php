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
Descritivo: Verifique se NÃO é fim de semana (usando operador lógico NOT)
*\

<?php
$dia = "quarta"; // exemplo: "sábado", "domingo", "segunda"...

if (!($dia == "sábado" || $dia == "domingo")) {
    echo "Não é fim de semana";
} else {
    echo "É fim de semana";
}
?>
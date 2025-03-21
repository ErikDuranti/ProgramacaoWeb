<?php
$lista = array("laranja", "maçã", "banana", "uva", "melancia");

print_r($lista);
echo "<hr>";

echo $lista[1], " - ";
echo $lista[3];

$aluno = array(
    [
        "nome" => "Rafael",
        "curso" =>"ADS",
        "cidade" => "Poa"
    ],
    [
        "nome" => "João",
        "curso" =>"ADS",
        "cidade" => "Poa"
    ],
);
echo "<hr>";
print_r($aluno);

$cafe = ["Tapioca", "Queijo", "Presunto", "Carreteiro", "Iogurte", "Café"];
echo "<hr>";
print_r($cafe);
?>
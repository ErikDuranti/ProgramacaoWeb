<?php
$lista = array("laranja", "maçã", "banana", "uva", "melancia");

print_r($lista);
echo "<hr>";

echo $lista[1], " - ";
echo $lista[3];

$aluno = array("nome" => "Pedro",
               "idade" => 25, 
               "curso" => "ADS",
               "altura" => 1.75,
               "cidade" => "São Paulo");
echo "<hr>";
print_r($aluno);
echo "<hr>";
echo $aluno["nome"];

$cafe = ["Tapioca", "Queijo", "Presunto", "Carreteiro", "Iogurte", "Café"];
echo "<hr>";
print_r($cafe);
?>
<?php

echo "Pagina aberta";

$nome = $_GET['nome'];
echo "<br>";
//echo "Bem vindo" . $nome;

$sobrenome = $_GET['sobrenome'];
echo "<br>";
echo "Bem vindo " . $nome. " ".$sobrenome;
/*

http://localhost/FelipeLenz/aula3/get.php?nome=Daniel$sobrenome=Medeiros

*/
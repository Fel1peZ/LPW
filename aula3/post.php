<?php

echo "Pagina aberta";

$nome = $_POST['nome'];
echo "<br>";
//echo "Bem vindo" . $nome;

$sobrenome = $_POST['sobrenome'];
echo "<br>";
echo "Bem vindo " . $nome. " ".$sobrenome;

$idade = $_GET['idade'];
echo " ". $idade;
/*

http://localhost/FelipeLenz/aula3/get.php?nome=Daniel$sobrenome=Medeiros

*/
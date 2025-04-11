<?php

$get1 = $_GET['num1'];
$get2 = $_GET['num2'];
$get3 = $_GET['num3'];
echo "Média Aritmetica <br>";
echo "Get média: " . ($get1 + $get2 + $get3)/3;

$post1 = $_POST['num1'];
$post2 = $_POST['num2'];
$post3 = $_POST['num3'];
echo "<br>Post média: " . ($post1 + $post2 + $post3)/3;


/*

http://localhost/FelipeLenz/aula3/media.php?num1=10&num2=10&num3=10
*/
<?php


//get
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

echo "Soma get ". $num1+$num2;
//post
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];


echo "<br>Soma post ". $num3+$num4;


/*

http://localhost/FelipeLenz/aula3/soma.php?num1=10&num2=20

*/
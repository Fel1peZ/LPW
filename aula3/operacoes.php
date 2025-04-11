<?php



$num2 = $_GET['num2'];


if(isset($_GET['num1'])&& isset($_GET['num2'])){
    $num1 = $_GET['num1'];
    if($num1 != "" && $num2 != ""){
        echo "Soma : ".$num1+$num2."<br>Subtração : ".$num1-$num2."<br>Multiplicação : ".$num1*$num2."<br>Divisão : ".$num1/$num2."<br> : ".$num1%$num2;
    }else
    echo "<br>Informe os dois parâmetros 'num1' e 'num2'!";
}else{
    echo "<br>Informe os dois parâmetros 'num1' e 'num2'!";

}
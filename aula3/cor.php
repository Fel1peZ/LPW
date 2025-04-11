<?php

echo"Get cor";

if(isset($_GET['cor'])){
    $cor = $_GET['cor'];   
    if($cor != ""){
    echo'<body style="background-color: '.$cor.';"> </body>';
    }else
        echo "Informe o parâmetro 'cor'!";
}else{
    echo "<br>Informe o parâmetro 'cor'!";

}
/*

http://localhost/FelipeLenz/aula3/cor.php?
*/
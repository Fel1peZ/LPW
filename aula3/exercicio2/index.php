<?php   

require_once("modelo/Pessoa.php");



if(isset($_GET['tipo']) &&isset($_GET['nome'])&&isset($_GET['sobrenome'])&&isset($_GET['idade'])){
    $tipo = $_GET['tipo'];
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $idade = $_GET['idade'];
    if($tipo =="A"){
        $pessoa = array(
            "nome"=>$nome,
            "sobrenome"=>$sobrenome,
            "idade"=>$idade,
        );
        echo"Array<br>Nome completo: ".$pessoa['nome']." ".$pessoa['sobrenome']."<br>Idade: ".$pessoa['idade'];
    }
    if($tipo == "C"){
        $pessoa = new Pessoa($nome,$sobrenome,$idade);
        echo "Classe<br>".$pessoa;
    }if($tipo!= "A" && $tipo!= "C"){
        echo"<br>Informe o parâmetro tipo corretamente com A ou C";
    }
}else{
    echo"<br>Informe os parâmetro tipo,nome,sobrenome e idade corretamente";
}
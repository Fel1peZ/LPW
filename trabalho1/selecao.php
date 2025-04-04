<?php


function desenhaLinha($nr, $nome, $corLinha,){
    $cor = 0;
    if($corLinha == 'a'){
        $cor = 'yellow';
    }else{
        $cor = 'green';
    }
    echo '<tr></tr>';
    echo '<td style="background-color:'.$cor.'">'.$nr. '</td>';
    echo '<td style="background-color:'.$cor.'">'.$nome. '</td>'; 
    echo "</tr>";
}


$jogadores = array();
$jogador1 = array("nr"=>1,"nome"=>"Tafarel","corLinha"=>"a");
$jogador2 = array("nr"=>2,"nome"=>"Jorginho","corLinha"=>"v");
$jogador3 = array("nr"=>13,"nome"=>"Aldair","corLinha"=>"a");
$jogador4 = array("nr"=>15,"nome"=>"Márcio Santos","corLinha"=>"v");
$jogador5 = array("nr"=>6,"nome"=>"Branco","corLinha"=>"a");
$jogador6 = array("nr"=>5,"nome"=>"Mauro Silva","corLinha"=>"v");
$jogador7 = array("nr"=>8,"nome"=>"Dunga","corLinha"=>"a");
$jogador8 = array("nr"=>17,"nome"=>"Mazinho","corLinha"=>"v");
$jogador9 = array("nr"=>9,"nome"=>"Zinho","corLinha"=>"a");
$jogador10 = array("nr"=>11,"nome"=>"Romário","corLinha"=>"v");
$jogador11 = array("nr"=>7,"nome"=>"Bebeto","corLinha"=>"a");

array_push($jogadores,$jogador1,$jogador2,$jogador3,$jogador4,$jogador5,$jogador6,$jogador7,$jogador8,$jogador9,$jogador10,$jogador11);

echo "<h1>Seleção</h1>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "</tr>";

foreach($jogadores as $dado){

    desenhaLinha($dado['nr'],$dado['nome'],$dado['corLinha']);
}

echo "</table>";
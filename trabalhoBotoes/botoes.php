<?php   

require_once("modelo/Link.php");

echo '<link rel="stylesheet" href="style.css">';

function desenhaBotao($Links,$nome){
    echo'';
    echo'<div class="dropdown">';
    echo'<button class="dropbtn">'.$nome.'</button>';
    echo'<div class="dropText">';
    foreach($Links as $dado){
        echo'<span><img src="'.$dado->getLinkImg().'" width="20" height="20">'.$dado->getInfo().'</span>';

    }
    
    echo'</div>';
    echo'</div>';
};

//Premier league
$pl = array();

$p1 = new Link;
$p1->setLinkImg("https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/363.png&scale=crop&cquality=40&location=origin&w=80&h=80");
$p1->setInfo("Chelsea");

$p2 = new Link;
$p2->setLinkImg("https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/367.png&scale=crop&cquality=40&location=origin&w=80&h=80");
$p2->setInfo("Tottenham ");

$p3 = new Link;
$p3->setLinkImg("https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/359.png&scale=crop&cquality=40&location=origin&w=80&h=80");
$p3->setInfo("Arsenal");

array_push($pl,$p1,$p2,$p3);
//Brasileirao
$br= array();

$b1 = new Link;
$b1->setLinkImg("https://e.imguol.com/futebol/brasoes/40x40/corinthians.png.webp");
$b1->setInfo("Corinthians");

$b2 = new Link;
$b2->setLinkImg("https://e.imguol.com/futebol/brasoes/40x40/botafogo.png.webp");
$b2->setInfo("Botafogo");

$b3 = new Link;
$b3->setLinkImg("https://e.imguol.com/futebol/brasoes/40x40/vasco.png.webp");
$b3->setInfo("Vasco");

array_push($br,$b1,$b2,$b3);

//La liga
$ll= array();

$l1 = new Link;
$l1->setLinkImg("https://s.sde.globo.com/media/organizations/2025/03/12/Atl%C3%A9tico_de_Madrid.svg");
$l1->setInfo("Atletico");

$l2 = new Link;
$l2->setLinkImg("https://s.sde.globo.com/media/teams/2018/03/12/real-madrid.svg");
$l2->setInfo("Real Madrid");

$l3 = new Link;
$l3->setLinkImg("data:image/png;base64,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");
$l3->setInfo("Barcelona");

array_push($ll,$l1,$l2,$l3);


//Ligue One

$lo= array();

$o1 = new Link;
$o1->setLinkImg("data:image/png;base64,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");
$o1->setInfo("PSG");

$o2 = new Link;
$o2->setLinkImg("data:image/png;base64,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");
$o2->setInfo("Monaco");

$o3 = new Link;
$o3->setLinkImg("data:image/png;base64,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");
$o3->setInfo("Olympique");

array_push($lo,$o1,$o2,$o3);


desenhaBotao($pl,'Premier League');
desenhaBotao($br,'Brasileirao');
desenhaBotao($ll,'La liga');
desenhaBotao($lo,'Ligue One');


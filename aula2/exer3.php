<?php

function desenhaLinha($imagem, $nome, $tipo1, $tipo2, $desc){
    echo "<tr>";
    echo "<td> ".$imagem. "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $tipo1 . "</td>";
    echo "<td>" . $tipo2 . "</td>";
    echo "<td>" . $desc . "</td>";
    echo "</tr>";
}

class Pokemon {
    private $imagem;
    private $nome ;
    private $tipo1;
    private $tipo2;
    private $desc;   



    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem): self
    {
        $this->imagem = $imagem;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getTipo1()
    {
        return $this->tipo1;
    }

    public function setTipo1($tipo1): self
    {
        $this->tipo1 = $tipo1;
        return $this;
    }

    public function getTipo2()
    {
        return $this->tipo2;
    }

    public function setTipo2($tipo2): self
    {
        $this->tipo2 = $tipo2;
        return $this;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesc($desc): self
    {
        $this->desc = $desc;
        return $this;
    }
}


$p1 = new Pokemon();
$p1->setImagem("<img style='width:100px; ' src='https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/006.png'>");
$p1->setNome("Charizard");
$p1->setTipo1("Fogo");
$p1->setTipo2("Voador");
$p1->setDesc("<a href='https://www.pokemon.com/br/pokedex/charizard'>descrição</a>");

$p2 = new Pokemon();
$p2->setImagem("<img  style='width:100px; ' src='https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/025.png' alt=''>");
$p2->setNome("Pikachu");
$p2->setTipo1("Elétrico");
$p2->setTipo2("");
$p2->setDesc("<a href='https://www.pokemon.com/br/pokedex/pikachu'>descrição</a>");

$p3 = new Pokemon();
$p3->setImagem("<img  style='width:100px; ' src='https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png' alt=''>");
$p3->setNome("Bulbasaur");
$p3->setTipo1("Planta");
$p3->setTipo2("Venenoso");
$p3->setDesc("<a href='https://www.pokemon.com/br/pokedex/bulbasaur'>descrição</a>");

$p4 = new Pokemon();
$p4->setImagem("<img  style='width:100px; ' src='https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/007.png' alt=''>");
$p4->setNome("Squirtle");
$p4->setTipo1("Água");
$p4->setTipo2("");
$p4->setDesc("<a href='https://www.pokemon.com/br/pokedex/squirtle'>descrição</a>");

$p5 = new Pokemon();
$p5->setImagem("<img  style='width:100px; ' src='https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/133.png' alt=''>");
$p5->setNome("Eevee");
$p5->setTipo1("Normal");
$p5->setTipo2("");
$p5->setDesc("<a href='https://www.pokemon.com/br/pokedex/eevee'>descrição</a>");

$p6 = new Pokemon();
$p6->setImagem("<img  style='width:100px; ' src='https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/039.png' alt=''>");
$p6->setNome("Jigglypuff");
$p6->setTipo1("Normal");
$p6->setTipo2("Fada");
$p6->setDesc("<a href='https://www.pokemon.com/br/pokedex/jigglypuff'>descrição</a>");


$pokemons = array($p1, $p2, $p3, $p4, $p5, $p6);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Imagem</th>";
echo "<th>Nome</th>";
echo "<th>Tipo 1</th>";
echo "<th>Tipo 2</th>";
echo "<th>Descrição</th>";
echo "</tr>";


foreach($pokemons as $p) {
    desenhaLinha($p->getImagem(), $p->getNome(), $p->getTipo1(), $p->getTipo2(), $p->getDesc());
}

echo "</table>";


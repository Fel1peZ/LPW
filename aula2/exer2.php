<?php

function desenhaLinha($numero, $nome, $inicio, $fim){
    echo "<tr>";
    echo "<td>" . $numero . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $inicio . "</td>";
    echo "<td>" . $fim . "</td>";
    echo "</tr>";
}


class Presidente {
    private $numero;
    private $nome ;
    private $inicio;
    private $fim;

    

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of inicio
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set the value of inicio
     */
    public function setInicio($inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get the value of fim
     */
    public function getFim()
    {
        return $this->fim;
    }

    /**
     * Set the value of fim
     */
    public function setFim($fim): self
    {
        $this->fim = $fim;

        return $this;
    }
}


$p1 = new Presidente();
$p1-> setNumero(16);
$p1->setNome("Eurico Gaspar Dutra");
$p1->setInicio(1946);
$p1->setFim(1951);


$p2 = new Presidente();
$p2-> setNumero(17);
$p2->setNome("Getúlio Vargas");
$p2->setInicio(1951);
$p2->setFim(1954);

$p3 = new Presidente();
$p3-> setNumero(18);
$p3->setNome("Café Filho");
$p3->setInicio(1954);
$p3->setFim(1955);

$p4 = new Presidente();
$p4-> setNumero(19);
$p4->setNome("Carlos Luz");
$p4->setInicio(1955);
$p4->setFim(1955);

$p5 = new Presidente();
$p5-> setNumero(20);
$p5->setNome("Nereu Ramos");
$p5->setInicio(1955);
$p5->setFim(1956);

$p6 = new Presidente();
$p6-> setNumero(21);
$p6->setNome("Juscelino Kubitschek");
$p6->setInicio(1956);
$p6->setFim(1961);

$presidentes = array($p1, $p2, $p3, $p4, $p5, $p6);


echo "<table border='1'>";
echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "<th>Inicio</th>";
echo "<th>Fim</th>";
echo "</tr>";

foreach($presidentes as $p) {
    desenhaLinha($p->getNumero(), $p->getNome(), $p->getInicio(), $p->getFim());
}
echo "</table>";
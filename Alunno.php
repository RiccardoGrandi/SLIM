<?php

class Alunno implements JsonSerializable{
    protected $nome;
    protected $cognome;
    protected $eta;

    function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    public function getEta() {
        return $this->eta;
    }

    public function setEta($eta) {
        $this->eta = $eta;
    }

    public function stampaAlunno() {
        $s = "Nome: " . $this->nome . "<br>";
        $s .= "Cognome: " . $this->cognome . "<br>";
        $s .= "Età: " . $this->eta . "<br>";
        return $s;
    }

    public function jsonSerialize() {
        $a = [
            "nome"=>$this->nome,
            "cognome"=>$this->cognome,
            "eta"=>$this->eta,
        ];
        return $a;
    }
}

?>
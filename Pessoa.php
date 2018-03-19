<?php
class Pessoa {
    
    private $nome;
    private $idade;
    private $sexo;
    // Metodos especiais
    public function __construct($no, $id, $se) {
        
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
        
    }
    
    function getNome() {
        return $this->nome;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function getIdade() {
        return $this->idade;
    }
    function setIdade($idade) {
        $this->idade = $idade;
    }
    function getSexo() {
        return $this->sexo;
    }
    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function fazerNiver() {
        $this->setIdade( $this->getIdade() + 1);
    }
    
    
}

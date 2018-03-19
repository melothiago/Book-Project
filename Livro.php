<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao{
    
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Metodos Especiais
    public function __construct($ti, $au, $to, $le) {
        
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPaginas($to);
        $this->setPagAtual(0);
        $this->setAberto(FALSE);
        $this->setLeitor($le);
        
    }
    
    function getTitulo() {
        return $this->titulo;
    }
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    function getAutor() {
        return $this->autor;
    }
    function setAutor($autor) {
        $this->autor = $autor;
    }
    function getTotPaginas() {
        return $this->totPaginas;
    }
    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }
    function getPagAtual() {
        return $this->pagAtual;
    }
    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    function getAberto() {
        return $this->aberto;
    }
    function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    function getLeitor() {
        return $this->leitor;
    }
    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    // Metodos
    public function detalhes() {
        echo "<hr>Livro " . $this->getTitulo() . " escrito por " . $this->getAutor();
        echo "</br>Paginas: " . $this->getTotPaginas() . " atual " . $this->getPagAtual();
        echo "</br>Sendo lido por " . $this->leitor->getNome();
    }
    public function abrir() {
        $this->setAberto(TRUE);
    }
    public function fechar() {
        $this->setAberto(FALSE);
    }
    public function folhear($p) {
        if($p > $this->getTotPaginas()){
            $this->setPagAtual(0);
        }else{
            $this->setPagAtual($p);
        }
        
    }
    public function avancarPag() {
        $this->setPagAtual($this->getPagAtual() + 1);
    }
    public function voltarPag() {
        $this->setPagAtual($this->getPagAtual() - 1);
    }
}

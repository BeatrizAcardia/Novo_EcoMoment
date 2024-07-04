<?php

class Curiosidades{
    private $id;
    private $titulo;
    private $conteudo;
    
    public function __construct(){
        
    }

    public function Curiosidades($id, $titulo, $conteudo){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->conteudo = $conteudo;
    }

    public function getId(){
        return $this->id;
    }
    public function setIdUsuarioWeb($name) {
    $this->id = $name;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($name) {
    $this->titulo = $name;
    }
    public function getConteudo(){
        return $this->conteudo;
    }
    public function setConteudo($name) {
    $this->conteudo = $name;
    }
}
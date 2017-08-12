<?php

class Celular {
    var $nome;
    var $marca;
    var $tam_tela;
    var $mem_inter;
    var $mem_ram;
    var $preco;
    function Celular($nome, $marca, $tam_tela, $mem_inter, $mem_ram, $preco) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->tam_tela = $tam_tela;
        $this->mem_inter = $mem_inter;
        $this->mem_ram = $mem_ram;
        $this->preco = $preco;
    }
    function getNome() {
        return $this->nome;
    }

    function getMarca() {
        return $this->marca;
    }

    function getTam_tela() {
        return $this->tam_tela;
    }

    function getMem_inter() {
        return $this->mem_inter;
    }

    function getMem_ram() {
        return $this->mem_ram;
    }

    function getPreco() {
        return $this->preco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setTam_tela($tam_tela) {
        $this->tam_tela = $tam_tela;
    }

    function setMem_inter($mem_inter) {
        $this->mem_inter = $mem_inter;
    }

    function setMem_ram($mem_ram) {
        $this->mem_ram = $mem_ram;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }   
}

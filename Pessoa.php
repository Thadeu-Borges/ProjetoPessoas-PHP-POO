<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pessoa
 *
 * @author AAAA
 */
class Pessoa {
    //put your code here
    //Atributos
    private $nome;
    private $idade;
    private $sexo;
    
    //Métodos
    public function fazerAniversario() {
        $this->idade ++;
    }
    
    //Métodos Especiais
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }


}

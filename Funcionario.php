<?php
require_once 'Pessoa.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Funcionario
 *
 * @author AAAA
 */
class Funcionario extends Pessoa {
    //put your code here
    private $setor;
    private $trabalhando;
    
    public function mudarTrabalho() {
        $this->trabalhando = ! $this->trabalhando;
    }
    
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }


}

<?php
require_once 'Pessoa.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Professor
 *
 * @author AAAA
 */
class Professor extends Pessoa {
    //put your code here
    private $especialidade;
    private $salario;
    
    public function receberAumento($aum) {
        $this->salario += $aum;
    }
    
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }


}

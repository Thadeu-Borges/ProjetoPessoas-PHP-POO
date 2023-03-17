<?php
require_once 'Pessoa.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Aluno
 *
 * @author AAAA
 */
class Aluno extends Pessoa {
    //put your code here
    private $matr;
    private $curso;
    
    public function cancelarMatr() {
        echo "<p>Matricula será cancelada</p>";
    }
    
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr) {
        $this->matr = $matr;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }


}

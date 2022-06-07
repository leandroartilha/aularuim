<?php
include 'Pessoa.php';

abstract class Funcionario extends Pessoa{

    protected function estahEmFerias(){
        return true | false;
    }

    abstract function departamento();

}
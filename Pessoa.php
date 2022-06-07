<?php
abstract class Pessoa{

    function falar(){
        
        protected function falar(){
            echo this->getTime(). '- ' . $frase.'<br>';
        }

    }

    private getTime(){
        return date('H:i');
    }

    abstract function frequencia();

}
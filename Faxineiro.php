<?php

include 'Funcionario.php';

class Faxineiro extends Funcionario{

    function frequencia(){
        return 6;
    }

    function departamento(){
        return 'limpeza';
    }

    function horarioDeAlmoco(){
        return 'horario de descanso';
    }

}
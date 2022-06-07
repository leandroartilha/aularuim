<?php

include 'Pessoa.php';

class Visitante extends Pessoa{


    public function frequencia(){
        return ramdom_int(o, 6);
    }

}
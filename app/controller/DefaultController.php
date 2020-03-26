<?php

namespace App\Controllers;

class DefaultController {



    function __construct()
    {
        echo "dsssads";
    }


    public function index() {
        
    }
    public function notFound() {
        echo 'rota não encontrada';
    }


    public function forbidden() {
        echo 'Você não tem permissão para acessar';
    }

   
}
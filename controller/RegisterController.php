<?php

namespace controller;
use \model\Database;

class Register
{
    public function index()
    {
        $db = new Database();
        $exemplo = 'Variavel de exemplo na pagina de registro';
        require_once 'view/register.php';
    }

}

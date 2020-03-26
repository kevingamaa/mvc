<?php

namespace App\Controllers;

use Core\Classes\Controller;

class HomeController extends Controller{
    public function index($id = '') {
    //    $this->view('home.index');

       $this->view('home.index', ['id' => $id]);
    }
}
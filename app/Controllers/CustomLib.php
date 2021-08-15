<?php

namespace App\Controllers;

use \CodeIgniter\Controller;
use App\Libraries\TestLibrary;

class CustomLib extends Controller{

    public $t;
    public function __construct(){
        $this->t = new TestLibrary();
    }

    public function index(){
        return $this->t->getData();
    }
}
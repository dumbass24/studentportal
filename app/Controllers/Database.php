<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class database extends Controller {

    public function index()
    {
        // echo "hiii";


        $db = \Config\Database::connect();

        $query = $db->query("select name,pass from jeet");

        $result = $query->getResult();
        echo "<pre>";
        print_r($result);

        
    }
}
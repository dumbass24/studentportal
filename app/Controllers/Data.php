<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use \App\Models\Demo;

class Data extends Controller {

    public function index(){
        
        $Demo = new Demo();

        $data['subject'] = $Demo->getData();
        return view('DataView',$data);

    }
    public function getStudent(){

        $Demo = new Demo();
        $data['student'] = $Demo->getData();
        return view('dashboard', $data);

    }
   
}
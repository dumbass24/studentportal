<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Hello extends Controller {

    public function index()
    {
        # code...
        echo "hello";
    }

    public function test($name){
        echo "hello ".$name;
    }

    public function _remap($method, $param1 = null ,$param2 = null){

        // if($method == 'test'){
        //     return $this->$method($param1);
        // }else{

        // echo "hiiiiiiiiii".$method;
       // }


       if(method_exists($this,$method)){
            return $this->$method($param1,$param2);
       }
       else{
           echo "bad luck!!! ";
           throw \CodeIgniter\Exception\PageNotFoundException::forPageNotFound();
       }

    }

}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{

    public function __construct()
    {
        helper("form");
    }

    public function index()
    {
        helper('Form');
        $data = [];
        $data['validation'] = null;
        // $rule = [
        //     'Firstname' => 'required',
        //     'Lastname' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',


        // ];

$rules = [
    'Firstname' =>[
        'rules' => 'required',
        'error' => [
          'required' =>  'firstname required',
        ],
    ],
    'Lastname' =>[
        'rules' => 'required',
        'error' => [
          'required' =>  'lastname required',
        ],
    ],
    'email' =>[
        'rules' => 'required|valid_email',
        'error' => [
          'required' =>  'email required',
          'valid_email' => 'Enter Valid Email',
        ],
    ],
    'password' =>[
        'rules' => 'required',
        'error' => [
          'required' =>  'pass required',
        ],
    ],


];




        $demo = $this->request->getMethod();

        if ($demo === 'post') {
            if ($this->validate($rules)) {
                echo 'ready to save';
            } else {
                $data['validation'] = $this->validator;
            }
        }


        return view('myform', $data);
    }
}

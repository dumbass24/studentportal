<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;


class Login extends Controller
{
    public $session;
    public $loginModel;
    public function __construct()
    {
        helper('form', 'array');
        helper('Form');
        $this->loginModel = new LoginModel();
        $this->session = \config\Services::session();
    }

    public function index()
    {

        if (session()->has('login_session')) {
            // return redirect(base_url() . "/dashboard");
            return redirect()->to('/dashboard');
        }


        $data = [];
        $data['validation'] = null;
        //site login
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[4]|max_length[10]',
            ];
            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');


                $studentdata = $this->loginModel->verifyEmail($email);
                if ($studentdata) {

                    // if (password_verify($password, $studentdata['password'])) {
                    if ($password = $studentdata['password']) {
                        // print_r("hello");

                        $this->session->set('login_session', $studentdata['id']);
                        return redirect()->to(base_url() . "/dashboard");
                    } else {
                        // print_r("hiii");
                        $this->session->setTempdata('error', 'Password is incorrect! ', 3);
                        return redirect()->to(current_url());
                    }
                } else {
                    $this->session->setTempdata('error', 'Email does not Exist! ', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view("loginView", $data);
    }
}

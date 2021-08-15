<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegisterModel;

class Register extends Controller
{
    public $session;
    public $registerModel;
    public function __construct()
    {
        helper(['form', 'image']);
        helper('Form');
        $this->registerModel = new RegisterModel();
        $this->session = \config\Services::session();
    }

    public function index()
    {

        // RewriteRule ^([\s\S]*)$ index.php/$1 [L,NC,QSA]

        $data = [];
        $data['validation'] = null;
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[4]|max_length[10]',
                'mobile' => 'required|exact_length[10]|numeric',
                'about' => 'required',
                'gender' => 'required',
                'year' => 'required',
                'language' => 'required',
                'profile_pic' => 'uploaded[profile_pic]|max_size[profile_pic,1024]|ext_in[profile_pic,png,jpg,gif]',

            ];
            if ($this->validate($rules)) {
                $file = $this->request->getFile('profile_pic');


                $image = service('image');
                $path = WRITEPATH . 'uploads/';

                if ($file->isValid() && !$file->hasMoved()) {
                    $file->move(WRITEPATH . 'uploads/');

                    $fileName = $file->getName();

                    if (!file_exists($path . 'thumbs/'))
                        mkdir($path . 'thumbs/', 777);

                    $image->withFile(src($fileName))
                        ->fit(150, 150)
                        ->save($path . 'thumbs/' . $fileName);
                }
                $studentdata = [
                    'name' => $this->request->getVar('name', FILTER_SANITIZE_STRING),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'mobile' => $this->request->getVar('mobile'),
                    'about' => $this->request->getVar('about'),
                    'gender' => $this->request->getVar('gender'),
                    'year' => $this->request->getVar('year'),
                    'language' => $this->request->getVar('language'),
                    'profile_name' =>  $file->getName(),
                    'file_type'  => $file->getClientMimeType()

                ];


                if ($this->registerModel->createStudent($studentdata)) {
                    // echo "sucess!";
                    $this->session->setTempdata('success', 'Registration Successfully!', 3);
                    return redirect()->to(base_url() . '/register');
                } else {
                    // echo "sorry";
                    $this->session->setTempdata('error', 'sorry Registration Failed', 3);
                    return redirect()->to(current_url() . '/login');
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('registerView', $data);
    }
}

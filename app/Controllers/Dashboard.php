<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DashboardModel;
use CodeIgniter\Validation\Rules;

class Dashboard extends Controller
{
    public $dashModel;
    // public $pager;
    public function __construct()
    {
        $pager = \Config\Services::pager();
        $this->dashModel = new DashboardModel();
        helper(['form', 'image']);
        // $this->pager = \Config\Services::pager();
    }

    public function index()
    {

        if (!session()->has('login_session')) {
            return redirect(base_url() . "/login");
        }

        // $data['stu_data'] = $this->dashModel->findAll();
        $data['stu_data'] = $this->dashModel->paginate();
        $data['pager'] = $this->dashModel->pager;

        // echo "<pre>";
        // print_r($stu);

        return view('dashboard', $data);
    }

    public function logout()
    {
        session()->remove('login_session');
        session()->destroy();
        // return redirect(base_url() . "/login");
        return redirect()->to(base_url() . "/login");
    }



    public function edit()
    {
        $stu_id = $this->request->getPost('id');
        $data['student'] = $this->dashModel->find($stu_id);
        return $this->response->setJSON($data);
    }


    public function update()
    {
        // helper('form');
        helper(['form', 'url']);
        $model = new DashboardModel();


        $stu_id = $this->request->getPost('id');

        $rules = [
            'profile_pic' => [
                'rules' => 'uploaded[profile_pic]',
                'label' => 'the profile pic'
            ]
        ];

        if ($this->validate($rules)) {
            $file = $this->request->getFile('profile_pic');
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move('./uploads/images');
            }
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),

            'mobile' => $this->request->getPost('mobile'),

            'about' => $this->request->getPost('about'),

            'gender' => $this->request->getPost('gender'),

            'language' => $this->request->getPost('language'),

            'year' => $this->request->getPost('year'),

        ];
        // print_r($stu_id);

        $model->update($stu_id, $data);
        $message = ['status' => 'upadated successfully'];
        return $this->response->setJSON($message);
    }


    public function delete()
    {
        $stu_id = $this->request->getPost('id');
        $this->dashModel->delete($stu_id);
        $message = ['status' => 'deleted successfully!'];
        return $this->response->setJSON($message);
    }


    function upload()
    {
        helper(['form', 'url']);

        $database = \Config\Database::connect();
        $db = $database->table('student');

        $input = $this->validate([
            'profile_pic' => [
                'uploaded[profile_pic]',
                'mime_in[profile_pic,image/jpg,image/jpeg,image/png]',
                'max_size[profile_pic,10240]',
            ]
        ]);

        if (!$input) {
            print_r('Choose a valid file');
        } else {
            $img = $this->request->getFile('profile_pic');
            $img->move(WRITEPATH . 'uploads');

            $data = [
                'profile_name' =>  $img->getName(),
                'file_type'  => $img->getClientMimeType()
            ];

            $save = $db->insert($data);
            print_r('File has successfully uploaded');
        }
    }
}

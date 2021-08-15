<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{


    public function verifyEmail($email)
    {

        $builder = $this->db->table('student');
        $builder->select('id, password');
        $builder->where('email', $email);

        $res = $builder->get();
        if (count($res->getResultArray()) == 1) {
            return $res->getRowArray();
        } else {
            return false;
        }
    }
}

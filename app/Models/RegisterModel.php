<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{

    public function createStudent($data)
    {

        $builder = $this->db->table('student');
        $res = $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}

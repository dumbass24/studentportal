<?php

namespace App\Models;

use CodeIgniter\Model;


class DashboardModel extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'name', 'email', 'mobile', 'about', 'gender', 'language', 'year'];
    // protected $returnType = 'array';
}

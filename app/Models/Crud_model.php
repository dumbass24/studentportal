<?php


namespace App\Models;

use CodeIgniter\Model;

class Crud_model extends Model
{

	protected $table = 'user_table';

	protected $primaryKey = 'id';

	protected $allowedFields = ['fname', 'lname', 'email'];
}

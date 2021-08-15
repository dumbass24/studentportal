<?php

namespace App\Models;

use CodeIgniter\Model;

class Demo extends Model
{

    public function getData()
    {

        // $sub = [
        //     ['subject' => 'http' , 'attr' => 'hiii therreee'],
        //     ['subject' => 'hdshksd' , 'attr' => 'hiii ddddddd'],
        //     ['subject' => 'htkhktp' , 'attr' => 'hiii sddddd'],
        //     ['subject' => '1256125' , 'attr' => 'hiii fefewew'],
        //     ['subject' => '121212' , 'attr' => 'hiii fedfe'],
        // ];

        $db = \Config\Database::connect();

        $query = $db->query("select * from student");

        $result = $query->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
}

<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        echo "ini controller coba method index";
    }

    public function about($param = "", $param2 = 0)
    {
        // echo "My name is $this->nama.";
        echo "My name is $param. umur saya $param2";
    }
}

<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "ini controller coba method index";
    }

    public function About($param = "", $param2 = 0)
    {
        // echo "My name is $this->nama.";
        echo "My name is $param. umur saya $param2";
    }
}

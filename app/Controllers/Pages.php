<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Codeignier 4',
            'test' => ['satu', 'dua', 'tiga']
        ];
        // echo view('layout/header', $data);
        return view('pages/home', $data);
        // echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About Me | Codeignier 4'
        ];
        // echo view('layout/header', $data);
        return view('pages/about', $data);
        // echo view('layout/footer');
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Codeignier 4',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl.karet no 11',
                    'kota' => 'depok',
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jl.sudirman no 22',
                    'kota' => 'jakarta',
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}

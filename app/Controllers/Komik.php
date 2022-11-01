<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    // bisa di pakai di controller ini aja
    // versi satu lagi ada di BaseController
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];

        // // cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // // dd($komik);
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }


        return view('komik/index', $data);
    }
}

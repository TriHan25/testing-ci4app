<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'      => 'bowo',
        //         'alamat'    => 'Jl.Jakarta no 23',
        //         'created_at'    => Time::now('Asia/Jakarta', 'en_US'),
        //         'updated_at'    => Time::now('Asia/Jakarta', 'en_US')
        //     ],
        //     [
        //         'nama'      => 'sandhika',
        //         'alamat'    => 'Jl.bandung no 23',
        //         'created_at'    => Time::now('Asia/Jakarta', 'en_US'),
        //         'updated_at'    => Time::now('Asia/Jakarta', 'en_US')
        //     ],
        //     [
        //         'nama'      => 'rama',
        //         'alamat'    => 'Jl.padang no 23',
        //         'created_at'    => Time::now('Asia/Jakarta', 'en_US'),
        //         'updated_at'    => Time::now('Asia/Jakarta', 'en_US')
        //     ]
        // ];

        // biar random pake faker
        $faker = \Faker\Factory::create('id_ID');
        // masukin data banyak sekaligus
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama'      => $faker->name,
                'alamat'    => $faker->address,
                'created_at'    => Time::createFromTimestamp($faker->unixTime, 'Asia/Jakarta', 'en_US'),
                'updated_at'    => Time::now('Asia/Jakarta', 'en_US')
            ];
            $this->db->table('orang')->insert($data);
        }


        // Simple Queries
        // $this->db->query('INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // 1 data
        // $this->db->table('orang')->insert($data);
        // banyak data
        // $this->db->table('orang')->insertBatch($data);
    }
}

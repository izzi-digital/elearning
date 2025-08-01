<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_kelas' => 'X L',
            ],
            [
                'nama_kelas' => 'X M',
            ],
            [
                'nama_kelas' => 'X P',
            ],
            [
                'nama_kelas' => 'X Q',
            ],
            [
                'nama_kelas' => 'X R',
            ],
        ];

        $this->db->table('kelas')->insertBatch($data);
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KelasTPMSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_kelas' => 'TPM',
        ];

        $this->db->table('kelas')->insert($data);
    }
}

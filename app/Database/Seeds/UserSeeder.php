<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'full_name'  => 'Smart Teacher',
            'class_room' => null,
            'email'      => 'admin@admin.com',
            'password'   => password_hash('Bismillah', PASSWORD_DEFAULT),
            'role'       => 'teacher',
        ];

        $this->db->table('users')->insert($data);
    }
}

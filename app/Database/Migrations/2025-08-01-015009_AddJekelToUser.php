<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddJekelToUser extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'jekel' => [
                'type'       => 'ENUM',
                'constraint' => ['L', 'P'],
                'default'    => 'L',
                'after'      => 'role'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'jekel');
    }
}

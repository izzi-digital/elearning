<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMateri extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal' => [
                'type'       => 'DATE',
                'null'       => true,
            ],
            'id_mapel' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'judul_materi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'konten_teks' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'link_video' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'aktifkan_share_screen' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_mapel', 'mapel', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('materi');
    }

    public function down()
    {
        $this->forge->dropTable('materi');
    }
}

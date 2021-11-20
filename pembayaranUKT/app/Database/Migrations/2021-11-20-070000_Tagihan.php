<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tagihan extends Migration
{
    public function up()
    {
        $fieldsTagihan = [
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment'],
            'nominal' => ['type' => 'int', 'constraint' => 8, 'unsigned' => true],
            'status' => ['type' => 'enum', 'constraint' => ['BELUM_LUNAS', 'BELUM_LUNAS', 'SUDAH_LUNAS'], 'null' => false],
            'mahasiswa_NIM' => ['type' => 'varchar', 'constraint' => 11, 'null' => false],
            'admin_id' => ['type' => 'int', 'constraint' => 11]
        ];

        $this->forge->addField($fieldsTagihan);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tagihan', true);
    }

    public function down()
    {
        $this->forge->dropTable('tagihan');
    }
}

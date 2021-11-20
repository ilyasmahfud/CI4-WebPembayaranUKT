<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Universitas extends Migration
{
    public function up()
    {
        $fieldsUniversitas = [
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment'],
            'nama_universitas' => ['type' => 'varchar', 'constraint' => 255, 'null' => false],
            'admin_id' => ['type' => 'int', 'constraint' => 11, 'null' => false]
        ];

        $this->forge->addField($fieldsUniversitas);
        $this->forge->addKey('id', true);
        $this->forge->createTable('universitas', true);
    }

    public function down()
    {
        $this->forge->dropTable('universitas');
    }
}

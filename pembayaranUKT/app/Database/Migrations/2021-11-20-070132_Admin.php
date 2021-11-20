<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $fieldsAdmin = [
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment'],
            'username' => ['type' => 'varchar', 'constraint' => 30, 'null' => false],
            'password' => ['type' => 'varchar', 'constraint' => 255, 'null' => false],
        ];

        $this->forge->addField($fieldsAdmin);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin', true);
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}

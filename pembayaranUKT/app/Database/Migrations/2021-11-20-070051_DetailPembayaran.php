<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailPembayaran extends Migration
{
    public function up()
    {
        $fieldsPembayaran = [
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment'],
            'nominal' => ['type' => 'int', 'constraint' => 8, 'unsigned' => true],
            'bukti_pembayaran' => ['type' => 'varchar', 'constraint' => 255, 'null' => false],
            'status' => ['type' => 'enum', 'constraint' => ['BELUM_BAYAR', 'BELUM_LUNAS', 'SUDAH_LUNAS'], 'null' => false],
            'mahasiswa_NIM' => ['type' => 'varchar', 'constraint' => 11, 'null' => false],
            'admin_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'tagihan_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
        ];

        $this->forge->addField($fieldsPembayaran);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pembayaran', true);
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_barang'=> [
                'type'=> 'char',
                'constraint'=> '10'
            ],
            'nama_barang'=> [
                'type'=> 'varchar',
                'constraint'=> '100'
            ],
            'id_katBarang'=> [
                'type'=> 'int',
                'unsigned'=> TRUE
            ],
            'stok_barang'=> [
                'type'=> 'int',
            ],
            'status_barang'=> [
                'type'=> 'char',
                'constraint'=> '50'
            ],
        ]);

        $this->forge->addPrimaryKey('kode_barang');
        $this->forge->addForeignKey('id_katBarang', 'kategori', 'id_kat');

        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}

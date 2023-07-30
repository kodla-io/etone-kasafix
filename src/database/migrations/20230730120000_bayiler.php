<?php

namespace Database\Migrations;

use CodeIgniter\Database\Migration;

class Bayiler extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'TEXT',
                'constraint' => '100',
            ],
            'surname' => [
                'type' => 'TEXT'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bayiler');
    }

    public function down()
    {
        $this->forge->dropTable('bayiler');
    }
}

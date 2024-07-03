<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Designation extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'designation_id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'designation_name' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'NULL' => false,
                ]
            ]
        );
        $this->forge->addPrimaryKey('designation_id');
        $this->forge->createTable('designation',true);
    }

    public function down()
    {
        $this->forge->dropTable('designation',true);
    }
}

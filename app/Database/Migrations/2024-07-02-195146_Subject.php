<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subject extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'subject_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'subject_code' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255,
                'unique' => true
            ],
            'subject_name' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
        ]);
        $this->forge->addPrimaryKey('subject_id');
        $this->forge->createTable('subject',true);
    }

    public function down()
    {
        $this->forge->dropTable('subject',true);
    }
}

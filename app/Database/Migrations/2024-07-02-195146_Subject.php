<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subject extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'subject_code' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
            'subject_name' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
        ]);
        $this->forge->addPrimaryKey('subject_code');
        $this->forge->createTable('subject',true);
    }

    public function down()
    {
        $this->forge->dropTable('subject',true);
    }
}

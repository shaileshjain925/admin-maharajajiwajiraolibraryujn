<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Department extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'department_code' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
            'department_name' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
        ]);
        $this->forge->addPrimaryKey('department_code');
        $this->forge->createTable('department',true);
    }

    public function down()
    {
        $this->forge->dropTable('department',true);
    }
}

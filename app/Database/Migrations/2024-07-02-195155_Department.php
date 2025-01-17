<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Department extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'department_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'department_code' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255,
                'unique' => true,
            ],
            'department_name' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
        ]);
        $this->forge->addPrimaryKey('department_id');
        $this->forge->createTable('department',true);
    }

    public function down()
    {
        $this->forge->dropTable('department',true);
    }
}

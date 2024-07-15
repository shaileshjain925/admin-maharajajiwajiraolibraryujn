<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Course extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'course_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'course_code' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255,
                'unique' => true,
            ],
            'course_name' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
        ]);
        $this->forge->addPrimaryKey('course_id');
        $this->forge->createTable('course',true);
    }

    public function down()
    {
        $this->forge->dropTable('course',true);
    }
}

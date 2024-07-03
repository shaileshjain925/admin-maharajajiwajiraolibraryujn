<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Course extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'course_code' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
            'course_name' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
        ]);
        $this->forge->addPrimaryKey('course_code');
        $this->forge->createTable('course',true);
    }

    public function down()
    {
        $this->forge->dropTable('course',true);
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CourseSubjectDepartment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'course_subject_department_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'course_code' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
            'subject_code' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
            'department_code' => [
                'TYPE' => 'VARCHAR',
                'constraint' =>  255
            ],
        ]);
        $this->forge->addPrimaryKey('course_subject_department_id');
        $this->forge->addForeignKey('course_code', 'course', 'course_code', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('subject_code', 'subject', 'subject_code', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('department_code', 'department', 'department_code', 'CASCADE', 'CASCADE');
        $this->forge->createTable('course_subject_department', true);
    }

    public function down()
    {
        $this->forge->dropTable('course_subject', true);
    }
}

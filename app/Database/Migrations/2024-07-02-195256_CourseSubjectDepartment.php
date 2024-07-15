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
            'course_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'subject_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'department_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('course_subject_department_id');
        $this->forge->addForeignKey('course_id', 'course', 'course_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('subject_id', 'subject', 'subject_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('department_id', 'department', 'department_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('course_subject_department', true);
    }

    public function down()
    {
        $this->forge->dropTable('course_subject', true);
    }
}

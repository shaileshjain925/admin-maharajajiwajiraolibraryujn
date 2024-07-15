<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'student_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'student_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
            'student_residential_address' => [
                'type'       => 'TEXT',
                'null'       => true
            ],
            'student_gender' => [
                'type'       => 'ENUM',
                'constraint' => ['M', 'F', 'T']
            ],
            'student_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
            'student_mobile' => [
                'type'       => 'VARCHAR',
                'constraint' => '15'
            ],
            'student_admission_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'student_admission_closing_date' => [
                'type' => 'DATE',
                'null' => true
            ],
            'student_father_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
            'student_mother_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
            'student_cast_category' => [
                'type'       => 'ENUM',
                'constraint' => ['UR','OBC','SC','ST']
            ],
            'course_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
            ],
            'subject_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
            ],
            'department_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
            ],
            'student_image' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true
            ]
        ]);
        $this->forge->addPrimaryKey('student_id');
        $this->forge->addForeignKey('course_id', 'course', 'course_id', 'RESTRICT', 'RESTRICT');
        $this->forge->addForeignKey('subject_id', 'subject', 'subject_id', 'RESTRICT', 'RESTRICT');
        $this->forge->addForeignKey('department_id', 'department', 'department_id', 'RESTRICT', 'RESTRICT');
        $this->forge->createTable('student',true);
    }

    public function down()
    {
        $this->forge->dropTable('student',true);
    }
}

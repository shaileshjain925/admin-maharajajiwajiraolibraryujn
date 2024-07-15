<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CourseSubject extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'course_subject_id' => [
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
        ]);
        $this->forge->addPrimaryKey('course_subject_id');
        $this->forge->addForeignKey('course_id', 'course', 'course_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('subject_id', 'subject', 'subject_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('course_subject', true);
    }

    public function down()
    {
        $this->forge->dropTable('course_subject', true);
    }
}

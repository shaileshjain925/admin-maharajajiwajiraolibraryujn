<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faculty extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'faculty_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'faculty_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'faculty_image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'faculty_gender' => [
                'type' => 'ENUM',
                'constraint' => ['M', 'F', 'O'],
                'null' => false,
            ],
            'faculty_blood_group' => [
                'type' => 'ENUM',
                'constraint' => ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'],
                'null' => false,
            ],
            'university_id' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'faculty_mobile' => [
                'type' => 'VARCHAR', // Changed to VARCHAR to support mobile numbers with leading zeroes
                'constraint' => 15,
                'null' => true,
            ],
            'faculty_email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'department_code' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
                'null' => false,
            ],
            'designation_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
                'null' => false,
            ],
        ]);

        $this->forge->addPrimaryKey('faculty_id');
        $this->forge->addForeignKey('department_code', 'department', 'department_code', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('designation_id', 'designation', 'designation_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('faculty', true);
    }

    public function down()
    {
        $this->forge->dropTable('faculty', true);
    }
}

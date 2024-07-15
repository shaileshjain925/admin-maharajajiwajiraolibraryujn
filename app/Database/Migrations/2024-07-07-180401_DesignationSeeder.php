<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use App\Traits\CommonTraits;

class DesignationSeeder extends Migration
{
    use CommonTraits;
    public function up()
    {

        $designations = [
            ['designation_name' => 'Chancellor'],
            ['designation_name' => 'Vice Chancellor'],
            ['designation_name' => 'Pro Vice Chancellor'],
            ['designation_name' => 'Dean'],
            ['designation_name' => 'Associate Dean'],
            ['designation_name' => 'Head of Department (HoD)'],
            ['designation_name' => 'Professor'],
            ['designation_name' => 'Associate Professor'],
            ['designation_name' => 'Assistant Professor'],
            ['designation_name' => 'Lecturer'],
            ['designation_name' => 'Senior Lecturer'],
            ['designation_name' => 'Reader'],
            ['designation_name' => 'Research Fellow'],
            ['designation_name' => 'Teaching Assistant'],
            ['designation_name' => 'Guest Faculty'],
            ['designation_name' => 'Adjunct Faculty'],
            ['designation_name' => 'Emeritus Professor'],
            ['designation_name' => 'Registrar'],
            ['designation_name' => 'Deputy Registrar'],
            ['designation_name' => 'Assistant Registrar'],
            ['designation_name' => 'Controller of Examinations'],
            ['designation_name' => 'Deputy Controller of Examinations'],
            ['designation_name' => 'Librarian'],
            ['designation_name' => 'Deputy Librarian'],
            ['designation_name' => 'Assistant Librarian'],
            ['designation_name' => 'Director of Admissions'],
            ['designation_name' => 'Director of Student Affairs'],
            ['designation_name' => 'Bursar'],
            ['designation_name' => 'Director of Research and Development'],
            ['designation_name' => 'Public Relations Officer'],
            ['designation_name' => 'Chief Warden'],
            ['designation_name' => 'Warden'],
            ['designation_name' => 'Administrative Officer'],
            ['designation_name' => 'Finance Officer'],
            ['designation_name' => 'Accountant'],
            ['designation_name' => 'Executive Council Member'],
            ['designation_name' => 'Academic Council Member'],
            ['designation_name' => 'Board of Studies Member'],
            ['designation_name' => 'Syndicate Member'],
            ['designation_name' => 'Research Associate'],
            ['designation_name' => 'Technical Staff'],
            ['designation_name' => 'Lab Technician'],
            ['designation_name' => 'Office Assistant'],
            ['designation_name' => 'Clerk'],
            ['designation_name' => 'Peon'],
            ['designation_name' => 'Security Officer'],
            ['designation_name' => 'Caretaker']
        ];
        if (empty($this->getDesignationModel()->first())) {
            $this->getDesignationModel()->insertBatch($designations);
        }
    }

    public function down()
    {
        //
    }
}

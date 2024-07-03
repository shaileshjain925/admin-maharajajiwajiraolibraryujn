<?php

namespace App\Models;

use App\Models\FunctionModel;

class FacultyModel extends FunctionModel
{
    protected $table            = 'faculty';
    protected $primaryKey       = 'faculty_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'faculty_id',
        'faculty_name',
        'faculty_image',
        'faculty_gender',
        'faculty_blood_group',
        'university_id',
        'faculty_mobile',
        'faculty_email',
        'department_code',
        'designation_id',
        'is_active'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'faculty_name' => 'required|max_length[255]',
        'faculty_image' => 'permit_empty',
        'faculty_gender' => 'required|in_list[M,F,O]',
        'faculty_blood_group' => 'required|in_list[A+,A-,B+,B-,AB+,AB-,O+,O-]',
        'university_id' => 'permit_empty|max_length[255]',
        'faculty_mobile' => 'permit_empty|max_length[15]',
        'faculty_email' => 'permit_empty|valid_email|max_length[255]',
        'department_code' => 'required|is_not_unique[department.department_code]',
        'designation_id' => 'required|is_not_unique[designation.designation_id]',
        'is_active' => 'required|in_list[0,1]'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

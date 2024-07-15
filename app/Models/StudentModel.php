<?php

namespace App\Models;

use App\Models\FunctionModel;

class StudentModel extends FunctionModel
{
    protected $table            = 'student';
    protected $primaryKey       = 'student_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'student_name',
        'student_residential_address',
        'student_gender',
        'student_email',
        'student_mobile',
        'student_admission_date',
        'student_admission_closing_date',
        'student_father_name',
        'student_mother_name',
        'student_cast_category',
        'course_id',
        'subject_id',
        'department_id',
        'student_image'
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
    protected $validationRules      = [
        'student_name' => 'required|min_length[3]|max_length[255]',
        'student_residential_address' => 'permit_empty|string',
        'student_gender' => 'required|in_list[M,F,T]',
        'student_email' => 'required|valid_email|max_length[255]',
        'student_mobile' => 'required|max_length[15]|numeric',
        'student_admission_date' => 'permit_empty|valid_date',
        'student_admission_closing_date' => 'permit_empty|valid_date',
        'student_father_name' => 'required|min_length[3]|max_length[255]',
        'student_mother_name' => 'required|min_length[3]|max_length[255]',
        'student_cast_category' => 'required|in_list[UR,OBC,SC,ST]',
        'course_id' => 'required|is_not_unique[course.course_id]',
        'subject_id' => 'required|is_not_unique[subject.subject_id]',
        'department_id' => 'required|is_not_unique[department.department_id]',
        'student_image' => 'permit_empty|string|max_length[255]'
    ];
    protected $validationMessages   = [
        'student_email' => [
            'required' => 'The Email Address field is required',
            'valid_email' => 'Please provide a valid email address'
        ],
        'student_mobile' => [
            'numeric' => 'The Mobile Number must contain only numbers'
        ],
        'student_gender' => [
            'in_list' => 'The Gender field must be one of: M, F, T'
        ],
        'student_cast_category' => [
            'in_list' => 'The Cast Category field must be one of: UR, OBC, SC, ST'
        ]
    ];
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

    public function __construct()
    {
        parent::__construct();
        $this->addParentJoin('course_id',$this->getCourseModel(),'left',['course_name,course_code']);
        $this->addParentJoin('subject_id',$this->getSubjectModel(),'left',['subject_name,subject_code']);
        $this->addParentJoin('department_id',$this->getDepartmentModel(),'left',['department_name','department_code']);
    }
}

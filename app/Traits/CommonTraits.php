<?php

namespace App\Traits;
// Firebase Messaging Notification
use App\Models\CountryModel;
use App\Models\StateModel;
use App\Models\CityModel;
use App\Models\FunctionModel;
use App\Models\UserModel;
use App\Models\UserTokenModel;
use App\Models\CourseModel;
use App\Models\CourseSubjectDepartmentModel;
use App\Models\CourseSubjectModel;
use App\Models\DepartmentModel;
use App\Models\DesignationModel;
use App\Models\FacultyModel;
use App\Models\SubjectModel;
use App\Models\StudentModel;

use App\Controllers\EmailController;

trait CommonTraits
{

    /**
     * Return Model Instance
     * @return CountryModel
     */
    public static function getCountryModel()
    {
        return new CountryModel();
    }
    /**
     * Return Model Instance
     * @return StateModel
     */
    public static function getStateModel()
    {
        return new StateModel();
    }
    /**
     * Return Model Instance
     * @return CityModel
     */
    public static function getCityModel()
    {
        return new CityModel();
    }
    /**
     * Return Model Instance
     * @return FunctionModel
     */
    public static function getFunctionModel()
    {
        return new FunctionModel();
    }
    /**
     * Return Model Instance
     * @return UserModel
     */
    public static function getUserModel()
    {
        return new UserModel();
    }
    /**
     * Return Model Instance
     * @return UserTokenModel
     */
    public static function getUserTokenModel()
    {
        return new UserTokenModel();
    }

    /**
     * Return Model Instance
     * @return EmailController
     */
    public static function getEmailController()
    {
        return new EmailController();
    }
    /**
     * Return Model Instance
     * @return CourseModel
     */
    public function getCourseModel()
    {
        return new CourseModel();
    }
    /**
     * Return Model Instance
     * @return CourseSubjectDepartmentModel
     */
    public function getCourseSubjectDepartmentModel()
    {
        return new CourseSubjectDepartmentModel();
    }
    /**
     * Return Model Instance
     * @return CourseSubjectModel
     */
    public function getCourseSubjectModel()
    {
        return new CourseSubjectModel();
    }
    /**
     * Return Model Instance
     * @return DepartmentModel
     */
    public function getDepartmentModel()
    {
        return new DepartmentModel();
    }
    /**
     * Return Model Instance
     * @return DesignationModel
     */
    public function getDesignationModel()
    {
        return new DesignationModel();
    }
    /**
     * Return Model Instance
     * @return FacultyModel
     */
    public function getFacultyModel()
    {
        return new FacultyModel();
    }
    /**
     * Return Model Instance
     * @return SubjectModel
     */
    public function getSubjectModel()
    {
        return new SubjectModel();
    }

    /**
     * Return Model Instance
     * @return StudentModel
     */
    public function getStudentModel()
    {
        return new StudentModel();
    }
}

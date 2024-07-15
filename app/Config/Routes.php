<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use MenuActionType as MAT;
// Load custom helpers
helper("commonfunction_helper");
helper('array');
/**
 * Automatically adds routes for all modules found in the specified directory.
 *
 * @param string $directory The directory to scan for modules.
 * @param RouteCollection $routes The route collection instance.
 * @return void
 */
/**
 * @var RouteCollection $routes
 */

if (!function_exists('autoAddRoutes')) {
    function autoAddRoutes(string $directory, RouteCollection $routes): void
    {
        $modules = scandir($directory);

        foreach ($modules as $module) {
            if ($module === '.' || $module === '..') {
                continue;
            }

            $fullPath = $directory . '/' . $module;

            if (is_dir($fullPath)) {
                $routesPath = $fullPath . '/Config/Routes.php';
                if (file_exists($routesPath)) {
                    // Load the module's routes
                    require $routesPath;
                }

                autoAddRoutes($fullPath, $routes);
            }
        }
    }
}

// Retrieve PHP_SELF
$php_self = $_SERVER['PHP_SELF'];

// Define allowed file extensions
$extensions = ['js', 'css', 'img', 'map', 'jpg', 'jpeg', 'png', 'gif', 'webp', 'woff', 'woff2', 'ttf', 'otf', 'mp4', 'webm', 'ogg', 'mp3', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt'];

// Extract file extension using pathinfo
$file_extension = pathinfo($php_self, PATHINFO_EXTENSION);
function encodeArray($array)
{
    $serializedArray = serialize($array);
    return urlencode($serializedArray);
}
if (!in_array($file_extension, $extensions)) {
    $routes->options('(:any)', 'AdminApiController::handleOptionsRequest');
    // Main Routes Start ---------------------------------------------------------------------------------------------------------------------
    $routes->get('/', 'AuthController::login', ['as' => 'admin_login_page']);
    $routes->get('/logout', 'AuthController::logout', ['as' => 'admin_logout_page']);
    $routes->get('/forgetPassword', 'AuthController::forgetPassword', ['as' => 'forget_Password']);
    $routes->group('Auth', ['filter' => 'AdminAuthFilter'], function ($routes) {
        $routes->group('Dashboard', function ($routes) {
            $routes->get('/', 'AdminPageController::default_dashboard', ['as' => 'default_dashboard']);
            $routes->get('Admin', 'AdminPageController::admin_dashboard', ['as' => 'admin_dashboard']);
        });
        $routes->group('Admin', function ($routes) {
            // User
            $routes->get('RoleUserList', 'AdminPageController::role_user_list', ['as' => 'role_user_list']);
            $routes->get('UserRoleCreateUpdateComponent', 'AdminPageController::UserRoleCreateUpdateComponent', ['as' => 'UserRoleCreateUpdateComponent']);
            $routes->get('UserRoleCreateUpdateComponent/(:num)', 'AdminPageController::UserRoleCreateUpdateComponent/$1');

            // Designation
            $routes->get('DesignationList', 'AdminPageController::designation_list', ['as' => 'designation_list']);
            $routes->get('DesignationCreateUpdateComponent', 'AdminPageController::DesignationCreateUpdateComponent', ['as' => 'DesignationCreateUpdateComponent']);
            $routes->get('DesignationCreateUpdateComponent/(:num)', 'AdminPageController::DesignationCreateUpdateComponent/$1');

            // Course
            $routes->get('CourseList', 'AdminPageController::course_list', ['as' => 'course_list']);
            $routes->get('CourseCreateUpdateComponent', 'AdminPageController::CourseCreateUpdateComponent', ['as' => 'CourseCreateUpdateComponent']);
            $routes->get('CourseCreateUpdateComponent/(:num)', 'AdminPageController::CourseCreateUpdateComponent/$1');

            // Subject
            $routes->get('SubjectList', 'AdminPageController::subject_list', ['as' => 'subject_list']);
            $routes->get('SubjectCreateUpdateComponent', 'AdminPageController::SubjectCreateUpdateComponent', ['as' => 'SubjectCreateUpdateComponent']);
            $routes->get('SubjectCreateUpdateComponent/(:num)', 'AdminPageController::SubjectCreateUpdateComponent/$1');

            // Department
            $routes->get('DepartmentList', 'AdminPageController::department_list', ['as' => 'department_list']);
            $routes->get('DepartmentCreateUpdateComponent', 'AdminPageController::DepartmentCreateUpdateComponent', ['as' => 'DepartmentCreateUpdateComponent']);
            $routes->get('DepartmentCreateUpdateComponent/(:num)', 'AdminPageController::DepartmentCreateUpdateComponent/$1');

            // Faculty
            $routes->get('FacultyList', 'AdminPageController::faculty_list', ['as' => 'faculty_list']);
            $routes->get('FacultyCreateUpdateComponent', 'AdminPageController::FacultyCreateUpdateComponent', ['as' => 'FacultyCreateUpdateComponent']);
            $routes->get('FacultyCreateUpdateComponent/(:num)', 'AdminPageController::FacultyCreateUpdateComponent/$1');

            // Student
            $routes->get('StudentList', 'AdminPageController::student_list', ['as' => 'student_list']);
            $routes->get('StudentCreateUpdateComponent', 'AdminPageController::StudentCreateUpdateComponent', ['as' => 'StudentCreateUpdateComponent']);
            $routes->get('StudentCreateUpdateComponent/(:num)', 'AdminPageController::StudentCreateUpdateComponent/$1');
        });
    });
    // Admin Panel Api Start -----------------------------------------------------------------------------------------------------------
    $routes->group('adminApi', function ($routes) {
        $routes->group('user', function ($routes) {
            $routes->post('login', 'AdminApiController::UserLogin', ['as' => 'userLoginApi']);
            $routes->post('UserForgetPasswordOtpSend', 'AdminApiController::UserForgetPasswordOtpSend', ['as' => 'UserForgetPasswordOtpSend']);
            $routes->post('UserForgetPasswordUpdate', 'AdminApiController::UserForgetPasswordUpdate', ['as' => 'UserForgetPasswordUpdate']);
        });


        // Admin Panel Api Without Midware Start
        $routes->group('Country', function ($routes) {
            $routes->post('Get', 'AdminApiController::CountryGet');
            $routes->post('List', 'AdminApiController::CountryList');
            $routes->post('Create', 'AdminApiController::CountryCreate');
            $routes->post('Update', 'AdminApiController::CountryUpdate');
            $routes->post('Delete', 'AdminApiController::CountryDelete');
        });
        $routes->group('State', function ($routes) {
            $routes->post('Get', 'AdminApiController::StateGet');
            $routes->post('List', 'AdminApiController::StateList');
            $routes->post('Create', 'AdminApiController::StateCreate');
            $routes->post('Update', 'AdminApiController::StateUpdate');
            $routes->post('Delete', 'AdminApiController::StateDelete');
        });
        $routes->group('City', function ($routes) {
            $routes->post('Get', 'AdminApiController::CityGet');
            $routes->post('List', 'AdminApiController::CityList');
            $routes->post('Create', 'AdminApiController::CityCreate');
            $routes->post('Update', 'AdminApiController::CityUpdate');
            $routes->post('Delete', 'AdminApiController::CityDelete');
        });
        $routes->group('Auth', ['filter' => 'AdminApiAuthFilter'], function ($routes) {
            // User Routes
            $routes->group('User', function ($routes) {
                $routes->post('Get', 'AdminApiController::UserGet');
                $routes->post('List', 'AdminApiController::UserList', ['as' => 'user_list_api']);
                $routes->post('Create', 'AdminApiController::UserCreate', ['as' => 'user_create_api']);
                $routes->post('Update', 'AdminApiController::UserUpdate', ['as' => 'user_update_api']);
                $routes->post('Delete', 'AdminApiController::UserDelete', ['as' => 'user_delete_api']);
            });
            // Designation Routes
            $routes->group('Designation', function ($routes) {
                $routes->post('Get', 'AdminApiController::DesignationGet');
                $routes->post('List', 'AdminApiController::DesignationList', ['as' => 'designation_list_api']);
                $routes->post('Create', 'AdminApiController::DesignationCreate', ['as' => 'designation_create_api']);
                $routes->post('Update', 'AdminApiController::DesignationUpdate', ['as' => 'designation_update_api']);
                $routes->post('Delete', 'AdminApiController::DesignationDelete', ['as' => 'designation_delete_api']);
            });

            // Course Routes
            $routes->group('Course', function ($routes) {
                $routes->post('Get', 'AdminApiController::CourseGet');
                $routes->post('List', 'AdminApiController::CourseList', ['as' => 'course_list_api']);
                $routes->post('Create', 'AdminApiController::CourseCreate', ['as' => 'course_create_api']);
                $routes->post('Update', 'AdminApiController::CourseUpdate', ['as' => 'course_update_api']);
                $routes->post('Delete', 'AdminApiController::CourseDelete', ['as' => 'course_delete_api']);
            });

            // Subject Routes
            $routes->group('Subject', function ($routes) {
                $routes->post('Get', 'AdminApiController::SubjectGet');
                $routes->post('List', 'AdminApiController::SubjectList', ['as' => 'subject_list_api']);
                $routes->post('Create', 'AdminApiController::SubjectCreate', ['as' => 'subject_create_api']);
                $routes->post('Update', 'AdminApiController::SubjectUpdate', ['as' => 'subject_update_api']);
                $routes->post('Delete', 'AdminApiController::SubjectDelete', ['as' => 'subject_delete_api']);
            });

            // Department Routes
            $routes->group('Department', function ($routes) {
                $routes->post('Get', 'AdminApiController::DepartmentGet');
                $routes->post('List', 'AdminApiController::DepartmentList', ['as' => 'department_list_api']);
                $routes->post('Create', 'AdminApiController::DepartmentCreate', ['as' => 'department_create_api']);
                $routes->post('Update', 'AdminApiController::DepartmentUpdate', ['as' => 'department_update_api']);
                $routes->post('Delete', 'AdminApiController::DepartmentDelete', ['as' => 'department_delete_api']);
            });

            // Faculty Routes
            $routes->group('Faculty', function ($routes) {
                $routes->post('Get', 'AdminApiController::FacultyGet');
                $routes->post('List', 'AdminApiController::FacultyList', ['as' => 'faculty_list_api']);
                $routes->post('Create', 'AdminApiController::FacultyCreate', ['as' => 'faculty_create_api']);
                $routes->post('Update', 'AdminApiController::FacultyUpdate', ['as' => 'faculty_update_api']);
                $routes->post('Delete', 'AdminApiController::FacultyDelete', ['as' => 'faculty_delete_api']);
            });

            // Student Routes
            $routes->group('Student', function ($routes) {
                $routes->post('Get', 'AdminApiController::StudentGet');
                $routes->post('List', 'AdminApiController::StudentList', ['as' => 'student_list_api']);
                $routes->post('Create', 'AdminApiController::StudentCreate', ['as' => 'student_create_api']);
                $routes->post('Update', 'AdminApiController::StudentUpdate', ['as' => 'student_update_api']);
                $routes->post('Delete', 'AdminApiController::StudentDelete', ['as' => 'student_delete_api']);
            });

            $routes->group('FileUpload', function ($routes) {
                $routes->post('ImageUpload', 'AdminApiController::ImageUpload', ['as' => 'file_upload_image_api']);
            });
        });
    });
}

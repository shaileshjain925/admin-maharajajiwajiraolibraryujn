<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Traits\CommonTraits;
use UserType;

class AdminPageController extends BaseController
{
    use CommonTraits;
    public function default_dashboard()
    {
        // switch ($_SESSION['user_type']) {
        //     case UserType::Admin->value:
        //         return $this->admin_dashboard();
        //         break;
        // }
        return $this->admin_dashboard();
    }
    public function admin_dashboard()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Admin Dashboard';
        $theme_data['_page_title'] = 'Admin Dashboard';
        $theme_data['_breadcrumb1'] = 'Dashboard';
        $theme_data['_breadcrumb2'] = 'Admin Dashboard';
        $theme_data['_script_files'][] = $theme_data['_assets_path'] . 'assets/js/pages/dashboard.init.js';
        $theme_data['_view_files'][] = 'AdminPanelNew/pages/Dashboard/admin_dashboard';
        return view('AdminPanelNew/partials/main', $theme_data);
    }

    public function role_user_list()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Role User';
        $theme_data['_page_title'] = 'Role User';
        $theme_data['_breadcrumb1'] = 'Admin';
        $theme_data['_breadcrumb2'] = 'Role User';
        $theme_data['_view_files'][] = 'AdminPanelNew/pages/Admin/role_user_list';
        return view('AdminPanelNew/partials/main', $theme_data);
    }
    public function UserRoleCreateUpdateComponent($user_id = null)
    {
        $data = [];
        if (!empty($user_id)) {
            $user_data = $this->getUserModel()->RecordGet($user_id);
            $data = array_merge($user_data['data'], ['ApiUrl' => base_url(route_to('user_update_api'))]);
        } else {
            $data = array_merge(['ApiUrl' => base_url(route_to('user_create_api'))]);
        }
        return view("AdminPanelNew/components/UserRoleCreateUpdate", $data);
    }

    public function course_list()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Course';
        $theme_data['_page_title'] = 'Course';
        $theme_data['_breadcrumb1'] = 'Admin';
        $theme_data['_breadcrumb2'] = 'Course';
        $theme_data['_view_files'][] = 'AdminPanelNew/pages/Admin/course_list';
        return view('AdminPanelNew/partials/main', $theme_data);
    }

    public function CourseCreateUpdateComponent($course_id = null)
    {
        $data = [];
        if (!empty($course_id)) {
            $course_data = $this->getCourseModel()->RecordGet($course_id);
            $data = array_merge($course_data['data'], ['ApiUrl' => base_url(route_to('course_update_api'))]);
        } else {
            $data = array_merge(['ApiUrl' => base_url(route_to('course_create_api'))]);
        }
        return view("AdminPanelNew/components/CourseCreateUpdate", $data);
    }

    public function designation_list()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Designation';
        $theme_data['_page_title'] = 'Designation';
        $theme_data['_breadcrumb1'] = 'Admin';
        $theme_data['_breadcrumb2'] = 'Designation';
        $theme_data['_view_files'][] = 'AdminPanelNew/pages/Admin/designation_list';
        return view('AdminPanelNew/partials/main', $theme_data);
    }

    public function DesignationCreateUpdateComponent($designation_id = null)
    {
        $data = [];
        if (!empty($designation_id)) {
            $designation_data = $this->getDesignationModel()->RecordGet($designation_id);
            $data = array_merge($designation_data['data'], ['ApiUrl' => base_url(route_to('designation_update_api'))]);
        } else {
            $data = array_merge(['ApiUrl' => base_url(route_to('designation_create_api'))]);
        }
        return view("AdminPanelNew/components/DesignationCreateUpdate", $data);
    }

    public function subject_list()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Subject';
        $theme_data['_page_title'] = 'Subject';
        $theme_data['_breadcrumb1'] = 'Admin';
        $theme_data['_breadcrumb2'] = 'Subject';
        $theme_data['_view_files'][] = 'AdminPanelNew/pages/Admin/subject_list';
        return view('AdminPanelNew/partials/main', $theme_data);
    }

    public function SubjectCreateUpdateComponent($subject_id = null)
    {
        $data = [];
        if (!empty($subject_id)) {
            $subject_data = $this->getSubjectModel()->RecordGet($subject_id);
            $data = array_merge($subject_data['data'], ['ApiUrl' => base_url(route_to('subject_update_api'))]);
        } else {
            $data = array_merge(['ApiUrl' => base_url(route_to('subject_create_api'))]);
        }
        return view("AdminPanelNew/components/SubjectCreateUpdate", $data);
    }
    public function department_list()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Department';
        $theme_data['_page_title'] = 'Department';
        $theme_data['_breadcrumb1'] = 'Admin';
        $theme_data['_breadcrumb2'] = 'Department';
        $theme_data['_view_files'][] = 'AdminPanelNew/pages/Admin/department_list';
        return view('AdminPanelNew/partials/main', $theme_data);
    }
    public function DepartmentCreateUpdateComponent($department_id = null)
    {
        $data = [];
        if (!empty($department_id)) {
            $department_data = $this->getDepartmentModel()->RecordGet($department_id);
            $data = array_merge($department_data['data'], ['ApiUrl' => base_url(route_to('department_update_api'))]);
        } else {
            $data = array_merge(['ApiUrl' => base_url(route_to('department_create_api'))]);
        }
        return view("AdminPanelNew/components/DepartmentCreateUpdate", $data);
    }
    public function faculty_list()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Faculty';
        $theme_data['_page_title'] = 'Faculty';
        $theme_data['_breadcrumb1'] = 'Admin';
        $theme_data['_breadcrumb2'] = 'Faculty';
        $theme_data['_view_files'][] = 'AdminPanelNew/pages/Admin/faculty_list';
        return view('AdminPanelNew/partials/main', $theme_data);
    }
    public function FacultyCreateUpdateComponent($faculty_id = null)
    {
        $data = [];
        if (!empty($faculty_id)) {
            $faculty_data = $this->getFacultyModel()->RecordGet($faculty_id);
            $data = array_merge($faculty_data['data'], ['ApiUrl' => base_url(route_to('faculty_update_api'))]);
        } else {
            $data = array_merge(['ApiUrl' => base_url(route_to('faculty_create_api'))]);
        }
        return view("AdminPanelNew/components/FacultyCreateUpdate", $data);
    }
    public function student_list()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Student';
        $theme_data['_page_title'] = 'Student';
        $theme_data['_breadcrumb1'] = 'Admin';
        $theme_data['_breadcrumb2'] = 'Student';
        $theme_data['_view_files'][] = 'AdminPanelNew/pages/Admin/student_list';
        return view('AdminPanelNew/partials/main', $theme_data);
    }
    public function StudentCreateUpdateComponent($student_id = null)
    {
        $data = [];
        if (!empty($student_id)) {
            $student_data = $this->getStudentModel()->RecordGet($student_id);
            $data = array_merge($student_data['data'], ['ApiUrl' => base_url(route_to('student_update_api'))]);
        } else {
            $data = array_merge(['ApiUrl' => base_url(route_to('student_create_api'))]);
        }
        return view("AdminPanelNew/components/StudentCreateUpdate", $data);
    }
    protected function admin_panel_common_data(): array
    {
        $theme_data = [];
        $theme_data['_assets_path'] = 'AdminPanelNew/';
        $theme_data['_theme_path'] = 'AdminPanelNew/';
        $theme_data['_partials_path'] = $theme_data['_theme_path'] . 'partials/';

        $theme_data['_meta_title'] = '';
        $theme_data['_page_title'] = '';
        $theme_data['_breadcrumb1'] = '';
        $theme_data['_breadcrumb2'] = '';
        // Css
        $theme_data['_head_css_code'] = "";
        $theme_data['_head_css_files'][] = $theme_data['_assets_path'] . 'assets/css/style.css';
        // Pre Script
        $theme_data['_head_js_code'] = "const base_url = '" . base_url() . "'";
        $theme_data['_head_js_files'][] = $theme_data['_assets_path'] . 'assets/js/pre-script.js';
        // Post Script
        $theme_data['_script_files'][] = $theme_data['_assets_path'] . 'assets/js/script.js';
        $theme_data['_script_files'][] = $theme_data['_assets_path'] . 'assets/js/comman.js';
        $theme_data['_script_js_code'] = "";
        $theme_data['_view_files'] = [];

        // Sidebar
        $theme_data['_user_name'] = @$_SESSION['fullname'];
        $theme_data['_user_id'] = '1';
        $theme_data['_user_image_url'] = 'assets/images/users/avatar-2.jpg';
        $theme_data['_role_name'] = ucfirst(@$_SESSION['user_type']);
        $theme_data['_role_id'] = '1';
        $theme_data['_menus'] = $this->getSiteBarMenus();
        $theme_data['_FirebaseMessagingNotification'] = [];
        return $theme_data;
    }
    protected function getSiteBarMenus()
    {
        $menuArray = [
            [
                "module_title" => "Files.Dashboard",
                "module_name" => "module1",
                "module_icon" => "mdi mdi-airplay",
                "visibility" => true,
                "menus" => [
                    [
                        "title" => "Admin Dashboard",
                        "url" => base_url(route_to('admin_dashboard')),
                        "badge_count" => 0,
                        // "visibility" => ($_SESSION['user_type'] == 'admin') ? true : false,
                        "visibility" => true,
                    ],
                ]
            ],

            [
                "module_title" => "Files.Admin",
                "module_name" => "Administrator",
                "module_icon" => "mdi mdi-account-supervisor-outline",
                // "visibility" => ($_SESSION['user_type'] == 'admin') ? true : false,
                "visibility" => true,
                "menus" => [
                    [
                        "title" => "Users Role",
                        "url" => base_url(route_to('role_user_list')),
                        "badge_count" => 0,
                        "visibility" => true,
                    ],
                    [
                        "title" => "Designation",
                        "url" => base_url(route_to('designation_list')),
                        "badge_count" => 0,
                        "visibility" => true,
                    ],
                    [
                        "title" => "Course",
                        "url" => base_url(route_to('course_list')),
                        "badge_count" => 0,
                        "visibility" => true,
                    ],
                    [
                        "title" => "Subject",
                        "url" => base_url(route_to('subject_list')),
                        "badge_count" => 0,
                        "visibility" => true,
                    ],
                    [
                        "title" => "Department",
                        "url" => base_url(route_to('department_list')),
                        "badge_count" => 0,
                        "visibility" => true,
                    ],
                    [
                        "title" => "Faculty",
                        "url" => base_url(route_to('faculty_list')),
                        "badge_count" => 0,
                        "visibility" => true,
                    ],
                    [
                        "title" => "Student",
                        "url" => base_url(route_to('student_list')),
                        "badge_count" => 0,
                        "visibility" => true,
                    ],
                ]
            ],
        ];
        return $menuArray;
    }
}

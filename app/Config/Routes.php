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
            // $routes->get('Purchase', 'AdminPageController::purchase_dashboard', ['as' => 'purchase_dashboard']);
            // $routes->get('Order', 'AdminPageController::order_dashboard', ['as' => 'order_dashboard']);
            // $routes->get('Financial', 'AdminPageController::finance_dashboard', ['as' => 'financial_dashboard']);
            // $routes->get('Delivery', 'AdminPageController::delivery_dashboard', ['as' => 'delivery_dashboard']);
            // $routes->get('Stock', 'AdminPageController::stock_dashboard', ['as' => 'stock_dashboard']);
        });
        $routes->group('Admin', function ($routes) {
            $routes->get('RoleUserList', 'AdminPageController::role_user_list', ['as' => 'role_user_list']);
            $routes->get('UserRoleCreateUpdateComponent', 'AdminPageController::UserRoleCreateUpdateComponent', ['as' => 'UserRoleCreateUpdateComponent']);
            $routes->get('UserRoleCreateUpdateComponent/(:num)', 'AdminPageController::UserRoleCreateUpdateComponent/$1');
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
            $routes->group('FileUpload', function ($routes) {
                $routes->post('ImageUpload', 'AdminApiController::ImageUpload', ['as' => 'file_upload_image_api']);
            });
        });
    });
}

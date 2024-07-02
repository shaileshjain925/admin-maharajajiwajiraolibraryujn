<?php

namespace App\Controllers;

use ApiResponseStatusCode;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmailController extends BaseController
{
    public function UserForgetPasswordSendOtp(int $otp,string $email,string $name)
    {
        // return formatCommonResponse(ApiResponseStatusCode::BAD_REQUEST,"Otp Not Send To Email");
        return formatCommonResponse(ApiResponseStatusCode::OK,"Otp Send To Email");
    }
}

<?php

namespace App\Traits;
// Firebase Messaging Notification
use App\Models\FirebaseMessagingIntegrationModel;
use App\Models\FirebaseMessagingTokenModel;
use App\Models\FirebaseMessagingNotificationModel;
use App\Models\CountryModel;
use App\Models\StateModel;
use App\Models\CityModel;
use App\Models\CustomerAddressModel;
use App\Models\CustomerModel;
use App\Models\CustomerTokenModel;
use App\Models\CustomerVerificationModel;
use App\Models\CustomerWishlistModel;
use App\Models\FunctionModel;
use App\Models\MediaManagementModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\CategoryTypeModel;
use App\Models\FabricModel;
use App\Models\ProductModel;
use App\Models\SizeModel;
use App\Models\UserModel;
use App\Models\UserTokenModel;

use App\Controllers\EmailController;
use App\Models\BlogPostModel;
use App\Models\ColorModel;
use App\Models\DealsOfTheDayModel;
use App\Models\PatternModel;
use App\Models\UnitModel;
use App\Models\ProductVariantModel;
use App\Models\SizeVsVariantModel;
use App\Models\FeatureTypeModel;
use App\Models\FeatureModel;
use App\Models\FormSubmissionsModel;
use App\Models\ProductVsFeatureModel;
use App\Models\StockModel;
use App\Models\SubscribersListModel;
use App\Models\WebsiteProfileModel;

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
}

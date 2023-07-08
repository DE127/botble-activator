<?php

use Botble\Base\Facades\BaseHelper;
use HK2\BotbleActivator\Http\Controllers\HK2ActivatorController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Botble\Setting\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'settings'], function () {
            Route::get('license/verify', [
                'as' => 'settings.license.verify',
                'uses' => '\\' . HK2ActivatorController::class . '@getVerifyLicense',
                'permission' => false,
            ]);
            Route::post('license/deactivate', [
                'as' => 'settings.license.deactivate',
                'uses' =>  '\\' . HK2ActivatorController::class . '@deactivateLicense',
                'middleware' => 'preventDemo',
                'permission' => 'core.manage.license',
            ]);
        });
    });
});

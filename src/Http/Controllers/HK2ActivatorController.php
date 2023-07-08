<?php

namespace HK2\BotbleActivator\Http\Controllers;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Carbon\Carbon;

class HK2ActivatorController
{
    /**
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function getVerifyLicense(BaseHttpResponse $response)
    {
        return $response->setMessage('Your license is activated.')->setData([
            'activated_at' => Carbon::now()->format('M d Y'),
            'licensed_to' => 'Free4All',
        ]);
    }

    /**
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function deactivateLicense(BaseHttpResponse $response)
    {
        return $response->setError()->setMessage('This is a Free4All version! no license to deactivate.');
    }
}

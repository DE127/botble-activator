<?php

namespace HK2\BotbleActivator\Providers;

use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

class HK2ActivatorProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this->setNamespace('plugins/hk2-botble-activator')
            ->loadRoutes();
    }
}

<?php

namespace Norotaro\Cors;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'norotaro.cors::lang.settings.menu',
                'description' => 'norotaro.cors::lang.settings.menu_description',
                'category'    => 'norotaro.cors::lang.plugin.name',
                'icon'        => 'icon-cogs',
                'class'       => Models\Settings::class,
                'keywords'    => 'cors',
                'permissions' => ['norotaro.cors.access_settings'],
            ]
        ];
    }

    public function boot()
    {
        $this->app->register(\Fruitcake\Cors\CorsServiceProvider::class);
        $this->app['Illuminate\Contracts\Http\Kernel']
            ->prependMiddleware(\Fruitcake\Cors\HandleCors::class);

        $settings = Models\Settings::instance();
        if ($settings->enabled) {
            // overwrite the CORS package configurations
            // with the configurations set in the backend
            config([
                'cors' => $settings->package_configuration,
            ]);
        }
    }
}

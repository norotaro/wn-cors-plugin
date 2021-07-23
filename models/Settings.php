<?php

namespace Norotaro\Cors\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'norotaro_cors_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    /**
     * Transforms the settings array to an array
     * compatible with package configuration
     * 
     * Ex, the array
     * "paths" => [
     *      [
     *         "path" => "api/*",
     *      ],
     *      [
     *         "path" => "api2/*",
     *      ],
     *  ]
     * 
     * Is turned to
     * "paths" => [
     *      "api/*",
     *      "api2/*",
     * ]
     */
    public function getPackageConfigurationAttribute()
    {
        $config = array_map(function ($item) {
            return is_array($item) ? array_map(function ($i) {
                return array_reduce($i, function ($c, $j) {
                    return $j;
                });
            }, $item) : $item;
        }, $this->configuration);

        if (!isset($config['allowed_origins_patterns'])) {
            $config['allowed_origins_patterns'] = [];
        }

        return $config;
    }
}

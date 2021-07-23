<?php

namespace Norotaro\Cors\Updates;

use Norotaro\Cors\Models\Settings;
use Seeder;

class Seeder102 extends Seeder
{
    public function run()
    {
        Settings::set('enabled', false);
        Settings::set('configuration', [
            "paths" => [
                [
                    "path" => "api/*",
                ],
            ],
            "allowed_origins" => [
                [
                    "origin" => "*",
                ],
            ],
            "allowed_methods" => [
                [
                    "method" => "*",
                ],
            ],
            "allowed_headers" => [
                [
                    "header" => "*",
                ],
            ],
            "exposed_headers" => false,
            "max_age" => 0,
            "supports_credentials" => false,
        ]);
    }
}

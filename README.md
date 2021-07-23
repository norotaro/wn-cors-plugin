# CORS plugin for WinterCMS

Implements [fuitcake/laravel-cors package](https://github.com/fruitcake/laravel-cors) for WinterCMS.

- [Installation](#installation)
- [About](#about)
- [Configuration](#configuration)
  - [Publishing the configuration file](#publishing-the-configuration-file)
  - [Using backend settings](#using-backend-settings)
- [Package docs](#package-docs)
## Installation

Run the following command in a project's root directory:

```sh
composer require norotaro/wn-cors-plugin
php artisan winter:up
```

## About

This plugin install the [fruitcake/laravel-cors](https://github.com/kreait/laravel-firebase#configuration) package and register it to the service container.

## Configuration

You have two options to configure this plugin. Feel free to choose the one that is most comfortable for you.

### Publishing the configuration file

You can publish the config to copy the file to `config` folder of WinterCMS.

```sh
php artisan vendor:publish --tag="cors"
```

For more information you can read the [instructions of laravel-cors](https://github.com/fruitcake/laravel-cors#configuration) package.

### Using backend configuration

In the WinterCMS backend settings section _(Settings > CORS > CORS Settings)_ you can enable Backend Configuration. There you can set the same parameters as in the `config/cors.php` file.

> **Note:** If you enable this setting, the configuration set in the config/cors.php file will be ignored.

> **Note:** If you choose this option to configure the plugin, you do not need to publish the configuration file described in the previous point.

## Package docs

Here you can read the documentation of the package installed by this plugin: [https://github.com/fruitcake/laravel-cors#cors-middleware-for-laravel](https://github.com/fruitcake/laravel-cors#cors-middleware-for-laravel)

# CORS plugin for WinterCMS

Implements [fuitcake/laravel-cors package](https://github.com/fruitcake/laravel-cors) for WinterCMS.

- [Installation](#installation)
- [Configuration](#configuration)
  - [Service account](#service-account)
- [Usage](#usage)
- [Support](#support)
- [License](#license)

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

In the WinterCMS backend configuration section you can enable Backend Configuration. There you can set the same parameters as in the `config/cors.php` file.

> Note: If you enable this setting, the settings set in the config/cors.php file will be ignored.

## Usage

As specified in the original package:

| Component | [Automatic Injection](https://laravel.com/docs/5.8/container#automatic-injection) | [Facades](https://laravel.com/docs/facades) | [`app()`](https://laravel.com/docs/helpers#method-app) |
| --- | --- | --- | --- |
| [Authentication](https://firebase-php.readthedocs.io/en/stable/authentication.html) | `\Kreait\Firebase\Auth` | `Firebase::auth()` | `app('firebase.auth')` |
| [Cloud Firestore](https://firebase-php.readthedocs.io/en/stable/cloud-firestore.html) | `\Kreait\Firebase\Firestore` | `Firebase::firestore()` | `app('firebase.firestore')` |
| [Cloud&nbsp;Messaging&nbsp;(FCM)](https://firebase-php.readthedocs.io/en/stable/cloud-messaging.html) | `\Kreait\Firebase\Messaging` | `Firebase::messaging()` | `app('firebase.messaging')` |
| [Dynamic&nbsp;Links](https://firebase-php.readthedocs.io/en/stable/dynamic-links.html) | `\Kreait\Firebase\DynamicLinks` | `Firebase::dynamicLinks()` | `app('firebase.dynamic_links')` |
| [Realtime Database](https://firebase-php.readthedocs.io/en/stable/realtime-database.html) | `\Kreait\Firebase\Database` | `Firebase::database()` | `app('firebase.database')` |
| [Remote Config](https://firebase-php.readthedocs.io/en/stable/remote-config.html) | `\Kreait\Firebase\RemoteConfig` | `Firebase::remoteConfig()` | `app('firebase.remote_config')` |
| [Cloud Storage](https://firebase-php.readthedocs.io/en/stable/cloud-storage.html) | `\Kreait\Firebase\Storage` | `Firebase::storage()` | `app('firebase.storage')` |

Once you have retrieved a component, please refer to the [documentation of the Firebase PHP Admin SDK](https://firebase-php.readthedocs.io)
for further information on how to use it.

**You don't need and should not use the `new Factory()` pattern described in the SDK documentation, this is already
done for you with the Laravel Service Provider. Use Dependency Injection, the Facades or the `app()` helper instead**

## Suport

- [Issue Tracker (WinterCMS Plugin)](https://github.com/norotaro/wn-firebase-plugin/issues/)
- [Issue Tracker (Laravel Package)](https://github.com/kreait/laravel-firebase/issues/)
- [Bug Reports (Admin SDK)](https://github.com/kreait/firebase-php/issues/)
- [Feature Requests and Discussions (Admin SDK)](https://github.com/kreait/firebase-php/discussions)
- [Stack Overflow](https://stackoverflow.com/questions/tagged/firebase+php)

## License

Firebase for WinterCMS is licensed under the [MIT License](LICENSE).

Your use of Firebase is governed by the [Terms of Service for Firebase Services](https://firebase.google.com/terms/).
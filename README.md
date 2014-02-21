# DSetting (Laravel4 Package)

[![Build Status](https://travis-ci.org/codepeak/dsettings.png)](https://travis-ci.org/codepeak/dsettings)

Store and handle custom settings in the database. Will use the Laravel cache system to minimize database queries.

## Quick start

### Required setup

In the `require` key of `composer.json` file add the following

    "codepeak/dsettings": "dev-master"

Run the Composer update comand

    $ composer update

In your `config/app.php` add `'Codepeak\Dsettings\DsettingsServiceProvider'` to the end of the `$providers` array

    'providers' => array(

        'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        'Illuminate\Auth\AuthServiceProvider',
        ...
        'Codepeak\Dsettings\DsettingsServiceProvider',

    ),

At the end of `config/app.php` add `'DSetting'    => 'Codepeak\Dsettings\Facades\DSetting'` to the `$aliases` array

    'aliases' => array(

        'App'        => 'Illuminate\Support\Facades\App',
        'Artisan'    => 'Illuminate\Support\Facades\Artisan',
        ...
        'DSetting'    => 'Codepeak\Dsettings\Facades\DSetting',

    ),

Run the migration update command to create the `settings` table

    $ php artisan migrate --package=codepeak/dsettings
    
### Usage

Get value from the database (or cache if fetched earlier)

    \DSetting::get('database.key');
    
Store or update value

    \DSetting::set('database.key', 'my nice value');


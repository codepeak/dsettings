# DSetting (Laravel4 Package)

Store and handle custom settings in the database. Will use the Laravel cache system to minimize database queries.

## Quick start

### Required setup

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

    $ php artisan migrate

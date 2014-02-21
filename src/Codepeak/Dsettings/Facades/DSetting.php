<?php namespace Codepeak\Dsettings\Facades;

use Illuminate\Support\Facades\Facade;

class DSetting extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dsetting';
    }

}

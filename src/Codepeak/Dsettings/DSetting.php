<?php namespace Codepeak\Dsettings;

/**
 * Class Helper
 */
class DSetting {

    /**
     * Fetch setting
     *
     * @param $key
     * @return null
     */
    public function get($key)
    {
        /**
         * Setup cache key
         */
        $cacheKey = 'setting_' . md5($key);

        /**
         * Check if in cache
         */
        if (\Cache::has($cacheKey)) {
            return \Cache::get($cacheKey);
        }

        /**
         * Fetch from database
         */
        $setting = Setting::where('key', '=', $key)->first();

        /**
         * If a row was found, return the value
         */
        if (is_object($setting) && $setting->getId()) {
            /**
             * Store in cache
             */
            \Cache::forever($cacheKey, $setting->getValue());

            /**
             * Return the data
             */
            return $setting->getValue();
        }

        return null;
    }

    /**
     * Store setting
     *
     * @param $key
     * @param $value
     * @return bool
     */
    public function set($key, $value)
    {
        /**
         * Setup cache key
         */
        $cacheKey = 'setting_' . md5($key);

        /**
         * Fetch from database
         */
        $setting = Setting::where('key', '=', $key)->first();

        /**
         * If nothing was found, create a new object
         */
        if (!is_object($setting)) {
            $setting = new Setting();
        }

        /**
         * Set the values
         */
        $setting
            ->setKey($key)
            ->setValue($value)
            ->save();

        /**
         * Expire the cache
         */
        \Cache::forget($cacheKey);

        return true;
    }

}
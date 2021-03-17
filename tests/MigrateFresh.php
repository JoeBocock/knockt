<?php

namespace Tests;

use Illuminate\Support\Facades\Artisan;

trait MigrateFresh
{
    /**
    * Store if setup has yet to be run.
    *
    * @var boolean
    */
    protected static $setupRan = false;

    /**
    * After the first run of setUp "migrate:fresh --seed"
    * @return void
    */
    public function setUp(): void
    {
        parent::setUp();

        /**
         * In memory database addresses get lost on test loops.
         *
         * Each call creates a new app instance on the stack meaning that the database needs to be refreshed each time.
         */
        if (!static::$setupRan || config('database.default') === 'sqlite') {
            Artisan::call('migrate:fresh --seed');
            static::$setupRan = true;
        }
    }
}

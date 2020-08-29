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

        if (!static::$setupRan) {
            Artisan::call('migrate:fresh --seed');
            static::$setupRan = true;
        }
    }
}

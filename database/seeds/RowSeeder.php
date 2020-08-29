<?php

use Illuminate\Database\Seeder;

class RowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Row::class, 30)->create();
    }
}

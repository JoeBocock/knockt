<?php

use Illuminate\Database\Seeder;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Slot::class, 100)->create();
    }
}

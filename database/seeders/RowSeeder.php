<?php

namespace Database\Seeders;

use App\Models\Row;
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
        Row::factory()->count(30)->create();
    }
}

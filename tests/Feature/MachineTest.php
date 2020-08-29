<?php

namespace Tests\Feature;

use App\Machine;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MachineTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A manchine can be created.
     *
     * @test
     * @return void
     */
    public function it_can_be_created(): void
    {
        Machine::create(['name' => 'Chocolate Station']);

        $this->assertDatabaseHas('machines', [
            'name' => 'Chocolate Station',
            'status' => 0,
        ]);
    }
}

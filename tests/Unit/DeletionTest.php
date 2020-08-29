<?php

namespace Tests\Unit;

use App\Machine;
use App\Row;
use App\Slot;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeletionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the cascade of deletion for a machine.
     *
     * @test
     * @return void
     */
    public function it_will_cascade_when_deleted(): void
    {
        $machine = Machine::create(['name' => 'Chocolate Station']);

        $row = Row::create(['machine_id' => $machine->id]);

        Slot::create(['row_id' => $row->id]);

        $machine->delete();

        $this->assertDatabaseMissing('slots', [
            'row_id' => $row->id,
        ]);
    }
}

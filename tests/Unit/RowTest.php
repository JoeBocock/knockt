<?php

namespace Tests\Unit;

use App\Models\Machine;
use App\Models\Row;
use Tests\TestCase;

class RowTest extends TestCase
{
    /**
     * Index the resource.
     *
     * @test
     *
     * @return void
     */
    public function theyCanBeRetrieved(): void
    {
        $response = $this->call('GET', '/api/rows', ['machine_id' => Machine::first()->id]);

        $response->assertStatus(200);
    }

    /**
     * Store the resource.
     *
     * @test
     *
     * @return void
     */
    public function itCanBeStored(): void
    {
        $response = $this->post('/api/rows', array_merge(
            Row::factory()->raw(),
            ['machine_id' => Row::first()->machine_id]
        ));

        $response->assertStatus(201);
    }

    /**
     * View a single resource.
     *
     * @test
     *
     * @return void
     */
    public function itCanBeRetrieved(): void
    {
        $response = $this->call('GET', '/api/rows/'.Row::first()->id);

        $response->assertStatus(200);
    }

    /**
     * Update a single resource.
     *
     * @test
     *
     * @return void
     */
    public function itCanBeUpdated(): void
    {
        $response = $this->put('/api/rows/'.Row::first()->id, Row::factory()->raw());

        $response->assertStatus(200);
    }

    /**
     * Delete a single resource.
     *
     * @test
     *
     * @return void
     */
    public function itCanBeDestroyed(): void
    {
        $response = $this->delete('/api/rows/'.Row::first()->id);

        $response->assertStatus(204);
    }
}

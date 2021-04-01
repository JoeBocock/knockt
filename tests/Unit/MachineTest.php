<?php

namespace Tests\Unit;

use App\Models\Machine;
use Tests\TestCase;

class MachineTest extends TestCase
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
        $response = $this->get('/api/machines');

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
        $response = $this->post('/api/machines', Machine::factory()->raw());

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
        $response = $this->get('/api/machines/'.Machine::first()->id);

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
        $response = $this->put('/api/machines/'.Machine::first()->id, Machine::factory()->raw());

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
        $response = $this->delete('/api/machines/'.Machine::first()->id);

        $response->assertStatus(204);
    }
}

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
    public function they_can_be_retrieved(): void
    {
        Machine::factory()->create();

        $response = $this->get('/api/machines');

        $response->assertStatus(200);
        $this->assertNotEmpty($response['data']);
    }

    /**
     * Store the resource.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_stored(): void
    {
        $response = $this->post('/api/machines', Machine::factory()->raw());

        $response->assertStatus(201);
        $this->assertNotEmpty($response['data']);
    }

    /**
     * View a single resource.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_retrieved(): void
    {
        $machine = Machine::factory()->create();

        $response = $this->get("/api/machines/{$machine->id}");

        $response->assertStatus(200);
        $this->assertEquals($machine->name, $response['data']['name']);
    }

    /**
     * Update a single resource.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_updated(): void
    {
        $machine = Machine::factory()->create();

        $response = $this->put("/api/machines/{$machine->id}", Machine::factory()->raw());

        $response->assertStatus(200);
        $this->assertEquals($machine->id, $response['data']['id']);
        $this->assertNotEquals($machine->name, $response['data']['name']);
    }

    /**
     * Delete a single resource.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_destroyed(): void
    {
        $machine = Machine::factory()->create();

        $response = $this->delete("/api/machines/{$machine->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('machines', ['id' => $machine->id]);
    }
}
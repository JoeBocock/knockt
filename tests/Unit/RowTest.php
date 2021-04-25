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
    public function they_can_be_retrieved(): void
    {
        $row = Row::factory()->create();

        $response = $this->call('GET', '/api/rows', ['machine_id' => $row->machine_id]);

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
        $machine = Machine::factory()->create();

        $response = $this->post('/api/rows', array_merge(
            Row::factory()->raw(),
            ['machine_id' => $machine->id]
        ));

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
        $row = Row::factory()->create();

        $response = $this->call('GET', "/api/rows/{$row->id}");

        $response->assertStatus(200);
        $this->assertEquals($row->name, $response['data']['name']);
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
        $row = Row::factory()->create();

        $response = $this->put("/api/rows/{$row->id}", Row::factory()->raw());

        $response->assertStatus(200);
        $this->assertEquals($row->id, $response['data']['id']);
        $this->assertNotEquals($row->name, $response['data']['name']);
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
        $row = Row::factory()->create();

        $response = $this->delete("/api/rows/{$row->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('rows', ['id' => $row->id]);
    }
}
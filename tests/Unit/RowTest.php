<?php

namespace Tests\Unit;

use App\Row;
use App\Machine;
use Tests\TestCase;

class RowTest extends TestCase
{
    /**
     * Index the resource.
     *
     * @test
     * @return void
     */
    public function they_can_be_retrieved(): void
    {
        $response = $this->call('GET', '/api/rows', ['machine_id' => Machine::first()->id]);

        $response->assertStatus(200);
    }

    /**
     * Store the resource.
     *
     * @test
     * @return void
     */
    public function it_can_be_stored(): void
    {
        $row = factory(Row::class)->raw();

        $row['machine_id'] = Row::first()->machine_id;

        $response = $this->post('/api/rows', $row);

        $response->assertStatus(201);
    }

    /**
     * View a single resource.
     *
     * @test
     * @return void
     */
    public function it_can_be_retrieved(): void
    {
        $response = $this->call('GET', '/api/rows/' . Row::first()->id);

        $response->assertStatus(200);
    }

    /**
     * Update a single resource.
     *
     * @test
     * @return void
     */
    public function it_can_be_updated(): void
    {
        $row = Row::first();

        $row['name'] = 'Test';

        $response = $this->put('/api/rows/' . $row->id, $row->toArray());

        $response->assertStatus(200);
    }

    /**
     * Delete a single resource.
     *
     * @test
     * @return void
     */
    public function it_can_be_destroyed(): void
    {
        $response = $this->delete('/api/rows/' . Row::first()->id);

        $response->assertStatus(204);
    }
}

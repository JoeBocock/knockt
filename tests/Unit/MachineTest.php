<?php

namespace Tests\Unit;

use App\Machine;
use Tests\TestCase;

class MachineTest extends TestCase
{
    /**
     * Index the resource.
     *
     * @test
     * @return void
     */
    public function they_can_be_retrieved(): void
    {
        $response = $this->get('/api/machines');

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
        $response = $this->post('/api/machines', factory(Machine::class)->raw());

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
        $response = $this->get('/api/machines/' . Machine::first()->id);

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
        $response = $this->put('/api/machines/' . Machine::first()->id, factory(Machine::class)->raw());

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
        $response = $this->delete('/api/machines/' . Machine::first()->id);

        $response->assertStatus(204);
    }

    /**
     * Check that the resource provides links.
     *
     * @test
     * @return void
     */
    public function it_provides_links(): void
    {
        $response = $this->get('/api/machines');

        $machineLinks = $response->json('data')[0]['links'];

        $this->assertEmpty(array_diff_key([
            'index' => '',
            'store' => '',
            'show' => '',
            'update' => '',
            'destroy' => '',
        ], $machineLinks));
    }
}

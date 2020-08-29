<?php

namespace Tests\Feature;

use App\Machine;
use Tests\TestCase;

class MachineTest extends TestCase
{
    /**
     * A manchine can be retrieved.
     *
     * @test
     * @return void
     */
    public function it_can_be_retrieved(): void
    {
        $response = $this->get('/api/machines');

        $response->assertStatus(200);
    }

    /**
     * A manchine can be stored.
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
     * A manchine can be updated.
     *
     * @test
     * @return void
     */
    public function it_can_be_updated(): void
    {
        $response = $this->put('/api/machines/' . rand(1, 10), factory(Machine::class)->raw());

        $response->assertStatus(200);
    }

    /**
     * A manchine can be destroyed.
     *
     * @test
     * @return void
     */
    public function it_can_be_destroyed(): void
    {
        $response = $this->delete('/api/machines/' . rand(1, 10));

        $response->assertStatus(204);
    }
}

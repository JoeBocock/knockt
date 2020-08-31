<?php

namespace Tests\Feature;

use App\Row;
use Tests\TestCase;

class RowTest extends TestCase
{
    /**
     * A manchine can be retrieved.
     *
     * @test
     * @return void
     */
    public function it_can_be_retrieved(): void
    {
        $response = $this->call('GET', '/api/rows', ['machine_id' => rand(1, 10)]);

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
        $response = $this->post('/api/rows', factory(Row::class)->raw());

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
        $response = $this->put('/api/rows/' . rand(1, 10), factory(Row::class)->raw());

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
        $response = $this->delete('/api/rows/' . rand(1, 10));

        $response->assertStatus(204);
    }
}

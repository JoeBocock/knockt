<?php

namespace Tests\Feature;

use App\Row;
use App\Slot;
use Tests\TestCase;

class SlotTest extends TestCase
{
    /**
     * Index the resource.
     *
     * @test
     * @return void
     */
    public function they_can_be_retrieved(): void
    {
        $rowID = Row::first()->id;

        $response = $this->call('GET', '/api/slots', ['row_id' => $rowID]);

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
        $slot = factory(Slot::class)->raw();

        $slot['row_id'] = Row::first()->id;

        $response = $this->post('/api/slots', $slot);

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
        $response = $this->call('GET', '/api/slots/' . Slot::first()->id);

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
        $slot = Slot::first();

        $slot->name = 'Up';

        $response = $this->put('/api/slots/' . $slot->id, $slot->toArray());

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
        $slot = Slot::first();

        $response = $this->delete('/api/slots/' . $slot->id);

        $response->assertStatus(204);
    }
}

<?php

namespace Tests\Unit;

use App\Models\Row;
use App\Models\Slot;
use Tests\TestCase;

class SlotTest extends TestCase
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
        $response = $this->call('GET', '/api/slots', ['row_id' => Row::first()->id]);

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
        $response = $this->post('/api/slots', array_merge(
            Slot::factory()->raw(),
            ['row_id' => Row::first()->id]
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
        $response = $this->call('GET', '/api/slots/'.Slot::first()->id);

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
        $response = $this->put('/api/slots/'.Slot::first()->id, Slot::factory()->raw());

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
        $response = $this->delete('/api/slots/'.Slot::first()->id);

        $response->assertStatus(204);
    }

    /**
     * Purchase the slots current product.
     *
     * @test
     *
     * @return void
     */
    public function itsProductCanBePurchased(): void
    {
        $response = $this->post('/api/slots/'.Slot::first()->id.'/purchase', ['amount' => 9999]);

        $response->assertStatus(204);
    }

    /**
     * Purchase the slots current product.
     *
     * @test
     *
     * @return void
     */
    public function mustHaveSufficientFunds(): void
    {
        $response = $this->post('/api/slots/'.Slot::first()->id.'/purchase', ['amount' => 1]);

        $response->assertStatus(422);
    }
}

<?php

namespace Tests\Unit;

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
        $response = $this->call('GET', '/api/slots', ['row_id' => Row::first()->id]);

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

    /**
     * Check that the resource provides links.
     *
     * @test
     * @return void
     */
    public function it_provides_links(): void
    {
        $response = $this->call('GET', '/api/slots', ['row_id' => Row::first()->id]);

        $slotLinks = $response->json('data')[0]['links'];

        $this->assertEmpty(array_diff_key([
            'index' => '',
            'store' => '',
            'show' => '',
            'update' => '',
            'destroy' => '',
            'purchase' => '',
        ], $slotLinks));
    }

    /**
     * Purchase the slots current product.
     *
     * @test
     * @return void
     */
    public function its_product_can_be_purchased(): void
    {
        $slot = Slot::first();

        $response = $this->post('/api/slots/' . $slot->id . '/purchase', ['amount' => 9999]);

        $response->assertStatus(204);
    }

    /**
     * Purchase the slots current product.
     *
     * @test
     * @return void
     */
    public function must_have_sufficient_funds(): void
    {
        $slot = Slot::first();

        $response = $this->post('/api/slots/' . $slot->id . '/purchase', ['amount' => 1]);

        $response->assertStatus(422);
    }
}

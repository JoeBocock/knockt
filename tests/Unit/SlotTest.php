<?php

namespace Tests\Unit;

use App\Models\Product;
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
    public function they_can_be_retrieved(): void
    {
        $slot = Slot::factory()->create();

        $response = $this->call('GET', '/api/slots', ['row_id' => $slot->row_id]);

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
        $row = Row::factory()->create();

        $response = $this->post('/api/slots', array_merge(
            Slot::factory()->raw(),
            ['row_id' => $row->id]
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
        $slot = Slot::factory()->create();

        $response = $this->get("/api/slots/{$slot->id}");

        $response->assertStatus(200);
        $this->assertEquals($slot->name, $response['data']['name']);
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
        $slot = Slot::factory()->create();

        $response = $this->put("/api/slots/{$slot->id}", Slot::factory()->raw());

        $response->assertStatus(200);
        $this->assertEquals($slot->id, $response['data']['id']);
        $this->assertNotEquals($slot->name, $response['data']['name']);
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
        $slot = Slot::factory()->create();

        $response = $this->delete("/api/slots/{$slot->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('slots', ['id' => $slot->id]);
    }

    /**
     * Purchase the slots current product.
     *
     * @test
     *
     * @return void
     */
    public function its_product_can_be_purchased(): void
    {
        $slot = Slot::factory()->create();
        $product = Product::find($slot->product_id);

        $response = $this->post("/api/slots/{$slot->id}/purchase", ['amount' => 9999]);

        $lowerStockProduct = Product::find($slot->product_id);

        $response->assertStatus(204);
        $this->assertLessThan($product->stock, $lowerStockProduct->stock);
    }

    /**
     * Purchase the slots current product.
     *
     * @test
     *
     * @return void
     */
    public function must_have_sufficient_funds(): void
    {
        $slot = Slot::factory()->create();

        $response = $this->post("/api/slots/{$slot->id}/purchase", ['amount' => 1]);

        $response->assertStatus(422);
    }
}
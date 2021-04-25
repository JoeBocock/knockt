<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
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
        Product::factory()->create();

        $response = $this->get('/api/products');

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
        $response = $this->post('/api/products', Product::factory()->raw());

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
        $product = Product::factory()->create();

        $response = $this->get("/api/products/{$product->id}");

        $response->assertStatus(200);
        $this->assertEquals($product->name, $response['data']['name']);
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
        $product = Product::factory()->create();

        $response = $this->put("/api/products/{$product->id}", Product::factory()->raw());

        $response->assertStatus(200);
        $this->assertEquals($product->id, $response['data']['id']);
        $this->assertNotEquals($product->name, $response['data']['name']);
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
        $product = Product::factory()->create();

        $response = $this->delete("/api/products/{$product->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
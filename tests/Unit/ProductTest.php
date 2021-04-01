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
    public function theyCanBeRetrieved(): void
    {
        $response = $this->call('GET', '/api/products');

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
        $response = $this->post('/api/products', Product::factory()->raw());

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
        $response = $this->call('GET', '/api/products/'.Product::first()->id);

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
        $response = $this->put('/api/products/'.Product::first()->id, Product::factory()->raw());

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
        $response = $this->delete('/api/products/'.Product::first()->id);

        $response->assertStatus(204);
    }
}

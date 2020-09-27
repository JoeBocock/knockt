<?php

namespace Tests\Unit;

use App\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * Index the resource.
     *
     * @test
     * @return void
     */
    public function they_can_be_retrieved(): void
    {
        $response = $this->call('GET', '/api/products');

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
        $response = $this->post('/api/products', factory(Product::class)->raw());

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
        $response = $this->call('GET', '/api/products/' . Product::first()->id);

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
        $product = Product::first();

        $product['price'] = 4000;

        $response = $this->put('/api/products/' . $product->id, $product->toArray());

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
        $response = $this->delete('/api/products/' . Product::first()->id);

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
        $response = $this->call('GET', '/api/products');

        $productLinks = $response->json('data')[0]['links'];

        $this->assertEmpty(array_diff_key([
            'index' => '',
            'store' => '',
            'show' => '',
            'update' => '',
            'destroy' => '',
        ], $productLinks));
    }
}

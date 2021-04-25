<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;

class UpdateStockCommandTest extends TestCase
{
    /**
     * The command requires an ID of a valid product.
     *
     * @test
     *
     * @return void
     */
    public function it_expects_a_valid_product_id(): void
    {
        $this->artisan('product:update-stock 999')
            ->expectsOutput('Product with the ID 999 could not be found.')
            ->assertExitCode(1);
    }

    /**
     * The command can increment a product via an option.
     *
     * @test
     *
     * @return void
     */
    public function it_can_increment_a_product(): void
    {
        $product = Product::factory()->create();

        $this->artisan("product:update-stock {$product->id} --increment")
            ->expectsOutput("Product: {$product->name} was successfully incremented.")
            ->assertExitCode(0);

        $higherStockProduct = Product::find($product->id);

        $this->assertGreaterThan($product->stock, $higherStockProduct->stock);
    }

    /**
     * The command can decrement a product via an option.
     *
     * @test
     *
     * @return void
     */
    public function it_can_decrement_a_product(): void
    {
        $product = Product::factory()->create();

        $this->artisan("product:update-stock {$product->id} --decrement")
            ->expectsOutput("Product: {$product->name} was successfully decremented.")
            ->assertExitCode(0);

        $lowerStockProduct = Product::find($product->id);

        $this->assertLessThan($product->stock, $lowerStockProduct->stock);
    }

    /**
     * The command requires a numeric stock value.
     *
     * @test
     *
     * @return void
     */
    public function it_requires_a_numeric_value(): void
    {
        $product = Product::factory()->create();

        $this->artisan("product:update-stock {$product->id}")
            ->expectsQuestion("Product: {$product->name} currently has a stock of {$product->stock}, what should the new value be?", 'Not a number')
            ->expectsOutput('Value provided was not numeric, operation aborted.')
            ->assertExitCode(1);
    }

    /**
     * The command can manually correct a stock value for a product.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_manually_updated(): void
    {
        $product = Product::factory()->create(['stock' => 100]);

        $this->artisan("product:update-stock {$product->id}")
            ->expectsQuestion("Product: {$product->name} currently has a stock of {$product->stock}, what should the new value be?", 10)
            ->expectsOutput("Product: {$product->name} was successfully updated.")
            ->assertExitCode(0);

        $correctedProduct = Product::find($product->id);

        $this->assertEquals($correctedProduct->stock, 10);
    }
}
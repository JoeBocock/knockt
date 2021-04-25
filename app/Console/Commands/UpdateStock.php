<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class UpdateStock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:update-stock
                             {product : The ID of the product you wish to modify}
                             {--increment : Automatically increase the current stock by one}
                             {--decrement : Automatically decrease the current stock by one}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manually update the stock of a product.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $product = Product::find($this->argument('product'));

        if (!$product) {
            $this->error("Product with the ID {$this->argument('product')} could not be found.");

            return 1;
        }

        if ($this->option('increment')) {
            $product->increment('stock', 1);
            $this->info("Product: {$product->name} was successfully incremented.");

            return 0;
        }

        if ($this->option('decrement')) {
            $product->decrement('stock', 1);
            $this->info("Product: {$product->name} was successfully decremented.");

            return 0;
        }

        $newStockAmount = $this->ask("Product: {$product->name} currently has a stock of {$product->stock}, what should the new value be?");

        if (!is_numeric($newStockAmount)) {
            $this->error('Value provided was not numeric, operation aborted.');

            return 1;
        }

        $product->stock = $newStockAmount;
        $product->save();

        $this->info("Product: {$product->name} was successfully updated.");
    }
}
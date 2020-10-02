<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreProductRequest;
use App\Common\Responses\NoContentResponse;
use App\Http\Requests\UpdateProductRequest;
use App\Common\Handlers\UpdateProductHandler;
use App\Http\Resources\Product\Product as ProductResource;
use App\Http\Resources\Product\Collections\ProductCollection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ProductCollection
     */
    public function index(): ProductCollection
    {
        return new ProductCollection(Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProductRequest  $request
     * @return ProductResource
     */
    public function store(StoreProductRequest $request): ProductResource
    {
        return new ProductResource(Product::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  Product $product
     * @return ProductResource
     */
    public function show(Product $product): ProductResource
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProductRequest  $request
     * @param  Product $product
     * @return ProductResource
     */
    public function update(UpdateProductRequest $request, Product $product): ProductResource
    {
        return new ProductResource(
            UpdateProductHandler::update($product, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return JsonResponse
     */
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return NoContentResponse::send();
    }
}

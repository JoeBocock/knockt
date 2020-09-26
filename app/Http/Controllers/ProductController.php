<?php

namespace App\Http\Controllers;

use App\Product;
use App\Common\Responses\NotFoundResponse;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ProductCollection(Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        return new ProductResource(Product::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return NotFoundResponse::send();
        }

        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return NotFoundResponse::send();
        }

        return new ProductResource(
            UpdateProductHandler::update($product, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return NotFoundResponse::send();
        }

        $product->delete();

        return NoContentResponse::send();
    }
}

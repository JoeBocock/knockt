<?php

namespace App\Http\Controllers;

use App\Slot;
use App\Http\Requests\StoreSlotRequest;
use App\Http\Requests\IndexSlotsRequest;
use App\Http\Requests\UpdateSlotRequest;
use App\Common\Handlers\UpdateSlotHandler;
use App\Common\Responses\NoContentResponse;
use App\Http\Requests\PurchaseProductRequest;
use App\Http\Resources\Slot\Slot as SlotResource;
use App\Common\Responses\InsufficientFundsResponse;
use App\Common\Responses\InsufficientStockResponse;
use App\Http\Resources\Slot\Collections\SlotCollection;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\IndexSlotsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(IndexSlotsRequest $request)
    {
        return new SlotCollection(Slot::where('row_id', $request->row_id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreSlotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlotRequest $request)
    {
        return new SlotResource(Slot::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slot $slot)
    {
        return new SlotResource($slot);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateSlotRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlotRequest $request, Slot $slot)
    {
        return new SlotResource(
            UpdateSlotHandler::update($slot, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slot $slot)
    {
        $slot->delete();

        return NoContentResponse::send();
    }

    /**
     * Purchase the product in the given slot.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function purchaseProductInSlot(PurchaseProductRequest $request, Slot $slot)
    {
        if ($slot->product === null || $slot->product->stock <= 0) {
            return InsufficientStockResponse::send();
        }

        if ($request->amount < $slot->product->price) {
            return InsufficientFundsResponse::send();
        }

        $slot->product->decrement('stock', 1);

        return response()->json(['success' => false]);
    }
}

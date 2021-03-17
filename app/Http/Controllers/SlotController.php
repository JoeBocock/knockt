<?php

namespace App\Http\Controllers;

use App\Slot;
use Illuminate\Http\JsonResponse;
use App\Common\API\Wrappers\Money;
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
     * @param  IndexSlotsRequest  $request
     * @return SlotCollection
     */
    public function index(IndexSlotsRequest $request): SlotCollection
    {
        return new SlotCollection(Slot::where('row_id', $request->row_id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreSlotRequest  $request
     * @return SlotResource
     */
    public function store(StoreSlotRequest $request): SlotResource
    {
        return new SlotResource(Slot::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  Slot $slot
     * @return SlotResource
     */
    public function show(Slot $slot): SlotResource
    {
        return new SlotResource($slot);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSlotRequest  $request
     * @param  Slot $slot
     * @return SlotResource
     */
    public function update(UpdateSlotRequest $request, Slot $slot): SlotResource
    {
        return new SlotResource(
            UpdateSlotHandler::update($slot, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Slot $slot
     * @return JsonResponse
     */
    public function destroy(Slot $slot): JsonResponse
    {
        $slot->delete();

        return NoContentResponse::send();
    }

    /**
     * Purchase the product in the given slot.
     *
     * @param PurchaseProductRequest $request
     * @param Slot $slot
     * @param Money $customerAmount
     * @return JsonResponse
     */
    public function purchaseProductInSlot(PurchaseProductRequest $request, Slot $slot): JsonResponse
    {
        $customerAmount = new Money($request->amount);

        if ($slot->product === null || !$slot->product->inStock()) {
            return InsufficientStockResponse::send();
        }

        if (!$customerAmount->GreaterThanOrEqualTo($slot->product->price)) {
            return InsufficientFundsResponse::send();
        }

        $slot->product->decrement('stock', 1);

        return NoContentResponse::send();
    }
}

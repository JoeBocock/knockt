<?php

namespace App\Http\Controllers;

use App\Common\Fillers\GenericFiller;
use App\Common\Responses\InsufficientStockResponse;
use App\Common\Utils\Money;
use App\Http\Requests\Slot\IndexSlotsRequest;
use App\Http\Requests\Slot\PurchaseProductRequest;
use App\Http\Requests\Slot\StoreSlotRequest;
use App\Http\Requests\Slot\UpdateSlotRequest;
use App\Http\Resources\Slot\SlotCollection;
use App\Http\Resources\Slot\SlotResource;
use App\Http\Responses\InsufficientFundsResponse;
use App\Http\Responses\NoContentResponse;
use App\Models\Slot;
use Illuminate\Http\JsonResponse;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return IndexSlotsRequest
     */
    public function index(IndexSlotsRequest $request): SlotCollection
    {
        return new SlotCollection(Slot::where('row_id', $request->row_id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSlotRequest $request
     *
     * @return SlotResource
     */
    public function store(StoreSlotRequest $request): SlotResource
    {
        return new SlotResource(Slot::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param Slot $slot
     *
     * @return SlotResource
     */
    public function show(Slot $slot): SlotResource
    {
        return new SlotResource($slot);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSlotRequest $request
     * @param Slot              $slot
     *
     * @return SlotResource
     */
    public function update(UpdateSlotRequest $request, Slot $slot): SlotResource
    {
        return new SlotResource(
            GenericFiller::fill($slot, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Slot $slot
     *
     * @return JsonResponse
     */
    public function destroy(Slot $slot): JsonResponse
    {
        $slot->delete();

        return NoContentResponse::build();
    }

    /**
     * Purchase the product in the given slot.
     *
     * @param PurchaseProductRequest $request
     * @param Slot                   $slot
     * @param Money                  $customerAmount
     *
     * @return JsonResponse
     */
    public function purchaseProductInSlot(PurchaseProductRequest $request, Slot $slot, Money $customerAmount): JsonResponse
    {
        if (null === $slot->product || !$slot->product->inStock()) {
            return InsufficientStockResponse::build();
        }

        if (!$customerAmount->GreaterThanOrEqualTo($slot->product->price)) {
            return InsufficientFundsResponse::build();
        }

        $slot->product->decrement('stock', 1);

        return NoContentResponse::build();
    }
}

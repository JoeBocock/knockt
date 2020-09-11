<?php

namespace App\Http\Controllers;

use App\Common\Handlers\UpdateSlotHandler;
use App\Common\Responses\NoContentResponse;
use App\Common\Responses\NotFoundResponse;
use App\Http\Requests\IndexSlotsRequest;
use App\Http\Requests\StoreSlotRequest;
use App\Http\Requests\UpdateSlotRequest;
use App\Http\Resources\Slot\Collections\SlotCollection;
use App\Http\Resources\Slot\Slot as SlotResource;
use App\Slot;

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
    public function show($id)
    {
        $row = Slot::find($id);

        if (!$row) {
            return NotFoundResponse::send();
        }

        return new SlotResource($row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateSlotRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlotRequest $request, $id)
    {
        $slot = Slot::find($id);

        if (!$slot) {
            return NotFoundResponse::send();
        }

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
    public function destroy($id)
    {
        $row = Slot::find($id);

        if (!$row) {
            return NotFoundResponse::send();
        }

        $row->delete();

        return NoContentResponse::send();
    }
}

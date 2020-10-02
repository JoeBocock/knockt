<?php

namespace App\Http\Controllers;

use App\Machine;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreMachineRequest;
use App\Common\Responses\NoContentResponse;
use App\Http\Requests\UpdateMachineRequest;
use App\Common\Handlers\UpdateMachineHandler;
use App\Http\Resources\Machine\Machine as MachineResource;
use App\Http\Resources\Machine\Collections\MachineCollection;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return MachineCollection
     */
    public function index(): MachineCollection
    {
        return new MachineCollection(Machine::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreMachineRequest  $request
     * @return MachineResource
     */
    public function store(StoreMachineRequest $request): MachineResource
    {
        return new MachineResource(Machine::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  Machine $machine
     * @return MachineResource
     */
    public function show(Machine $machine): MachineResource
    {
        return new MachineResource($machine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateMachineRequest  $request
     * @param  Machine  $machine
     * @return MachineResource
     */
    public function update(UpdateMachineRequest $request, Machine $machine): MachineResource
    {
        return new MachineResource(
            UpdateMachineHandler::update($machine, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Machine  $machine
     * @return JsonResponse
     */
    public function destroy(Machine $machine): JsonResponse
    {
        $machine->delete();

        return NoContentResponse::send();
    }
}

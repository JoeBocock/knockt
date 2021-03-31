<?php

namespace App\Http\Controllers;

use App\Common\Fillers\GenericFiller;
use App\Http\Requests\Machine\StoreMachineRequest;
use App\Http\Requests\Machine\UpdateMachineRequest;
use App\Http\Resources\Machine\MachineCollection;
use App\Http\Resources\Machine\MachineResource;
use App\Http\Responses\NoContentResponse;
use App\Models\Machine;
use Illuminate\Http\JsonResponse;

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
     * @param StoreMachineRequest $request
     *
     * @return MachineResource
     */
    public function store(StoreMachineRequest $request): MachineResource
    {
        return new MachineResource(Machine::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param Machine $machine
     *
     * @return MachineResource
     */
    public function show(Machine $machine): MachineResource
    {
        return new MachineResource($machine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMachineRequest $request
     * @param Machine              $machine
     *
     * @return MachineResource
     */
    public function update(UpdateMachineRequest $request, Machine $machine): MachineResource
    {
        return new MachineResource(
            GenericFiller::fill($machine, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Machine $machine
     *
     * @return JsonResponse
     */
    public function destroy(Machine $machine): JsonResponse
    {
        $machine->delete();

        return NoContentResponse::build();
    }
}

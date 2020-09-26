<?php

namespace App\Http\Controllers;

use App\Machine;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new MachineCollection(Machine::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreMachineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMachineRequest $request)
    {
        return new MachineResource(Machine::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Machine $machine)
    {
        return new MachineResource($machine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateMachineRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMachineRequest $request, Machine $machine)
    {
        return new MachineResource(
            UpdateMachineHandler::update($machine, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Machine $machine)
    {
        $machine->delete();

        return NoContentResponse::send();
    }
}

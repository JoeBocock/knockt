<?php

namespace App\Http\Controllers;

use App\Common\Handlers\UpdateMachineHandler;
use App\Exceptions\NotFoundException;
use App\Exceptions\UpdateNotFoundException;
use App\Http\Requests\StoreMachineRequest;
use App\Http\Requests\UpdateMachineRequest;
use App\Http\Resources\Machine\Collections\MachineCollection;
use App\Http\Resources\Machine\Machine as MachineResource;
use App\Machine;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

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
    public function show($id)
    {
        $machine = Machine::find($id);

        if (!$machine) {
            return (new NotFoundException())->respond();
        }

        return new MachineResource($machine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateMachineRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMachineRequest $request, $id)
    {
        $machine = Machine::find($id);

        if (!$machine) {
            return (new UpdateNotFoundException())->respond();
        }

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
    public function destroy($id)
    {
        $machine = Machine::find($id);

        if (!$machine) {
            return (new NotFoundException())->respond();
        }

        $machine->delete();

        return new JsonResponse([], Response::HTTP_NO_CONTENT);
    }
}

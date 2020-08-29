<?php

namespace App\Http\Controllers;

use App\Exceptions\MethodImplementationException;
use App\Exceptions\NotFoundException;
use App\Http\Requests\StoreMachineRequest;
use App\Http\Resources\Machine as MachineResource;
use App\Http\Resources\MachineCollection;
use App\Machine;
use Illuminate\Http\Request;

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
        $machine = (new Machine($request->validated()))->save();

        return new MachineResource($machine);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return (new MethodImplementationException(
            'Method functionality not yet implemented.'
        ))->respond();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Machine::findOrFail($id);
    }
}

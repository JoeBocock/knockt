<?php

namespace App\Http\Controllers;

use App\Common\Handlers\UpdateRowHandler;
use App\Exceptions\NotFoundException;
use App\Exceptions\UpdateNotFoundException;
use App\Http\Requests\IndexRowsRequest;
use App\Http\Requests\StoreRowRequest;
use App\Http\Requests\UpdateRowRequest;
use App\Http\Resources\Row\Collections\RowCollection;
use App\Http\Resources\Row\Row as RowResource;
use App\Row;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexRowsRequest $request)
    {
        return new RowCollection(Row::where('machine_id', $request->machine_id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRowRequest $request)
    {
        return new RowResource(Row::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Row::find($id);

        if (!$row) {
            return (new NotFoundException())->respond();
        }

        return new RowResource($row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRowRequest $request, $id)
    {
        $row = Row::find($id);

        if (!$row) {
            return (new UpdateNotFoundException())->respond();
        }

        return new RowResource(
            UpdateRowHandler::update($row, $request->validated())
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
        $row = Row::find($id);

        if (!$row) {
            return (new NotFoundException())->respond();
        }

        $row->delete();

        return new JsonResponse([], Response::HTTP_NO_CONTENT);
    }
}

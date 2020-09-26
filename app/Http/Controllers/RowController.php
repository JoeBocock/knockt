<?php

namespace App\Http\Controllers;

use App\Row;
use App\Http\Requests\StoreRowRequest;
use App\Http\Requests\IndexRowsRequest;
use App\Http\Requests\UpdateRowRequest;
use App\Common\Handlers\UpdateRowHandler;
use App\Common\Responses\NoContentResponse;
use App\Http\Resources\Row\Row as RowResource;
use App\Http\Resources\Row\Collections\RowCollection;

class RowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\IndexRowsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(IndexRowsRequest $request)
    {
        return new RowCollection(Row::where('machine_id', $request->machine_id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreRowRequest  $request
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
    public function show(Row $row)
    {
        return new RowResource($row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateRowRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRowRequest $request, Row $row)
    {
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
    public function destroy(Row $row)
    {
        $row->delete();

        return NoContentResponse::send();
    }
}

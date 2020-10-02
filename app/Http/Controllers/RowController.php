<?php

namespace App\Http\Controllers;

use App\Row;
use Illuminate\Http\JsonResponse;
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
     * @param  IndexRowsRequest  $request
     * @return RowCollection
     */
    public function index(IndexRowsRequest $request): RowCollection
    {
        return new RowCollection(Row::where('machine_id', $request->machine_id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRowRequest  $request
     * @return RowResource
     */
    public function store(StoreRowRequest $request): RowResource
    {
        return new RowResource(Row::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  Row $row
     * @return RowResource
     */
    public function show(Row $row): RowResource
    {
        return new RowResource($row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRowRequest  $request
     * @param  Row $row
     * @return RowResource
     */
    public function update(UpdateRowRequest $request, Row $row): RowResource
    {
        return new RowResource(
            UpdateRowHandler::update($row, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Row $row
     * @return JsonResponse
     */
    public function destroy(Row $row): JsonResponse
    {
        $row->delete();

        return NoContentResponse::send();
    }
}

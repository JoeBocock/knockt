<?php

namespace App\Http\Controllers;

use App\Common\Fillers\GenericFiller;
use App\Http\Requests\Row\IndexRowsRequest;
use App\Http\Requests\Row\StoreRowRequest;
use App\Http\Requests\Row\UpdateRowRequest;
use App\Http\Resources\Row\RowCollection;
use App\Http\Resources\Row\RowResource;
use App\Http\Responses\NoContentResponse;
use App\Models\Row;
use Illuminate\Http\JsonResponse;

class RowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return RowCollection
     */
    public function index(IndexRowsRequest $request): RowCollection
    {
        return new RowCollection(Row::where('machine_id', $request->machine_id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRowRequest $request
     *
     * @return RowResource
     */
    public function store(StoreRowRequest $request): RowResource
    {
        return new RowResource(Row::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param Row $row
     *
     * @return RowResource
     */
    public function show(Row $row): RowResource
    {
        return new RowResource($row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRowRequest $request
     * @param Row              $row
     *
     * @return RowResource
     */
    public function update(UpdateRowRequest $request, Row $row): RowResource
    {
        return new RowResource(
            GenericFiller::fill($row, $request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Row $row
     *
     * @return JsonResponse
     */
    public function destroy(Row $row): JsonResponse
    {
        $row->delete();

        return NoContentResponse::build();
    }
}

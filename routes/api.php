<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| All routes registered within this file are automatically prefixed with /api
|
*/

/*
|--------------------------------------------------------------------------
| Machine Routes
|--------------------------------------------------------------------------
|
| Used to manage the 'Machine' resource.
|
| [GET] /api/machines                  Lists all of this resource type
| [POST] /api/machines                 Store a new machine
| [GET] /api/machines/{short_name}     Retrieve a specific machine
| [PUT] /api/machines/{short_name}     Update an existing machine
| [DELETE] /api/machines/{short_name}  Remove an existing machine
|
*/
Route::apiResource('machines', 'MachineController');

/*
|--------------------------------------------------------------------------
| Row Routes
|--------------------------------------------------------------------------
|
| Used to manage the 'row' resource.
|
| [GET] /api/rows                  Lists all of this resource type
| [POST] /api/rows                 Store a new row
| [GET] /api/rows/{short_name}     Retrieve a specific row
| [PUT] /api/rows/{short_name}     Update an existing row
| [DELETE] /api/rows/{short_name}  Remove an existing row
|
*/
Route::apiResource('rows', 'RowController');

/*
|--------------------------------------------------------------------------
| Slot Routes
|--------------------------------------------------------------------------
|
| Used to manage the 'slot' resource.
|
| [GET] /api/slots                  Lists all of this resource type
| [POST] /api/slots                 Store a new slot
| [GET] /api/slots/{short_name}     Retrieve a specific slot
| [PUT] /api/slots/{short_name}     Update an existing slot
| [DELETE] /api/slots/{short_name}  Remove an existing slot
|
*/
Route::apiResource('slots', 'SlotController');

/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
|
| Used to manage the 'product' resource.
|
| [GET] /api/products                  Lists all of this resource type
| [POST] /api/products                 Store a new product
| [GET] /api/products/{short_name}     Retrieve a specific product
| [PUT] /api/products/{short_name}     Update an existing product
| [DELETE] /api/products/{short_name}  Remove an existing product
|
*/
Route::apiResource('products', 'ProductController');

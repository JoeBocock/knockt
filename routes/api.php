<?php

use App\Http\Controllers\MachineController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RowController;
use App\Http\Controllers\SlotController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
|--------------------------------------------------------------------------
| Machine Routes
|--------------------------------------------------------------------------
|
| Used to manage the 'Machine' resource.
|
| [GET] /api/machines          Lists all Machines
| [POST] /api/machines         Store a new machine
| [GET] /api/machines/{id}     Retrieve a specific machine
| [PUT] /api/machines/{id}     Update an existing machine
| [DELETE] /api/machines/{id}  Remove an existing machine
|
*/
Route::apiResource('machines', MachineController::class);

/*
|--------------------------------------------------------------------------
| Row Routes
|--------------------------------------------------------------------------
|
| Used to manage the 'row' resource.
|
| [GET] /api/rows          Lists all Rows
| [POST] /api/rows         Store a new row
| [GET] /api/rows/{id}     Retrieve a specific row
| [PUT] /api/rows/{id}     Update an existing row
| [DELETE] /api/rows/{id}  Remove an existing row
|
*/
Route::apiResource('rows', RowController::class);

/*
|--------------------------------------------------------------------------
| Slot Routes
|--------------------------------------------------------------------------
|
| Used to manage the 'slot' resource.
|
| [GET] /api/slots          Lists all of this resource type
| [POST] /api/slots         Store a new slot
| [GET] /api/slots/{id}     Retrieve a specific slot
| [PUT] /api/slots/{id}     Update an existing slot
| [DELETE] /api/slots/{id}  Remove an existing slot
|
| [POST] /api/slots/{slot}/purchase Purchase the product within a slot.
|
*/
Route::apiResource('slots', SlotController::class);
Route::post('/slots/{slot}/purchase', [SlotController::class, 'purchaseProductInSlot'])->name('slots.purchase');

/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
|
| Used to manage the 'product' resource.
|
| [GET] /api/products          Lists all of this resource type
| [POST] /api/products         Store a new product
| [GET] /api/products/{id}     Retrieve a specific product
| [PUT] /api/products/{id}     Update an existing product
| [DELETE] /api/products/{id}  Remove an existing product
|
*/
Route::apiResource('products', ProductController::class);

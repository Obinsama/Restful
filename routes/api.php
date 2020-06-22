<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("transaction","TransactionController@index")->name("index");
Route::post("transaction/create","TransactionController@create")->name("create");
Route::post("transaction/addtoqueue","TransactionController@addToQueue")->name("addtoqueue");
Route::post("transaction/listTransactionByClient","TransactionController@listTransactionByClient")->name("listTransactionByClient");
Route::post("transaction/listAllTransaction","TransactionController@listAllTransaction")->name("listAllTransaction");
Route::post("transaction/checkjson","TransactionController@checkJson")->name("checkjson");
Route::post("transaction/taketransactionid","TransactionController@takeTransactionId")->name("taketransactionid");
Route::post("transaction/state","TransactionController@state")->name("state");

Route::post("transaction/totalincome","TransactionController@totalIncome")->name("totalincome");
Route::post("transaction/totalincomeadmin","TransactionController@totalIncomeAdmin")->name("totalincomeadmin");


Route::post("transaction/totaltransactions","TransactionController@totalTransactions")->name("totaltransactions");
Route::post("transaction/totaltransactionsadmin","TransactionController@totalTransactionsAdmin")->name("totaltransactionsadmin");

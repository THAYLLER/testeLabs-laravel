<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('documento/fiscal','DocFiscalController@index')->middleware('cors');
Route::get('documento/fiscal/{id}', 'DocFiscalController@show')->middleware('cors');
Route::get('documento/fiscal/chave/{chave}', 'DocFiscalController@showKey')->middleware('cors');
Route::get('documento/fiscal/peridoEintervalor/{dataDe}/{dataAte}/{tipo}', 'DocFiscalController@showIntervalDateAndType')->middleware('cors');
Route::get('documento/fiscal/status/{status}', 'DocFiscalController@showStatus')->middleware('cors');
Route::post('documento/fiscal/novo', 'DocFiscalController@create')->middleware('cors');
Route::put('documento/fiscal/atualiza/{id}', 'DocFiscalController@update')->middleware('cors');
Route::delete('documento/fiscal/excluir/{id}', 'DocFiscalController@destroy')->middleware('cors');

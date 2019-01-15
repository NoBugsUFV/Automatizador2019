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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("pesw")->group(function(){ 
    Route::get('/funcionalidades',"ProductController@index"); // View para gerar o PDF
    Route::post('/history/{id}', "PDFController@fromBackup"); // Gera o PDF a partir do Histórico salvo
    Route::post('/pdf', "PDFController@pdfPESw"); // Gera o PDF pelos dados fornecidos
});

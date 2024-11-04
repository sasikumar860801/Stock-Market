<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\finance;
use App\Http\Controllers\XirrController;
use App\Http\Controllers\CronController;
use App\Http\Controllers\ScraperController;




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

Route::get('/test3', function () {
    return view('test3');
});



Route::get('/test',[finance::class,'showPlAmount'])->name('showPlAmount');

Route::get('/home',[finance::class,'index'])->name('index');




Route::get('/search',[finance::class,'search'])->name('search');

Route::get('/fetch-chart/{id}', [finance::class, 'fetchChart'])->name('fetch.chart');

Route::get('/cmp/{id}', [finance::class, 'cmp'])->name('cmp');

Route::post('/exit-stock', [finance::class, 'exitStock'])->name('exitstock');


Route::Post('/home', [finance::class,'store'])->name('store');

Route::get('/get-market-cap', [ScraperController::class, 'getMarketCap']);

Route::get('/filterByMarketCap', [finance::class, 'filterByMarketCap'])->name('filterByMarketCap');

Route::get('/pl_report', [finance::class, 'pl_report'])->name('pl_report');








<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DashboardController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/itemgroup', [ItemsController::class, 'GetItemGroup'])->name('itemgroup');
Route::post('save', [ItemsController::class, 'SavedGroupItems'])->name('save');
Route::get('save', [ItemsController::class, 'SavedGroupItems'])->name('save');

Route::get('/del/{x}', [ItemsController::class, 'Del'])->name('del');
Route::get('/edit/{x}', [ItemsController::class, 'Edit'])->name('edit');
Route::post('/update', [ItemsController::class, 'Update'])->name('update');


Route::get('/items', [ItemsController::class, 'GetItem'])->name('items');
Route::post('sav', [ItemsController::class, 'SavedItems'])->name('sav');
Route::get('sav', [ItemsController::class, 'SavedItems'])->name('sav');

Route::get('/dell/{y}', [ItemsController::class, 'Dell'])->name('dell');
Route::get('/editt/{y}', [ItemsController::class, 'Editt'])->name('editt');
Route::post('/updatee', [ItemsController::class, 'Updatee'])->name('updatee');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -------------------------------------------------------------------------

Route::get('cpanel', function () {
    return view('controlpanel');
})->name('controlpanel');

// Route::get('/cpanel', [ItemsController::class, 'DisplayItem'])->name('controlpanel')->middleware('auth');

Route::get('/del/{x}', [DashboardController::class, 'Del'])->name('del');
Route::get('/edit/{x}', [DashboardController::class, 'Edit'])->name('edit');
Route::post('/update', [DashboardController::class, 'Update'])->name('update');
Route::post('save', [DashboardController::class, 'SavedGroupItems'])->name('save');
Route::get('save', [DashboardController::class, 'SavedGroupItems'])->name('save');


Route::get('/cpanel', [ItemsController::class, 'DisplayItem'])->name('controlpanel');
Route::get('/addgitem', [ItemsController::class, 'Displayadditemsgroup'])->name('addgitem');
Route::get('/logout', [ItemsController::class, 'Logout'])->name('logout');
Route::get('/', [ItemsController::class, 'ShowItemGroup'])->name('welcome');

Route::get('/showproduct/{id}', [ItemsController::class, 'Showproduct'])->name('showproduct');
Route::get('/addtocart/{id}', [ItemsController::class, 'AddtoCart'])->name('addtocart');
Route::get('/checkout', [ItemsController::class, 'Checkout'])->name('checkout')->middleware('auth');

Route::get('/testapi', [ItemsController::class, 'testapi'])->name('testapi');


Auth::routes();



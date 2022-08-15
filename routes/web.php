<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All listings
Route::get('/', [ListingController::class, 'index']);

// Single listings
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/hello', function () {
//     return response('Hello World', 200)
//         ->header('Content-Type', 'text/plain');
// });

// Route::get('/posts/{id}', function ($id) {
//     dd($id);
//     return response('This is Post number:    ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     return $request->name . ' ' . $request->city;
// });

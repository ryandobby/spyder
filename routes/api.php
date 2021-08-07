<?php

use App\Models\Store;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/stores/{store:store_number}', function (Store $store) {
        return $store;
    })->name('api.stores.show');

    Route::post('/stores/state', function (Request $request) {
        $validated = $request->validate([
            'state' => ['required', 'string', 'size:2']
        ]);

        return Store::whereState($validated['state'])->get();
    })->name('api.stores.state');
});

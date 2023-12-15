<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use YellowDigital\LaravelChatgptMockApi\Facades\ChatGPTMockApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::get("/mock-response", function() {
    return ChatGPTMockApi::generate(
        prompt: __("Asian countries and their national food"),
        keys: [
            "id",
            "name",
            "food",
            "food_description",
        ],
        count: 3,
    );
});

<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/list",[BookController::class, "list"]);
Route::get("/detail/{id}",[BookController::class, "detail"]);
Route::post("/create",[BookController::class, "create"]);
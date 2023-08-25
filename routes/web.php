<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;



Route::middleware('tenant')->group(function() {
    Route::get('/', [TestController::class,'index']);
});
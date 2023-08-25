<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::middleware('tenant')->group(function() {
    Route::get('/', function () {
        return json_encode(User::all());
    });
});
<?php

use Nano\Http\Enums\HttpStatusCode;
use Nano\Http\Router\Route;

Route::get('/', function() {
    return response()->json(
        ["message" => "Hello world."],
        HttpStatusCode::OK
    );
});
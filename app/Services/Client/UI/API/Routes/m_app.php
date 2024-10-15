<?php

use App\Services\Client\UI\API\Controllers\MobileApp\ClientsController;
use Illuminate\Support\Facades\Route;

Route::prefix('clients/')
    ->name('clients.')
    ->group(function (){
        Route::get('/', [ClientsController::class, 'index']);
    });

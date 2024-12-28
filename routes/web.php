<?php

use App\Http\Controllers\notficationController;
use Illuminate\Support\Facades\Route;

Route::get('/',notficationController::class)->name('notfiy');



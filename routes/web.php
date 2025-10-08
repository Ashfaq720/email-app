<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailSendingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendEmail',[MailSendingController::class, 'sendEmail']);

// Route::get('/sendEmail', [MailSendingController::class, 'sendEmail']);
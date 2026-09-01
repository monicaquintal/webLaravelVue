<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTesteMail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
//     ->name('home')
//     ->middleware(['auth', 'verified']);

Route::resource('tarefa', TarefaController::class)
    ->middleware(['auth', 'verified']);
    
Route::get('/mensagem-teste', function() {
    // return new MensagemTesteMail();
    Mail::to('cursolaravelvue123@gmail.com')->send(new MensagemTesteMail());
    return 'E-mail enviado com sucesso!';
});
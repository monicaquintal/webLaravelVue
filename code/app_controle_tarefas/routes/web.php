<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTesteMail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tarefa', TarefaController::class);

Route::get('/mensagem-teste', function() {
    return new MensagemTesteMail();
    // Mail::to('monica.zoom@hotmail.com')->send(new MensagemTesteMail());
    // return 'E-mail enviado com sucesso!';
});
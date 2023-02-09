<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleitoresController;
use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\VotacoomtoceController;
use App\Http\Controllers\VotasbotController;
use App\Http\Controllers\VotacaoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('painel', [App\Http\Controllers\HomeController::class, 'index'])->name('painel');

Route::resource('eleitores', EleitoresController::class);

Route::resource('candidatos', CandidatosController::class);

Route::post('eleitoresescolhas', [App\Http\Controllers\EleitoresescolhasController::class, 'index'])->name('eleitoresescolhas');

Route::get('votacoomtoce', [App\Http\Controllers\VotacaoController::class, 'indexCoomtoce'])->name('votacoomtoce');

Route::get('votasbot', [App\Http\Controllers\VotacaoController::class, 'indexSbot'])->name('votasbot');

Route::post('sbotvotossucesso', [App\Http\Controllers\VotacaoController::class, 'post'])->name('votacao.post');

Route::get('sucesso', [App\Http\Controllers\VotacaoController::class, 'sucesso'])->name('votacao.sucesso');
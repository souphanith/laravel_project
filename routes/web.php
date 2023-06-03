<?php

use App\Http\Livewire\Caculator;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Tester;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/counter', function () {
    return view('welcome');
})->name('counter');

Route::get( '/calculator', \App\Http\Livewire\Caculator::class) -> name('calculator');

Route::get('/todo-list', App\Http\Livewire\TodoList::class)->name('todo-list');

Route::get('/tester', App\Http\Livewire\Testerter::class)->name('tester');

Route::get('/souphanith', App\Http\Livewire\Souphanith::class)->name('souphanith');

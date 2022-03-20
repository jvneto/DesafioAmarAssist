<?php

use App\Http\Livewire\Contact\Create as ContactCreate;
use App\Http\Livewire\Contact\Edit as ContactEdit;
use App\Http\Livewire\Contact\Index as ContactIndex;
use App\Http\Livewire\Contact\View as ContactView;
use Illuminate\Support\Facades\Route;


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

Route::middleware(['locales', 'auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('/contact')->name('contact.')->group(function () {
        Route::get('/', ContactIndex::class)->name('index');
        Route::get('/create', ContactCreate::class)->name('create');
        Route::prefix('/{contact_id}')->group(function () {
            Route::get('/view', ContactView::class)->name('view');
            Route::get('/edit', ContactEdit::class)->name('edit');
        });
    });
});

<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NoteController::class, 'dashboard'])->name('dashboard');
Route::get('/notes', [NoteController::class, 'showAllNotes'])->name('showAllNotes');
Route::get('/dashboard', [NoteController::class, 'index'])->name('index');
Route::get('/note', [NoteController::class, 'index'])->name('index');
Route::get('/notes/create', [NoteController::class, 'create'])->name('create');
Route::post('/notes', [NoteController::class, 'store'])->name('store');
Route::get('notes/{note}', [NoteController::class, 'show'])->name('show');
Route::get('notes/{note}/edit', [NoteController::class, 'edit'])->name('edit');
Route::put('notes/{note}', [NoteController::class, 'update'])->name('update');
Route::delete('notes/{note}/destroy', [NoteController::class, 'destroy'])->name('destroy');

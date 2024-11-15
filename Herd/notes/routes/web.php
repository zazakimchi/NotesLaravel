<?php

use App\Models\notesListing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newNotesController;




Route::get('/home', [newNotesController::class, 'index']);


Route::post('/add-notes', [newNotesController::class, 'AddNotes'])->name('AddNotes');
Route::get('/add-notes', [newNotesController::class, 'loadAddNotesForm']);

Route::post('/edit-notes', [newNotesController::class, 'UpdateNotes'])->name('UpdateNotes');
Route::get('/edit-notes/{id}', [newNotesController::class, 'loadEditForm']);

Route::get('/delete/{id}', [newNotesController::class, 'deleteNotes'])->name('deleteNotes');

Route::get('/{id}', [newNotesController::class, 'shows'])->name('show');

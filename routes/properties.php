<?php

use App\Domain\Property\Http\Controllers\PropertyController;

Route::get('properties', [PropertyController::class, 'index'])
    ->name('properties.index');
Route::get('properties/create', [PropertyController::class, 'create'])->name('properties.create')
    ->middleware(['auth:web', 'verified', 'permission:create property']);
Route::post('properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('properties/{property}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
Route::put('properties/{property}', [PropertyController::class, 'update'])->name('properties.update');
Route::delete('properties/{property}', [PropertyController::class, 'destroy'])->name('properties.destroy');

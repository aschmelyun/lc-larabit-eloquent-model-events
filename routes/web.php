<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

Route::get('/', [IssueController::class, 'index'])->name('issues.index');
Route::get('/new', [IssueController::class, 'create'])->name('issues.create');
Route::post('/new', [IssueController::class, 'store'])->name('issues.store');
Route::get('/issue/{issue}', [IssueController::class, 'edit'])->name('issues.edit');
Route::post('/issue/{issue}', [IssueController::class, 'update'])->name('issues.update');
Route::delete('/issue/{issue}', [IssueController::class, 'destroy'])->name('issues.destroy');
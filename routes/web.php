<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('page.home');

Route::get('/portfolio', [PageController::class, 'portfolio'])->name('page.portfolio');
Route::get('/about', [PageController::class, 'about'])->name('page.about');
Route::get('/contact', [PageController::class, 'contact'])->name('page.contact');
Route::post('/contact', [PageController::class, 'submitContactForm'])->name('contact.submit');


Route::get('/index', [ProjectController::class, 'index'])->name('project.index');
Route::get('/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('/show/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::delete('/destroy/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');


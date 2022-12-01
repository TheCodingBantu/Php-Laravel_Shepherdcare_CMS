<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;


Route::middleware('auth')->group(function () {

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');

    Route::get('/activity/{name}', [ActivityController::class, 'show'])->name('activity');
    Route::get('/activity/details/{id}', [ActivityController::class, 'activitydetails'])->name('activity-details');
    Route::post('/comment', [ActivityController::class, 'postcomment']);
    
    
    Route::get('/addactivity', [ActivityController::class, 'index'])->name('addactivity');
    Route::post('/addactivity', [ActivityController::class, 'store']);

    Route::get('/members', [MemberController::class, 'index'])->name('members');
    
    
    Route::get('/notifications', function () {
        return view('notifications');
    })->name('notifications');
    
    Route::get('/profile/{id}', [MemberController::class, 'profile'])->name('profile');
    Route::get('/addmember', [MemberController::class, 'addmember'])->name('addmember');
    Route::post('/addmember', [MemberController::class, 'store']);

    Route::get('/search', [ActivityController::class, 'search'])->name('search');

    

});

require __DIR__.'/auth.php';

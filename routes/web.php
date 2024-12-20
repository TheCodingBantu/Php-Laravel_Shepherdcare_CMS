<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;

Route::get('/', [function(){
    return redirect('dashboard');
}]);


Route::middleware('auth')->group(function () {

//    user side
    
    // admin side
    Route::get('/dashboard', [ActivityController::class, 'dashboard'])->name('dashboard');
    Route::get('/activity/{name}', [ActivityController::class, 'show'])->name('activity');
    Route::post('/activity/{name}', [ActivityController::class, 'search'])->name('search');
    Route::get('/activity/details/{id}', [ActivityController::class, 'activitydetails'])->name('activity-details');
    Route::post('/comment', [ActivityController::class, 'postcomment']);
    
    
    Route::get('/addactivity', [ActivityController::class, 'index'])->name('addactivity');
    Route::post('/addactivity', [ActivityController::class, 'store']);
    Route::get('/admin/members', [MemberController::class, 'index'])->name('members');
  
    
    Route::get('/notifications', function () {
        return view('notifications');
    })->name('notifications');
    
    Route::get('/profile/{id}', [MemberController::class, 'profile'])->name('profile');
    Route::get('/addmember', [MemberController::class, 'addmember'])->name('addmember');
    Route::post('/updatemember', [MemberController::class, 'updatemember']);
    Route::post('/addmember', [MemberController::class, 'store']);

    // Route::get('/search', [ActivityController::class, 'search'])->name('search');


});

require __DIR__.'/auth.php';

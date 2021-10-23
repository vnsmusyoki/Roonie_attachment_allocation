<?php

use App\Http\Controllers\admin\AdminCalendarController;
use App\Http\Controllers\admin\ContentCOntroller;
use App\Http\Controllers\admin\StudentsController;
use App\Http\Controllers\clerk\FinanceController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\student\StudentAccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('theme.index');
// });
Route::get('/', [PagesController::class, 'index']);
Route::get('/job-list', [PagesController::class, 'jobList'])->name('job-list');
Route::get('/job-single-page', [PagesController::class, 'jobSinglePage'])->name('job-single-page');
Route::get('/employer-list', [PagesController::class, 'employers'])->name('employer-list');
Route::get('/employer-single-pange', [PagesController::class, 'employerSinglepage'])->name('employer-single-pange');
Route::get('/employer-dashboard', [PagesController::class, 'employerDashboard'])->name('employer-dashboard');

//candidates
Route::get('/candidate-list', [PagesController::class, 'candidates'])->name('candidate-list');
Route::get('/candidate-single-pange', [PagesController::class, 'candidateSinglepage'])->name('candidate-single-pange');
Route::get('/candidate-dashboard', [PagesController::class, 'candidateDashboard'])->name('candidate-dashboard');

Route::get('/logoutchecked', function (Request $request) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('/login')->with('passwordreset', 'Congrats! Your account is now set.You can now login');
    $request->session()->flush();
    Auth::logout();
});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', [ContentCOntroller::class, 'index'])->name('admin'); 
// Route::prefix('admin')->group(function () {
   
// });




// STUDENT ACCESS LINKS
Route::get('student/dashboard', [StudentAccountController::class, 'index'])->name('student');

Route::prefix('student')->group(function () {
    Route::get('feestatement', [StudentAccountController::class, 'feestatement']);
    Route::get('account-password', [StudentAccountController::class, 'accountpassword']);
});


// CLERK LINKS
Route::get('finance/dashboard', [FinanceController::class, 'index'])->name('clerk');

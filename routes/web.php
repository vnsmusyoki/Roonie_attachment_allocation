<?php

use App\Http\Controllers\admin\AdminCalendarController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\admin\ContentCOntroller;
use App\Http\Controllers\admin\StudentsController;
use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\clerk\FinanceController;
use App\Http\Controllers\CreateAccountsController;
use App\Http\Controllers\employer\EmployerAccountController;
use App\Http\Controllers\employer\JobController;
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
Route::get('/job-single-page/{id}', [PagesController::class, 'jobSinglePage'])->name('job-single-page');
Route::get('/employer-list', [PagesController::class, 'employers'])->name('employer-list');
Route::get('/jobs-applied', [PagesController::class, 'JobsApplied'])->name('jobs-applied');
Route::get('/employer-single-pange', [PagesController::class, 'employerSinglepage'])->name('employer-single-pange');
Route::middleware('auth')->group(function () {
    Route::get('application-form',[CandidateController::class, 'apply'] )->name('application-form');
    Route::get('short-listed',[CandidateController::class, 'shortList'] )->name('short-listed');
    Route::post('application',[CandidateController::class, 'storeApplication'])->name('store-application');
    Route::get('/pdf/{id}', [EmployerAccountController::class, 'createPDF'])->name('application_pdf');
    //Download school letter
    Route::get('/school-pdf/{id}', [EmployerAccountController::class, 'viewSchoolLetter'])->name('view_school_letter');
    Route::get('/view-pdf/{id}', [EmployerAccountController::class, 'viewPdf'])->name('view_pdf');
});



Route::prefix('employer')->group(function(){
    Route::get('dashboard', [EmployerAccountController::class, 'employerDashboard'])->name('employer');
    Route::get('applicants', [EmployerAccountController::class, 'applicants'])->name('applicants');
    Route::get('edit-profile', [EmployerAccountController::class, 'editprofile']);
    Route::post('upload_company_profile', [EmployerAccountController::class, 'storeCompanyProfile']);
    Route::get('shortlist/{id}', [EmployerAccountController::class, 'shortlist'])->name('shortlist');




    Route::get('upload-attachment-details', [EmployerAccountController::class, 'uploadopportunity']);
    Route::post('upload_attachment_slots', [EmployerAccountController::class, 'uploadattachmentslots']);
    Route::get('manage-attachment-slots', [EmployerAccountController::class, 'allattachmentslots']);
    Route::get('edit-attachment-slot/{id}', [EmployerAccountController::class, 'editattachmentslot']);
    Route::patch('update_attachment_slots/{id}', [EmployerAccountController::class, 'updateattachmentslots']);
    Route::get('close-attachment-applications/{id}', [EmployerAccountController::class, 'updateopportunityslotstatus']);
    Route::get('manage-closed-attachment-slots', [EmployerAccountController::class, 'closedattachmentslots']);
    Route::get('delete-attachment-applications/{id}', [EmployerAccountController::class, 'deleteattachmentslots']);



    Route::get('reject/{id}', [EmployerAccountController::class, 'reject'])->name('reject');
    Route::get('closed/{id}', [EmployerAccountController::class, 'closed'])->name('closed');
    Route::get('activate/{id}', [EmployerAccountController::class, 'activate'])->name('activate');
    // Route::get('view-resume/{id}', [EmployerAccountController::class, 'viewApplications']);
    Route::get('view-campany-profile', [EmployerAccountController::class, 'viewCompanyProfile'])->name('view_company_profile');
    Route::get('campany-profile', [EmployerAccountController::class, 'companyProfile'])->name('company-profile');
    Route::get('post-job', [EmployerAccountController::class, 'postJob'])->name('post-job');
    Route::post('campany-profile', [EmployerAccountController::class, 'storeCompanyProfile'])->name('store-company-profile');
    Route::resource('manage', JobController::class);
});


//candidates
Route::get('/candidate-list', [PagesController::class, 'candidates'])->name('candidate-list');
Route::get('/candidate-single-pange', [PagesController::class, 'candidateSinglepage'])->name('candidate-single-pange');
Route::get('/candidate-dashboard', [PagesController::class, 'candidateDashboard'])->name('candidate-dashboard')->middleware('auth');


Route::get('register/employer', [CreateAccountsController::class, 'employer'])->name('register.employer');
Route::get('register/candidate', [CreateAccountsController::class, 'student'])->name('register.candidate');
Route::post('register/employer', [CreateAccountsController::class, 'registerEmployer'])->name('register.save-employer');
Route::post('register/student', [CreateAccountsController::class, 'registerCandidate'])->name('register.save-candidate');


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
Route::resource('category', CategoryController::class);



// STUDENT ACCESS LINKS
Route::get('student/dashboard', [StudentAccountController::class, 'index'])->name('student');

Route::prefix('student')->group(function () {
    Route::get('feestatement', [StudentAccountController::class, 'feestatement']);
    Route::get('account-password', [StudentAccountController::class, 'accountpassword']);
    Route::get('edit-profile', [StudentAccountController::class, 'editprofile']);
    Route::post('edit_profile', [StudentAccountController::class, 'updateprofile']);
    Route::get('all-available-attachments', [StudentAccountController::class, 'allattachments']);
    Route::get('all-attachments/apply/{id}', [StudentAccountController::class, 'applyattachment']);
    Route::get('apply_attachment', [StudentAccountController::class, 'uploadattachmentdetails']);
});


Route::prefix('admin')->group(function () {
    Route::get('all-courses', [ContentCOntroller::class, 'allcourses']);
    Route::post('store-new-course', [ContentCOntroller::class, 'uploadcourses']);
    Route::get('all-courses/edit/{id}', [ContentCOntroller::class, 'editcourse']);
    Route::patch('update-new-course/{id}', [ContentCOntroller::class, 'updatecourse']);
    Route::delete('all-courses/delete/{id}', [ContentCOntroller::class, 'deletecourse']);
});

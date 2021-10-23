<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('theme.index');
    }
    public function jobList()
    {
        return view('theme.job_list');
    }
    public function jobSinglePage()
    {
        return view('theme.job_single_page');
    }

    public function employers(){
        return view('theme.employer.index');
    }
    public function employerSinglepage()
    {
        return view('theme.employer.single_page');
    }
    public function employerDashboard()
    {
        return view('theme.employer.dashboard');
    }
    public function candidates()
    {
        return view('theme.candidate.index');
    }
    public function candidateSinglepage()
    {
        return view('theme.candidate.candidate_single_page');
    }
    public function candidateDashboard()
    {
        return view('theme.candidate.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Session;

class PagesController extends Controller
{
    public function index(){
        $jobs = Job::all()->take(6);
        // $posts = Job::where('status','active')->count();
        $categories=Category::all()->take(9);
        return view('theme.index', compact('jobs','categories'));
    }
    public function jobList()
    {
        $jobs = Job::where('status','active')->paginate(36);
        return view('theme.job_list',compact('jobs'));
    }
    public function jobSinglePage($id)
    {

        $job = Job::find($id);
        // Session::put('job_id', $job);
        session()->put('job_id', $id);
        return view('theme.job_single_page',compact('job'));
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
    public function JobsApplied(){
        $applied = Application::with(['jobs'])->get();
        $s = new Collection();
        
        // $applied->each(function($d){
        //     dump($d->jobs);
        // });
        // dd('stop');

        return view('theme.candidate.jobs_applied',compact('applied'));
    }
}

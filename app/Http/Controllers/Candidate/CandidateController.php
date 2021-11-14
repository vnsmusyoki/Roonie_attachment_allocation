<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;

class CandidateController extends Controller
{

    public function apply(){
        return view('theme.apply');
    }

    public function storeApplication(Request $request){

        $rule = [
            'resume'=>['bail', 'required', 'file', 'mimes:doc,pdf,docx'],
            'attachment_letter'=> ['bail', 'required', 'file', 'mimes:doc,pdf,docx'],
        ];

        $request->validate($rule);

        $apply = new Application;

        $accepted_files = ['resume', 'attachment_letter'];

        foreach($accepted_files as $accepted_file){
            if($request->hasFile($accepted_file)) {
                $fileNameWithExt = $request->{$accepted_file}->getClientOriginalName();
                $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $Extension = $request->{$accepted_file}->getClientOriginalExtension();
                $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
                $path = $request->{$accepted_file}->storeAs('uploads/images/', $filenameToStore);
                $apply ->{$accepted_file} = 'uploads/images/'.$filenameToStore;
            }
        }

        $apply->user_id = auth()->user()->id;
        $apply->job_id = session()->get('job_id');

        // dd($request);
        $apply->save();

        //delete session
        session()->forget('job_id');
        return redirect()->route('candidate-dashboard')->with('company_created', 'Application Uploaded successfully');

    }

    public function shortList(){
        return view('theme.candidate.shortlist');
    }
}

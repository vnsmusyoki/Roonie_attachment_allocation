<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ContentCOntroller extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin', 'verified']);
    }

    public function index()
    {
        return view('admin.dashboard');
    }
    public function allcourses()
    {
        $courses = Course::all();
        return view('admin.courses.all-courses', compact('courses'));
    }
    public function uploadcourses(Request $request)
    {
        $this->validate($request, [
            'courses' => 'required|unique:courses'
        ]);

        $course = new Course;
        $course->courses = $request->input('courses');
        $course->save();
        Toastr::success('New course uploaded', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-courses');
    }
    public function editcourse($id)
    {
        $course = Course::findOrfail($id);
        return view('admin.courses.edit-course', compact('course'));
    }
    public function updatecourse(Request $request, $id)
    {
        $this->validate($request, [
            'courses' => 'required|unique:courses'
        ]);

        $course = Course::findOrFail($id);
        $course->courses = $request->input('courses');
        $course->save();
        Toastr::success('New course updated successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-courses');
    }
    public function deletecourse($id){
        $course = Course::findOrFail($id);
        $course->delete();
        Toastr::error('Course has been deleted.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-courses');
    }
}

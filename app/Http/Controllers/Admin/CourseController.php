<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $page_title = 'Courses';
        $courses = course::all();
        return view('admin.course',compact(['page_title','courses']));
    }
}

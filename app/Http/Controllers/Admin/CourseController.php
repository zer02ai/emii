<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isNull;

class CourseController extends Controller
{
    public function index($type=null)
    {
        if($type == 'main'){
            $page_title = 'Main Courses';
            $courses = course::where('parent_id',0)->where('deleted',0)->get(); 
        }else{
            $page_title = 'Sub Courses';
            $courses = course::with(['parent_category'])->where('deleted',0)->where('parent_id','!=',0)->get();
        }
        return view('admin.course',compact(['page_title','courses','type']));
    }

    public function add_update_course($type=null,$id=null)
    {
        if($type == 'main'){
            $page_title = 'Add/Edit Main Course';
            $p_courses = '';
        }else{
            $page_title = 'Add/Edit Sub Course';
            $p_courses = course::where('parent_id',0)->where('deleted',0)->get();
        }
     
        if (!is_null($id)) {
            $course = course::find($id);
            return view('admin.add_course', compact(['course','p_courses','page_title','type']));
        } else {
            return view('admin.add_course',compact(['p_courses','page_title','type']));
        }
    }

    public function save_course(Request $request ,$type,$id = null)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required',
        ]);
        $data = $request->all();
        if(!is_null($id)){
            $course = course::find($id);
        }else{
            $course = new course();
        }
        $course->name = ucwords($data['name']);
        $course->slug = Str::slug($data['name']);
        $course->type = $data['type'];
        $course->parent_id = $data['parent_id'];
        if($course->save()){
            return redirect(route('admin.course',['type'=>$type]));
        }else{
            return back()->withInput();
        }
    }

    public function status($type,$id)
    {
        if (!is_null($id)) {
            $course = course::find($id);
            if($course){
                if($course->parent_id != 0){
                    $parent_course = course::find($course->parent_id);
                    if($parent_course->status == 0){
                        return back()->with('error','Main Course is Inactive. Can\'t change status.');
                    }
                }
                if($course->status == 0){
                    $course->status = 1;
                    if($course->parent_id == 0){
                        course::where('parent_id', $course->id)->update(['status' => 1]);
                    }
                }else{
                    $course->status = 0;
                    if($course->parent_id == 0){
                        course::where('parent_id', $course->id)->update(['status' => 0]);
                    }
                }
                if ($course->save()) {
                    return redirect()->route('admin.course',['type'=>$type])->with('success', 'Course status changed successfully.');
                } else {
                    return redirect()->route('admin.course',['type'=>$type])->with('error', 'Failed! Please try again.');
                }
            }else{
                return redirect()->route('admin.course',['type'=>$type])->with('error', "Course doesn't exist.");
            }
        } else {
            return redirect()->route('admin.course',['type'=>$type])->with('error', "Invaild Id.");
        }
        
    }

    public function delete($type,$id)
    {
        if (!is_null($id)) {
            $course = course::find($id);
            if ($course) {
                if ($course->delete()) {
                    // make sub course deleted
                    if($course->parent_id == 0){
                        course::where('parent_id', $course->id)->delete();
                    }
                    return redirect()->route('admin.course',['type'=>$type])->with('success', 'Course deleted successfully.');
                }
            } else {
                return redirect()->route('admin.course',['type'=>$type])->with('error', "Course doesn't exist.");
            }
        } else {
            return redirect()->route('admin.course',['type'=>$type])->with('error', "Invalid id.");
        }
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list()
    {
        $courses=Course::with('category')->paginate(3);
        
        $categories=Category::all();
         return view('backend.layouts.course.list',compact('courses','categories'));
      }
    public function store(Request $request)
 {
    Course::create([
        'name'=>$request->course_name,
        'categories_id'=>$request->category_id,
        'code'=>$request->course_code
    ]);

    return redirect()->back();
 
}
}


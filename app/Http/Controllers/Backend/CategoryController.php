<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
      $categories=Category::all();
       return view('backend.layouts.category.list',compact('categories'));
    }

    public function create()
    {
       return view('backend.layouts.category.create');
    }
   
    public function store(Request $request)
    {
      Category::create([
         'name'=>$request->category_name,
         'details'=>$request->description
     ]);

     return redirect()->route('category.list');
 }
    }



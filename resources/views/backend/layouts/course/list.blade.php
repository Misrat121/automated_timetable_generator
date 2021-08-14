@extends('backend.master')
@section('content')
<h1>Course List</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-alarm"></i>
    Create Course
</button>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category ID</th>
        <th scope="col">Course Code</th>
        
    </tr>
    </thead>
   
    <tbody>
    {{--course--}}
{{--@dd($courses)--}}
@foreach($courses as $course)
    <tr>
        <th scope="row">{{$course->id}}</th>
        <td>{{$course->name}}</td>
        <td>{{$course->categories_id}}</td>
        <td>{{$course->code}}</td>
        <td>
            <a href="" class="btn btn-primary">view</a>
        </td>
    </tr>
@endforeach
    </tbody>
</table>
{{$courses->links('pagination::bootstrap-4')}}




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

    
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('course.store')}}" method="POST"> 
        @csrf
        <div class="form-group">
                            <label for="course_name">Select Category</label>
                            <select class="form-control" name="category_id" id="">
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            </div>
                <form>
                    <div class="form-group">
                        <label for="course_name">Name</label>
                        <input name="course_name" type="text" class="form-control" id="course_name"  placeholder="Enter Course name">
                      
                    </div>
                    <div class="form-group">
                        <label for="course_code">Course Code</label>
                        <input name="course_code" type="text" class="form-control" id="course_code" placeholder="Enter Course Code">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
           
        </div>
    </div>
</div>
@endsection

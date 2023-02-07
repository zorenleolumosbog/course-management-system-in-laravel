@extends('dashboard.layouts.maintemplate')

@section('title', 'Course Setup')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Course Setup</h1>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                {{-- --------- Check in Flash Message -------- --}}
                        @include('dashboard.flashMessage.message')
                {{-- ---------------- X -------------------- --}}


                <form action="{{route('course.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label><b>Course Code</b></label>
                        <input type="text" name="course_code" class="form-control @error('course_code') is-invalid @enderror" value="{{old('course_code')}}" placeholder="Type Department Code">
                        @error('course_code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>

                    <div class="form-group">
                        <label><b>Course Name</b></label>
                        <input type="text" name="course_name" class="form-control @error('course_name') is-invalid @enderror" value="{{old('course_name')}}" placeholder="Type Department Name">
                        @error('course_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-group">
                        <label><b>Course Credit</b></label>
                        <input type="text" name="credit" class="form-control @error('credit') is-invalid @enderror" value="{{old('credit')}}" placeholder="Course Credit">
                        @error('credit')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-group">
                        <label><b>Course Description</b></label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"  id="" rows="3">{{old('description')}}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-group">
                        <label><b>Department</b></label>
                        <select name="department_id" class="form-control">
                                <option value="">--- Select Department ---</option>
                            @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_name}}</option>
                            @endforeach
                          </select>
                        @error('department_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>

                   
                    <div class="form-group">
                        <label><b>Semester</b></label>
                        <select name="semester_id" class="form-control">
                                <option value="">--- Select Semester ---</option>
                            @foreach ($semesters as $semester)
                                <option value="{{$semester->id}}">{{$semester->semester_name}}</option>
                            @endforeach
                          </select>
                        @error('semester_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Save</button>
                    <br><br>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table class="table">
                    <thead class="thead-dark">
                      <tr class="text-center">
                        <th scope="col">SL</th>
                        <th scope="col">Course Code</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Course Credit</th>
                        <th scope="col">Department</th>
                        <th scope="col" colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-secondary">
                        @foreach ($courses as $key => $item)
                            <tr class="text-center">
                                <td scope="row">{{$key+1}}</th>
                                <td class="text-dark">{{$item->course_code}}</td>
                                <td class="text-dark">{{$item->course_name}}</td>
                                <td class="text-dark">{{$item->credit}}</td>
                                <td class="text-dark">{{$item->department_code}}</td>
                                <td>
                                    <a href="{{route('course.edit',$item->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('course.delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure to delete ?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="col-md-1"></div>
        </div>  
    </div>
@endsection


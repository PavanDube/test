@extends('main')
@section('content')
<div class="row">
<h3>Student List</h3>
<a class="btn btn-primary" href="{{route('student.create')}}">Create</a>
</div>
<br>
@if (Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
@endif
<form class="{{route('student.search')}}" class="form-inline my-2 my-lg-0" method="GET">
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>   
  <br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $key=>$student)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$student['name']}}</td>
            <td>{{$student['email']}}</td>
            <td>
                <a class="btn btn-outline-primary" href="{{route('student.edit',$student->id)}}">Edit</a>
                <a class="btn btn-outline-danger" href="{{route('student.delete',$student->id)}}">Delete</a>
        </td>
          </tr>    
        @endforeach
      
     
    </tbody>
  </table>
    {{ $students->links() }}
</div>
@endsection
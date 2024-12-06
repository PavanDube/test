@extends('main')
@section('content')
<h3>Create Student</h3>
<form action="{{route('student.update',$stud->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" value="{{$stud->name}}">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" value="{{$stud->email}}">
      </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
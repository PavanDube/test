@extends('main')
@section('content')
<h3>Create Student</h3>
<form action="{{route('student.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" value="{{old("name")}}">
      @error('name')
          <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
        @error('email')
        <span class="text-danger">{{$message}}</span>
    @enderror
    
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
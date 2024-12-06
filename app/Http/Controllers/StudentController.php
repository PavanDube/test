<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::paginate(2);
        return view('students.index',compact('students'));
    }

    public function create(){
        return view('students.create');
    }

    public function store(StudentRequest $request){
        $stud = new Student();
        $stud->name = $request->name;
        $stud->email = $request->email;
        $stud->save();
        return redirect()->route('student.index')->with('success','Student Created Successfully !!');
    }

    public function edit($id){
        $stud = Student::find($id);
        return view('students.edit',compact('stud'));
    }

    public function update(StudentRequest $request,$id){
        $stud = Student::find($id);
        $stud->name = $request->name;
        $stud->email = $request->email;
        $stud->save();
        return redirect()->route('student.index')->with('success','Student Updated Successfully !!');
    }

    public function delete($id){
        $stud = Student::find($id);
        $stud->delete();
        return redirect()->route('student.index')->with('success','Student Deleted Successfully !!');
    }

    public function search(Request $request){
        dd("hello");
    }
}

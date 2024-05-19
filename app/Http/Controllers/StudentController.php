<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    private $columns = ['studentName', 'studentAge'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return view('students', compact('students'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('StudentForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // $student = new Student();
            // $student->studentName = $request->studentName;
            // $student->studentAge =$request->studentAge;
            // $student->save();
            student::create($request->only($this->columns));
            // return 'Data inserted Successfully :))';
            return redirect('students');
            // return view('formResult');  
          }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('showStudent', compact('student'));      }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('editStudent', compact('student'));  
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'studentName'=>'required|min:5|max:100',
            'studentAge'=>'required|max:2',
        ]);
        Student::where('id', $id)->update($request->only($this->columns));
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Student::where('id', $id)->delete();
        return redirect('students');   
    }

    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Student::where('id', $id)->forceDelete();
        return redirect('trashStudent'); 
    }

    public function trash()
    {
       $trashed = Student::onlyTrashed()->get();
        return view('trashStudent', compact('trashed'));
    }

    public function restore(string $id)
    {
        Student::where('id', $id)->restore();
        return redirect('students');  
    }
}

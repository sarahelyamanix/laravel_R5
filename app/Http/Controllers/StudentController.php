<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //
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
            $student = new Student();
            $student->studentName = $request->studentName;
            $student->studentAge =$request->studentAge;
            $student->save();
            return 'Data inserted Successfully :))';
            // return view('formResult');  
          }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
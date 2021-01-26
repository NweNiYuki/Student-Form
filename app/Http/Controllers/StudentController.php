<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uni = Student::all();
        return view('index', compact('uni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student();
        // $student->name = $request->name;
        // $student->rollno = $request->rollno;
        // $student->subject = $request->subject;
        // $student->idno = $request->idno;
        // $student->email = $request->email;
        // $student->address = $request->address;
        // $student->phone = $request->phone;
        // $student->rimage = $request->image;

        $validatedData = request()->validate([
            'name' => 'required',
            'rollno' => 'required',
            'subject' => 'required',
            'idno' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'rimage' => 'required|image',

        ]);

        //image upload

        $imageName =time().".".request()->rimage->getClientOriginalExtension();
        request()->rimage->move(public_path('images'), $imageName);


        $student = Student::create($validatedData + ['cover'=> $imageName]);
        return redirect('uni');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Township;
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
        $student = Student::all();
        return view('index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $township = Township::all();
        return view('create', compact('township'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $student = Student::where ('name', 'LIKE', '%'. $search .'%')->orWhere ('rollno', 'LIKE', '%' . $search . '%')->get();

        if (count ( $student ) > 0) 
        return view ( 'index', compact('student') );
        
        else 
            return redirect('student')->with('message', 'No record found. Try to search again!');
        
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
            'initial' => 'required',
            'township_id' => 'required',
            'nation' => 'required',
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
        session()->flash('message', 'Studend has created successfully');
        return redirect('student');
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
        dd($students->townshipstate->shortname);
        return view('show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
       $township = Township::all();
        return view('edit', compact('student', 'township'));
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
        $students = Student::find($id);
        $validatedData = request()->validate([
            'name' => 'required',
            'rollno' => 'required',
            'subject' => 'required',
            'initial' => 'required',
            'township_id' => 'required',
            'nation' => 'required',
            'idno' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            
        ]);

        //image update
        if(request()->rimage) {
            $imageName =time().".".request()->rimage->getClientOriginalExtension();
            request()->rimage->move(public_path('images'), $imageName);
        }

        if(!empty($imageName)) {
            $students->update($validatedData + ['cover'=>$imageName]);
        }else {
            $students->update($validatedData);
        }

        return redirect('student')->with('message', 'Student has updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('student')->with('message', 'Student has delected successfully');
    }
}

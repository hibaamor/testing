<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_tabel = Student::all()->toArray();
        return view('student.index', compact('student_tabel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Time1'    =>  'nullable',
            'Time2'     =>  'nullable',
            'Time3'    =>  'nullable',
            'Time4'     =>  'nullable',
            'Time5'     =>  'nullable',
            'Time6'     =>  'nullable',
            'Time7'     =>  'nullable'

        ]);
        $student_tabel = new Student([
            'Time1'    =>  $request->get('Time1'),
            'Time2'     =>  $request->get('Time2'),
            'Time3'    =>  $request->get('Time3'),
            'Time4'     =>  $request->get('Time4'),
            'Time5'    =>  $request->get('Time5'),
            'Time6'    =>  $request->get('Time6'),
            'Time7'    =>  $request->get('Time7')
        ]);
         $student_tabel->save();
        return redirect()->route('student.index')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student_tabel = Student::find($id);
        return view('student.edit', compact('student_tabel', 'id'));
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
        $this->validate($request, [
            'Time1'    =>  'required',
            'Time2'     =>  'required',
            'Time3'    =>  'required',
            'Time4'     =>  'required',
            'Time5'     =>  'required',
            'Time6'     =>  'required',
            'Time7'     =>  'required'
        ]);
        $student_tabel = Student::find($id);
        $student_tabel->Time1 = $request->get('Time1');
        $student_tabel->Time2 = $request->get('Time2');
        $student_tabel->Time3 = $request->get('Time3');
        $student_tabel->Time4 = $request->get('Time4');
        $student_tabel->Time4 = $request->get('Time5');
        $student_tabel->Time4 = $request->get('Time6');
        $student_tabel->Time4 = $request->get('Time7');
        $student_tabel->save();
        return redirect()->route('student.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student_tabel = Student::find($id);
        $student_tabel->delete();
        return redirect()->route('student.index')->with('success', 'Data Deleted');
    }
}

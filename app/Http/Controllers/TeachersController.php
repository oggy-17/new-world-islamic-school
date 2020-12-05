<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Teacher;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachersData = Teacher::all();

        return view('teacher.index', compact('teachersData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'regno' => 'required|max:500',
            'name' => 'required|max:100',
            'guardianname' => 'required|max:100',
            'subject' => 'required|max:100',
            'doj' => 'required',
            'email' => 'required',
            'cellno' => 'required|max:10000',
            'address' => 'required|max:500',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'salary' => 'required|max:500',
        ]);
        $show = Teacher::create($validatedData);
   
        return redirect('/faculty')->with('success', 'Teacher is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teachersData = Teacher::where('id',$id)->first();



        return view('teacher.show', compact('teachersData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacherData = Teacher::findOrFail($id);

        return view('teacher.edit', compact('teacherData'));
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
        $validatedData = $request->validate([
            'regno' => 'required|max:500',
            'name' => 'required|max:100',
            'guardianname' => 'required|max:100',
            'subject' => 'required|max:100',
            'doj' => 'required',
            'email' => 'required',
            'cellno' => 'required|max:1000',
            'address' => 'required|max:500',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'salary' => 'required|max:500',
        ]);
        Teacher::whereId($id)->update($validatedData);

        return redirect('/faculty')->with('success', 'Teacher Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacherData = Teacher::findOrFail($id);
        $teacherData->delete();

        return redirect('/faculty')->with('success', 'Teacher Data is successfully deleted');
    }
}

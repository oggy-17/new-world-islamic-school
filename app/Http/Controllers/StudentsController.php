<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

use App\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentDetails = Student::all();

        return view('student.index', compact('studentDetails'));
    }

    public function showClassMont()
    {


        $users = DB::select('select * from students where class="Montessori"');

        return view('student.Mont',['users'=>$users]);
    }
    public function showClassSrMont()
    {


        $users = DB::select('select * from students where class="Senior Montessori"');
        return view('student.SrMont',['users'=>$users]);
    }
    public function showClassAdvMont()
    {


        $users = DB::select('select * from students where class="Advance Montessori"');
        return view('student.AdvMont',['users'=>$users]);
    }



    public function showClassOne()
    {


        $users = DB::select('select * from students where class=1');
        return view('student.one',['users'=>$users]);
    }

    public function showClassTwo()
    {


        $users = DB::select('select * from students where class=2');
        return view('student.two',['users'=>$users]);
    }

    public function showClassThree()
    {


        $users = DB::select('select * from students where class=3');
        return view('student.three',['users'=>$users]);
    }

    public function showClassFour()
    {


        $users = DB::select('select * from students where class=4');
        return view('student.four',['users'=>$users]);
    }

    public function showClassFive()
    {


        $users = DB::select('select * from students where class=5');
        return view('student.five',['users'=>$users]);
    }

    public function showClassSix()
    {


        $users = DB::select('select * from students where class=6');
        return view('student.six',['users'=>$users]);
    }

    public function showClassSeven()
    {


        $users = DB::select('select * from students where class=7');
        return view('student.seven',['users'=>$users]);
    }

    public function showClassEight()
    {


        $users = DB::select('select * from students where class=8');
        return view('student.eight',['users'=>$users]);
    }

    public function showClassNine()
    {


        $users = DB::select('select * from students where class=9');
        return view('student.nine',['users'=>$users]);
    }

    public function showClassTen()
    {


        $users = DB::select('select * from students where class=10');
        return view('student.ten',['users'=>$users]);
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
        $validatedData = $request->validate([
            'regno' => 'required|max:500',
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'fathername' => 'required|max:200',
            'fatheroccupation' => 'required|max:300',
            'mothername' => 'required|max:200',
            'class' => 'required|max:50',
            'section' => 'required|max:20',
            'dob' => 'required',
            'email' => 'required',
            'cellno' => 'required|max:1000',
            'address' => 'required|max:500',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
        ]);
        $show = Student::create($validatedData);
   
        return redirect('/sms')->with('success', 'Student information is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentDetails = Student::where('id',$id)->first();



        return view('student.show', compact('studentDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editDetails = Student::findOrFail($id);

        return view('student.edit', compact('editDetails'));
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
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'fathername' => 'required|max:200',
            'fatheroccupation' => 'required|max:300',
            'mothername' => 'required|max:200',
            'class' => 'required|max:50',
            'section' => 'required|max:20',
            'dob' => 'required',
            'email' => 'required',
            'cellno' => 'required|max:1000',
            'address' => 'required|max:500',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
        ]);
        Student::whereId($id)->update($validatedData);

        return redirect('/sms')->with('success', 'Student Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editDetails = Student::findOrFail($id);
        $editDetails->delete();

        return redirect('/sms')->with('success', 'Student Data is successfully deleted');
    }
}

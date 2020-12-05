<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;
use App\Attendance;



class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendanceDetails = Attendance::all();

        return view('attendance.index', compact('attendanceDetails'));
    }

    public function showTeachers()
    {


        $users = DB::select('select * from teachers');
        return view('attendance.list',['users'=>$users]);
    }

    public function monthlyatd(){
        return view ('attendance.monthly');


    }



    public function monthOne()
    {


        $users = DB::select('select * from attendances where month="January"');


        return view('attendance.one',['users'=>$users]);
    }

    public function monthTwo()
    {


        $users = DB::select('select * from attendances where month="February"');
        return view('attendance.two',['users'=>$users]);
    }

    public function monthThree()
    {


        $users = DB::select('select * from attendances where month="March"');
        return view('attendance.three',['users'=>$users]);
    }

    public function monthFour()
    {


        $users = DB::select('select * from attendances where month="April"');
        return view('attendance.four',['users'=>$users]);
    }

    public function monthFive()
    {


        $users = DB::select('select * from attendances where month="May"');
        return view('attendance.five',['users'=>$users]);
    }

    public function monthSix()
    {


        $users = DB::select('select * from attendances where month="June"');
        return view('attendance.six',['users'=>$users]);
    }

    public function monthSeven()
    {


        $users = DB::select('select * from attendances where month="July"');
        return view('attendance.seven',['users'=>$users]);
    }

    public function monthEight()
    {


        $users = DB::select('select * from attendances where month="August"');
        return view('attendance.eight',['users'=>$users]);
    }

    public function monthNine()
    {


        $users = DB::select('select * from attendances where month="September"');
        return view('attendance.nine',['users'=>$users]);
    }

    public function monthTen()
    {


        $users = DB::select('select * from attendances where month="October"');
        return view('attendance.ten',['users'=>$users]);
    }

    public function monthEleven()
    {


        $users = DB::select('select * from attendances where month="November"');
        return view('attendance.eleven',['users'=>$users]);
    }

    public function monthTwelve()
    {


        $users = DB::select('select * from attendances where month="December"');
        return view('attendance.twelve',['users'=>$users]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendance.create');
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
            'subject' => 'required|max:100',
            'month' => 'required|max:100',
            'date' => 'required',
            'status' => 'required',

        ]);
        $show = Attendance::create($validatedData);

        return redirect('/attendance')->with('success', 'Fee Form is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attendanceDetails = Attendance::where('id',$id)->first();



        return view('attendance.show', compact('attendanceDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editAttendanceDetails = Attendance::findOrFail($id);

        return view('attendance.edit', compact('editAttendanceDetails'));
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
            'subject' => 'required|max:100',
            'month' => 'required|max:100',
            'date' => 'required',
            'status' => 'required',
        ]);
        Attendance::whereId($id)->update($validatedData);

        return redirect('/attendance')->with('success', 'Student Attendance Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendanceDetails = Attendance::findOrFail($id);
        $attendanceDetails->delete();

        return redirect('/attendance')->with('success', 'Student Attendance Data is successfully deleted');
    }
}

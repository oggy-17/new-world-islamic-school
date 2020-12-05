<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;
use App\Fee;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $feesDetails = Fee::all();

         return view('fee.index', compact('feesDetails'));
    }

    public function showClassMont()
    {


        $users = DB::select('select * from fees where class="Montessori"');

        return view('fee.Mont',['users'=>$users]);
    }
    public function showClassSrMont()
    {


        $users = DB::select('select * from fees where class="Senior Montessori"');
        return view('fee.SrMont',['users'=>$users]);
    }
    public function showClassAdvMont()
    {


        $users = DB::select('select * from fees where class="Advance Montessori"');
        return view('fee.AdvMont',['users'=>$users]);
    }

    public function showClassOne()
    {


        $users = DB::select('select * from fees where class=1');
        return view('fee.one',['users'=>$users]);
    }

    public function showClassTwo()
    {


        $users = DB::select('select * from fees where class=2');
        return view('fee.two',['users'=>$users]);
    }

    public function showClassThree()
    {


        $users = DB::select('select * from fees where class=3');
        return view('fee.three',['users'=>$users]);
    }

    public function showClassFour()
    {


        $users = DB::select('select * from fees where class=4');
        return view('fee.four',['users'=>$users]);
    }

    public function showClassFive()
    {


        $users = DB::select('select * from fees where class=5');
        return view('fee.five',['users'=>$users]);
    }

    public function showClassSix()
    {


        $users = DB::select('select * from fees where class=6');
        return view('fee.six',['users'=>$users]);
    }

    public function showClassSeven()
    {


        $users = DB::select('select * from fees where class=7');
        return view('fee.seven',['users'=>$users]);
    }

    public function showClassEight()
    {


        $users = DB::select('select * from fees where class=8');
        return view('fee.eight',['users'=>$users]);
    }

    public function showClassNine()
    {


        $users = DB::select('select * from fees where class=9');
        return view('fee.nine',['users'=>$users]);
    }

    public function showClassTen()
    {


        $users = DB::select('select * from fees where class=10');
        return view('fee.ten',['users'=>$users]);
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fee.create');
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
            'class' => 'required|max:50',
            'section' => 'required|max:20',
            'month' => 'required',
            'year' => 'required',
            'tutionfee' => 'required',
            'annualfee' => 'required',
            'totalfee' => 'required',
            'feepaid' => 'required',
            'balancefee' => 'required',
            'feestatus' => 'required',
        ]);
        $show = Fee::create($validatedData);

        return redirect('/fees')->with('success', 'Fee Form is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $feesDetails = Fee::where('id',$id)->first();



        return view('fee.show2', compact('feesDetails'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editFeeDetails = Fee::findOrFail($id);

        return view('fee.edit', compact('editFeeDetails'));
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
            'class' => 'required|max:50',
            'section' => 'required|max:20',
            'month' => 'required',
            'year' => 'required',
            'tutionfee' => 'required',
            'annualfee' => 'required',
            'totalfee' => 'required',
            'feepaid' => 'required',
            'balancefee' => 'required',
            'feestatus' => 'required',
        ]);
        Fee::whereId($id)->update($validatedData);

        return redirect('/fees')->with('success', 'Fee Form Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editFeeDetails = Fee::findOrFail($id);
        $editFeeDetails->delete();

        return redirect('/fees')->with('success', 'Fee Form Data is successfully deleted');
    }


}

<?php

namespace App\Http\Controllers;

use App\MalariaSurvey;
use Illuminate\Http\Request;

class MalariaSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malariaview = MalariaSurvey::all();
        return view('malariatemplate.index',compact('malariaview'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('malariatemplate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
            'patientname' => 'required|string|max:85',
            'dob' => 'required|date|before:tomorrow',
            'gender' => 'required',
            'pregnant' => 'required',
            'positive' => 'required',
            'hospital' => 'required|max:100',
            'rec_no' => 'required|between:1,2000',
            'parasitemia' => 'required|max:100'
        ]);
        //
        $malariacase = new MalariaSurvey;
        $malariacase->patient_name = $request->patientname;
        $malariacase->dob = $request->dob;
        $malariacase->gender = $request->gender;
        $malariacase->ispregnant = $request->pregnant;
        $malariacase->plabtest = $request->positive;
        $malariacase->hopitalname = $request->hospital;
        $malariacase->hostpitalrecno = $request->rec_no;
        $malariacase->parastemia = $request->parasitemia;
        $malariacase->save();
        return back()->with('status', 'Thank you');
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

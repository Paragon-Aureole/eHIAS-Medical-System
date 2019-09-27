<?php

namespace App\Http\Controllers;
use App\Http\Requests\PatientRequest;

use App\Patient;
use Illuminate\Http\Request;
use Validator;
use Auth;
use PDF;

class PatientController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = Patient::all();
        return view('patient.index', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $user = Auth::user();
        $create = $user->patient()->create([
            'patient_lastname' => $input['patient_lastname'],
            'patient_middlename' => $input['patient_middlename'],
            'patient_firstname' => $input['patient_firstname'],
            'patient_gender' => $input['patient_gender'],
            'patient_civstat' => $input['patient_civstat'],
            'patient_birthday' => $input['patient_birthday'],
            'patient_age' => $input['patient_age'],
            'patient_barangay' => $input['patient_barangay'],
            'patient_city' => $input['patient_city'],
            'patient_province' => $input['patient_province'],
            'patient_height' => $input['patient_height'],
            'patient_weight' => $input['patient_weight'],
            'patient_bp' => $input['patient_bp'],
            'patient_contact' => $input['patient_contact'],
        ]);



        return redirect()->back()->with("flash_message", 'Patient Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    public function print($id){
        
        $pdf = PDF::loadView('patient.print')->setOrientation('landscape')->setOption('margin-bottom', 0);
        return $pdf->inline('PatientInfo.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($patient)
    {
        $patientData = Patient::findorFail($patient);
        return view('patient.edit', compact('patient', 'patientData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}

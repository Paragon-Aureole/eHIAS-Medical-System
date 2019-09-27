<?php

namespace App\Http\Controllers;

use App\MedicalRecord;
use App\Sickness;
use Auth;
use App\Referral;
use App\Prescription;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
     

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


        if($input['drug_id'] == NULL or $input['drug_qty'] == null){
            $add_prescription = Prescription::create([
                'case_id' => $input['case_id'],
                'quantity' => 0,
                'user_id' => Auth::user()->id,
            ]); 
        }else{
            $add_prescription = Prescription::create([
                'case_id' => $input['case_id'],
                'drug_id' => $input['drug_id'],
                'quantity' => $input['drug_qty'],
                'user_id' => Auth::user()->id,
            ]); 
        }




        if ($input['refferal_input'] == NULL or $input['refferal_contact'] == null ) {


          $add_referrals = Referral::create([
              'case_id' => $input['case_id'],
              'description' => "n/a",
              'referralDoctorName' => "n/a",
              'referralDoctorContactNumber' => "n/a",
              'user_id' => Auth::user()->id,
          ]);


        }else{

          $add_referrals = Referral::create([
            'case_id' => $input['case_id'],
              'description' => $input['refferal_input'],
              'referralDoctorName' => $input['refferal_doctor'],
              'referralDoctorContactNumber' => $input['refferal_contact'],
              'user_id' => Auth::user()->id,
          ]);

      }

        $patient = MedicalRecord::create([
            'patient_id' => $input['patient_id'],
            'case_id' => $input['case_id'],
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->back()->with('flash_message', 'successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalRecord $medicalRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalRecord $medicalRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalRecord $medicalRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalRecord $medicalRecord)
    {
        //
    }
}

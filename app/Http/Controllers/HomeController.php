<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
      $q1 = "SELECT sicknesses.sicknessName, Count(sicknesses.sicknessName) AS sicknessCount, medical_records.case_id, patients.patient_barangay FROM sicknesses INNER JOIN medical_records ON medical_records.case_id = sicknesses.id INNER JOIN patients ON patients.id = medical_records.patient_id GROUP BY patients.patient_barangay ORDER BY sicknessCount DESC LIMIT 5";

      $q2 = "SELECT patients.patient_barangay, patients.patient_age, Count(patients.patient_age) AS Age FROM patients WHERE patients.patient_age BETWEEN 15 AND 30 GROUP BY patients.patient_barangay, patients.patient_age";

      $q3= "SELECT sicknesses.sicknessName, Count(sicknesses.sicknessName) AS sicknessCount, medical_records.case_id, patients.patient_barangay FROM sicknesses INNER JOIN medical_records ON medical_records.case_id = sicknesses.id INNER JOIN patients ON patients.id = medical_records.patient_id GROUP BY sicknesses.sicknessName ORDER BY sicknessCount DESC LIMIT 5";

      $q4="SELECT drugs.drugName, prescriptions.quantity FROM prescriptions INNER JOIN drugs ON prescriptions.drug_id = drugs.id GROUP BY drugs.drugName ORDER BY prescriptions.quantity DESC LIMIT 5";

      $graphData = [];

      $queryList = [$q1, $q2, $q3, $q4];
      foreach ($queryList as $key => $value) {
        $graphData[$key] = $queryParser = DB::select($value);
      }
      dd($graphData);
      // return dd($graphData);
        return view('home' , compact('graphData'));
    }


}

<?php

namespace App\Http\Controllers;

use App\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $drugList = Drug::All();
      // return dd($drug);
      return view('/drug.index', compact('drugList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/drug.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      request()->validate([
      'drugName' => 'required',
      'drugDescription' => 'required'
    ]);
      drug::create(request(['drugName', 'drugDescription']));

      return redirect('/drug');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function show(Drug $drug)
    {
        return view('/drug.show', compact('drug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function edit(Drug $drug)
    {
        return view('/drug/edit', compact('drug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drug $drug)
    {
      request()->validate([
      'drugName' => 'required',
      'drugDescription' => 'required'
    ]);
        $drug->update(request(['drugName', 'drugDescription']));
        return redirect('/drug');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drug $drug)
    {
      $drug->delete();
      return redirect('/drug');
    }
}

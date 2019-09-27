<?php

namespace App\Http\Controllers;

use App\Sickness;
use Illuminate\Http\Request;

class SicknessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sickness = Sickness::All();
        // return dd($sickness);
        return view('/sickness.index', compact('sickness'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/sickness.create');
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
        'sicknessName' => 'required',
        'sicknessDescription' => 'required'
      ]);
        Sickness::create(request(['sicknessName', 'sicknessDescription']));

        return redirect('/sickness');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function show(Sickness $sickness)
    {
        // return dd($sickness);
        return view('/sickness.show', compact('sickness'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function edit(Sickness $sickness)
    {
        return view('/sickness/edit', compact('sickness'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sickness $sickness)
    {
      request()->validate([
      'sicknessName' => 'required',
      'sicknessDescription' => 'required'
    ]);
        $sickness->update(request(['sicknessName', 'sicknessDescription']));
        return redirect('/sickness');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sickness $sickness)
    {
        $sickness->delete();
        return redirect('/sickness');
    }
}

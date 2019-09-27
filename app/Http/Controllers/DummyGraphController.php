<?php

namespace App\Http\Controllers;

use App\dummy_graph;
use Illuminate\Http\Request;

class DummyGraphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dummy_graph = dummy_graph::All();

      $subset = $dummy_graph->map(function ($object) {
        return $object->only(['id', 'x']);
      });

        // return dd($subset);
        return view('dummy_graph', compact('subset'));
    }

}

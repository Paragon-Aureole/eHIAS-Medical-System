@extends('layouts.app')

@section('content')
<h1>Registered Drugs</h1>
@foreach($drugList as $drug)
<a href="drug/{{$drug->id}}">
  <li>{{ $drug->drugName }}</li>
</a>
@endforeach
@endsection

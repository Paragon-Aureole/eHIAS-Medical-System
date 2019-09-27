@extends('layouts.app')

@section('content')
<h1>{{ $drug->drugName }}</h1>

<h3>
  <a href="/drug/{{$drug->id}}/edit">Edit</a>
</h3>
@endsection

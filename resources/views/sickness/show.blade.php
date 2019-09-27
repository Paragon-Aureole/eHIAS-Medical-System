@extends('layouts.app')

@section('content')
<h1>{{ $sickness->sicknessName }}</h1>

<h3>
  <a href="/sickness/{{$sickness->id}}/edit">Edit</a>
</h3>
@endsection

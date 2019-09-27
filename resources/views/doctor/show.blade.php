@extends('layouts.app')

@section('content')
<h1>{{ $doctor->DoctorName }}</h1>

<h3>
  <a href="/doctor/{{$doctor->id}}/edit">Edit</a>
</h3>
@endsection

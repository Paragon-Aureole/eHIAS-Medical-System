@extends('layouts.app')

@section('content')
<h1>Encountered Maladies</h1>
@foreach($sickness as $sickness)
<a href="sickness/{{$sickness->id}}">
  <li>{{ $sickness->sicknessName }}</li>
</a>
@endforeach
@endsection

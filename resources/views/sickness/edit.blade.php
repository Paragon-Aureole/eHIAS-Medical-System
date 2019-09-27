@extends('layouts.app')

@section('content')
<form method="post" action="/sickness/{{$sickness->id}}">
  {{ method_field('PATCH') }}
  {{ csrf_field() }}
  <label>Edit Sickness Details</label>
  <!-- DoctorName -->
  <div>
  Sickness Name<input type="text" name="sicknessName" value="{{ $sickness->sicknessName }}" required>
  </div>
  <!-- PRC_License -->
  <div>
  Sickness Description<input type="text" name="sicknessDescription" value="{{ $sickness->sicknessDescription }}" required>
  </div>
  <!-- Update Button -->
  <div>
    <button type="submit">Update Sickness Details</button>
  </div>
</form>

<form method="post" action="/sickness/{{$sickness->id}}">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}

  <div>
    <button type="submit">Delete Sickness</button>
  </div>

</form>
<div>
  @foreach($errors->All() as $error)
  <p>{{$error}}</p>
  @endforeach
</div>
@endsection

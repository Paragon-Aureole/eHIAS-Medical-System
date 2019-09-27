@extends('layouts.app')

@section('content')
<form method="post" action="/drug/{{$drug->id}}">
  {{ method_field('PATCH') }}
  {{ csrf_field() }}
  <label>Edit Drug Details</label>
  <!-- DoctorName -->
  <div>
  Drug Name<input type="text" name="drugName" value="{{ $drug->drugName }}" required>
  </div>
  <!-- PRC_License -->
  <div>
  Drug Description<input type="text" name="drugDescription" value="{{ $drug->drugDescription }}" required>
  </div>
  <!-- Update Button -->
  <div>
    <button type="submit">Update Drug Details</button>
  </div>
</form>

<form method="post" action="/drug/{{$drug->id}}">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}

  <div>
    <button type="submit">Delete Drug</button>
  </div>

</form>
<div>
  @foreach($errors->All() as $error)
  <p>{{$error}}</p>
  @endforeach
</div>
@endsection

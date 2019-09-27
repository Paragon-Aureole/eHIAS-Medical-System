@extends('layouts.app')

@section('content')
    <form method="post" action="/drug">
      {{ csrf_field() }}
      <label>Drug Registration</label>
      <!-- DoctorName -->
      <div>
        Drug Name<input type="text" name="drugName" required>
      </div>
      <!-- PRC_License -->
      <div>
        Drug Description<input type="text" name="drugDescription" required>
      </div>
      <!-- Register Button -->
      <div>
        <button type="submit">Register Drug</button>
      </div>
    </form>
    <div>
      @foreach($errors as $error)
      <p>{{$error}}</p>
      @endforeach
    </div>
@endsection

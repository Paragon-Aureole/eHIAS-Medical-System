@extends('layouts.app')

@section('content')
    <form method="post" action="/sickness">
      {{ csrf_field() }}
      <label>Sickness Registration</label>
      <!-- DoctorName -->
      <div>
        Sickness Name<input type="text" name="sicknessName" required>
      </div>
      <!-- PRC_License -->
      <div>
        Sickness Description<input type="text" name="sicknessDescription" required>
      </div>
      <!-- Register Button -->
      <div>
        <button type="submit">Register Sickness</button>
      </div>
    </form>
    <div>
      @foreach($errors as $error)
      <p>{{$error}}</p>
      @endforeach
    </div>
@endsection

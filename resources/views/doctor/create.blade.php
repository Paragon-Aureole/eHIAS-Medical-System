@extends('layouts.app')

@section('content')
    <form method="post" action="/doctor">
      {{ csrf_field() }}
      <label>Doctor Registration</label>
      <!-- DoctorName -->
      <div>
        Doctor Name<input type="text" name="DoctorName" required>
      </div>
      <!-- PRC_License -->
      <div>
        Doctor PRC License<input type="text" name="PRC_License" required>
      </div>
      <!-- Register Button -->
      <div>
        <button type="submit">Register User</button>
      </div>
    </form>
    <div>
      @foreach($errors as $error)
      <p>{{$error}}</p>
      @endforeach
    </div>
@endsection

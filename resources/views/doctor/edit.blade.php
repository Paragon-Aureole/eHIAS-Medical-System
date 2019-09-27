@extends('layouts.app')

@section('content')

<div class="col-md-6">
  <br/>
            <div class="card ">
                <div class="card-header">{{ __('Edit Doctor Details') }}</div>

                <div class="card-body">
                    <div class="container">
                    <form method="post" action="/doctor/{{$doctor->id}}">
                      {{ method_field('PATCH') }}
                      {{ csrf_field() }}


                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <label for="recipient-name" class="form-control-label" style="color: green;">Doctor's Name</label>
                                      <input type="text" class="form-control" id="doctorname" value="{{ $doctor->DoctorName }}">
                                    </div>

                              </div>
                            </div>


                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <label for="recipient-name" class="form-control-label" style="color: green;">Doctor's Position</label>
                                      <input type="text" class="form-control" id="recipient-name" value="{{ $doctor->doctorPosition }}">
                                    </div>

                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <label for="recipient-name" class="form-control-label" style="color: green;">PRC License</label>
                                      <input type="text" class="form-control" id="recipient-name" value="{{ $doctor->PRC_License }}">
                                    </div>

                              </div>
                            </div>

                             <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <label for="recipient-name" class="form-control-label" style="color: green;">Address</label>
                                      <input type="text" class="form-control" id="recipient-name" value="{{ $doctor->doctorAddress }}">
                                    </div>

                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <!-- <select class="form-control" name="user_typr" required>
                                      <option value="">---Select----</option>
                                      <option value="1">Admin</option>
                                      <option value="2">Doctor</option>
                                      <option value="3">Clerk</option>
                                      </select> -->
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Contact Number</label>
                                      <input type="text" class="form-control" id="recipient-name" value="{{ $doctor->contactNumber }}">
                                    </div>
                                    </div>

                              </div>
                            </div>
                            <br/>




                            <button type="submit" class="btn btn-success float-right" style="margin-left:5px;">Update</button>
                            <button type="button" class="btn btn-danger float-right" >Cancel</button>


                          </form>
                        </div>

                </div>

            </div>
        </div>
 <br/>
<div>
  @foreach($errors->All() as $error)
  <p>{{$error}}</p>
  @endforeach
</div>
@endsection

@extends('layouts.app')

@section('content')

<div class="col-md-4">
  <br/>
            <div class="card">
                <div class="card-header">{{ __('Edit Doctor Details') }}</div>

                <div class="card-body">
                    <div class="container">
                    <form method="post" action="/doctor/{{$doctor->id}}>


                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" id="doctorname" value="{{ $doctor->DoctorName }}">
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Employee's Name</label>
                                    </div>

                              </div>
                            </div>


                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" id="recipient-name">
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Username</label>
                                    </div>

                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" id="recipient-name">
                                      <label for="recipient-name" class="form-control-label" style="color: green;">PRC Password</label>
                                    </div>

                              </div>
                            </div>

                             <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" id="recipient-name">
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Confirm Password</label>
                                    </div>

                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" id="recipient-name">
                                      <label for="recipient-name" class="form-control-label" style="color: green;">User Level</label>
                                    </div>

                              </div>
                            </div>



                            <button type="button" class="btn btn-success ">Update</button>
                            <button type="button" class="btn btn-danger ">Cancel</button>


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

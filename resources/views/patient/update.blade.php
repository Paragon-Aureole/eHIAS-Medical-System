@extends('layouts.app')

@section('content')

<div class="col-md-4">
  <br/>
            <div class="card">
                <div class="card-header">{{ __('Edit Doctor Details') }}</div>

                <div class="card-body">
                    <div class="container">
                    <form method="post" action="/doctor/{{$doctor->id}}>


                            <form action="route('')" method="POST">
                  @csrf
                    <div class="container">

                      <div class="row">
                        <h6 class="modal-title" id="exampleModa">Personal Information</h6>

                    </div>
                    <hr/>
                    <div class="row">
                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <input type="text" class="form-control" id="recipient-name">
                              <label for="recipient-name" class="form-control-label" style="color: green;">Lastname</label>
                            </div>

                      </div>

                       <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <input type="text" class="form-control" id="recipient-name">
                              <label for="recipient-name" class="form-control-label" style="color: green;">Firstname</label>
                            </div>

                      </div>

                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <input type="text" class="form-control" id="recipient-name">
                              <label for="recipient-name" class="form-control-label" style="color: green;">Middlename</label>
                            </div>

                      </div>

                    </div>


                    <div class="row">
                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                               <select class="form-control" name="itemType" >
                              <option value="">---Select----</option>
                              <option value="">Male</option>
                              <option value="">Female</option>

                            </select>
                              <label for="recipient-name" class="form-control-label" style="color: green;">Gender</label>
                            </div>

                      </div>

                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <input type="date" class="form-control" id="recipient-name">
                              <label for="recipient-name" class="form-control-label" style="color: green;">Birthdate</label>
                            </div>

                      </div>

                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <input type="text" class="form-control" id="recipient-name">
                              <label for="recipient-name" class="form-control-label" style="color: green;">Age</label>
                            </div>

                      </div>

                    </div>

                    <div class="row">
                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <select class="form-control" name="itemType" >
                              <option value="">---Select----</option>
                              <option value="">Ilocanos Sur</option>
                              <option value="">Barangay 4</option>

                            </select>
                              <label for="recipient-name" class="form-control-label" style="color: green;">Barangay</label>
                            </div>

                      </div>

                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <select class="form-control" name="itemType" >
                              <option value="">---Select----</option>
                              <option value="">San Ferndando</option>
                              <option value="">Bacnotan</option>

                            </select>
                              <label for="recipient-name" class="form-control-label" style="color: green;">City/ Municipality</label>
                            </div>

                      </div>

                       <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <select class="form-control" name="itemType" >
                              <option value="">---Select----</option>
                              <option value="">La Union</option>
                              <option value="">Pangasinan</option>

                            </select>
                              <label for="recipient-name" class="form-control-label" style="color: green;">Province</label>
                            </div>

                      </div>




                    </div>

                    <div class="row">

                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <select class="form-control" name="itemType" >
                              <option value="">---Select----</option>
                              <option value="">Single</option>
                              <option value="">Married</option>
                              <option value="">Widdowed</option>

                            </select>
                              <label for="recipient-name" class="form-control-label" style="color: green;"> Status</label>
                            </div>

                      </div>

                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                             <input type="text" class="form-control" id="recipient-name" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                              <label for="recipient-name" class="form-control-label" style="color: green;">Contact Number</label>
                            </div>

                      </div>



                    </div>
                    <br/>

                    <div class="container">

                      <div class="row">
                        <h6 class="modal-title" id="exampleModa">Vital Signs</h6>

                    </div>
                    <hr/>

                    <div class="row">

                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <input type="text" class="form-control" id="recipient-name" placeholder="in" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                              <label for="recipient-name" class="form-control-label" style="color: green;">Height</label>
                            </div>

                      </div>

                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <input type="text" class="form-control" id="recipient-name" placeholder="lbs" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                              <label for="recipient-name" class="form-control-label" style="color: green;">Weight</label>
                            </div>

                      </div>

                      <div class="col-sm-4  ">
                            <div class="form-group-sm">

                              <input type="text" class="form-control" id="recipient-name">
                              <label for="recipient-name" class="form-control-label" style="color: green;">Blood Pressure</label>
                            </div>

                      </div>



                    </div>

                    </div>
                    <!-- container -->

                  </form>



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

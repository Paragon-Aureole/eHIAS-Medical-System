@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Add Doctor') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label class="small">Doctor's Name</label>
                            <input type="text" class="form-control form-control-sm{{ $errors->has('doctor_name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('doctor_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                            <div class="form-group">
                                  <label class="small">Doctor's Position</label>
                                  <input type="text" class="form-control form-control-sm{{ $errors->has('doctor_position') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                                  @if ($errors->has('doctor_position'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('doctor_position') }}</strong>
                                      </span>
                                  @endif
                              </div>
                        <div class="form-group">
                            <label class="small">PRC License</label>
                            <input type="text" class="form-control form-control-sm{{ $errors->has('prc_lic') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                            @if ($errors->has('prc_lic'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('prc_lic') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                        <label class="small">Address</label>
                        <input type="text" class="form-control form-control-sm" name="username" value="" required autofocus>

                    </div>

                    <div class="form-group">
                        <label class="small">Contact Number</label>
                        <input type="text" class="form-control form-control-sm" name="username" value="" required autofocus>

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-6">
                            <button type="submit" class="btn btn-success float-right">
                                {{ __('Add') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{ __('List of Doctors') }}</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="doctorlist">
                    <thead >
                      @php $doctors = App\Doctor::all() @endphp
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>PRC License</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($doctors as $doctor)
                      <tr>
                        <td>{{$doctor->id}}</td>
                        <td>{{$doctor->DoctorName}}</td>
                        <td>{{$doctor->PRC_License}}</td>
                        <td>CSFLU</td>
                        <td>{{$doctor->contactNumber}}</td>
                          <td style = "font-size: 13px;"> <a href={{ "/doctor/" . $doctor->id . "/edit"}}> <i title="Edit" class="fa fa-edit" style="font-size: 22px; color: green; cursor: pointer;"></i> </a> <!-- Trigger the modal with a button -->
                                             </td>

                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br/>


        <br/>



@endsection


@section('script')

<!-- DATA TABLE SCRIPTS -->
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.css" />
        <script>
            $(document).ready(function () {
                $('#doctorlist').dataTable();
            });
    </script>


@endsection

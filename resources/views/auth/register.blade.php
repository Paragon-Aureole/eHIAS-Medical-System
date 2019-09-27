@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Add User') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label class="small">Employee's Name</label>
                            <input type="text" class="form-control form-control-sm{{ $errors->has('emply') ? ' is-invalid' : '' }}" name="emply" value="{{ old('emply') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('emply') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="small">{{ __('Username') }}</label>
                            <input type="text" class="form-control form-control-sm{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="small">{{ __('Password') }}</label>
                            <input type="password" class="form-control form-control-sm{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="small">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <label  class="small">{{ __('User Type') }}</label>
                             <select class="form-control" name="user_typr" required>
                                      <option value="">---Select----</option>
                                      <option value="1">Admin</option>
                                      <option value="2">Doctor</option>
                                      <option value="3">Clerk</option>
                            </select>
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
            <div class="card-header">{{ __('Registered Users') }}</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="doctorlist">
                    <thead >
                      @php $users = App\User::all() @endphp
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>User Type</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->employee_name}}</td>
                        <td>{{$user->username}}</td>
                        <td>D/A/C</td>
                          <td style = "font-size: 13px;"><i data-toggle="modal" data-target="#edituser" title="Edit" class="fa fa-edit" style="font-size: 22px; color: green; cursor: pointer;"></i> <!-- Trigger the modal with a button -->
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

        <!-- /. MODAL  -->


                  <div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby=" exampleModalLabel" aria-hidden="true" style="height: 100%;">
                    <div class="modal-dialog " role="document">
                      <div class="modal-content" >
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>

                        </div>
                        <div class="modal-body "  >
                          <form action="route('')" method="POST">

                            <div class="container">


                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" id="recipient-name">
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

                                      <input type="Password" class="form-control" id="recipient-name">
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Password</label>
                                    </div>

                              </div>
                            </div>

                             <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <input type="Password" class="form-control" id="recipient-name">
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Confirm Password</label>
                                    </div>

                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-12  ">
                                    <div class="form-group-sm">

                                      <select class="form-control" name="user_typr" required>
                                      <option value="">---Select----</option>
                                      <option value="">Admin</option>
                                      <option value="">Doctor</option>
                                      <option value="">Clerk</option>
                                         </select>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">User Type</label>
                                    </div>

                              </div>
                            </div>



                          </form>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- /. MODAL  -->
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

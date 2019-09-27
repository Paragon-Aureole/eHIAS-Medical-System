@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
  
            <img  style="display: block;margin-left: auto;margin-right: auto; width: 15%;"  src="{{asset('shards/images/sfclogo.png')}}">
            <a style="margin-left: 190px; font-size: 17px;" >e-Hospital Information and Analytical System</a>

            <div class="card w-50 p-3 center" style="display: block;margin-left: auto;margin-right: auto; ">
            
                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="simple-login-container">
    <h5>Login Form</h5>
    <div class="row">
        <div class="col-md-12 form-group">
            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus placeholder="Username">
            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input id="password" type="password" placeholder="Enter Your Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-block btn-primary btn-login" style="margin-right: 80px;">
             {{ __('Login') }}
             </button>
        </div>
    </div>
</div>


                        

                       

                        

                        

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

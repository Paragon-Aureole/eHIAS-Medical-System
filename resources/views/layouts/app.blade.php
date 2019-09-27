<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>e-HIAS</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ICT Work Management System</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('shards/images/sfclogo.png')}}">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('shards/styles/shards-dashboards.1.1.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('shards/styles/extras.1.1.0.min.css')}}">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">


    <div class="container-fluid">

      <div class="row">
        @guest
        @else
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="{{route('home')}}" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{asset('shards/images/sfclogo.png')}}" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">e-HIAS</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                  <i class="fas fa-tachometer-alt"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'patient.index') active @endif" href="{{route('patient.index')}}">
                  <i class="fas fa-address-card"></i>
                  <span>Patient Management</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'doctor.index') active @endif" href="{{route('doctor.index')}}">
                  <i class="fas fa-user-md"></i>
                  <span>Doctor Management</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'register') active @endif" href="{{route('register')}}">
                  <i class="material-icons">person</i>
                  <span>User Management</span>
                </a>
              </li>



            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->

        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <h5 class="mt-3">e-Healthcare Information and Analytical System</h5>
                  </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" style="width: 40PX; height: 40PX;" src="{{asset('img/user-solid.svg')}}"alt="User Avatar">
                    <span class="d-none d-md-inline-block">{{Auth::user()->employee_name}}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile-lite.html">
                      <i class="material-icons">&#xE7FD;</i> Profile</a>
                    <a class="dropdown-item text-danger"  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      <i class="material-icons text-danger">&#xE879;</i>  {{ __('Logout') }} </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          @endguest
          <!-- / .main-navbar -->
              @if ($message = Session::get('flash_message'))
    <div class="alert alert-success alert-dismissible fade show w-25" role="alert">
      {{ $message }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
          <div class="main-content-container container-fluid px-4">




            @yield('content')

          </div>
          @guest
          @else
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">

            <span class="copyright ml-auto my-auto mr-2">Copyright © 2019
              <a href="" rel="nofollow">Hackathon2019 - Team SLC</a>
            </span>
          </footer>
          @endguest
        </main>

      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="{{asset('shards/scripts/extras.1.1.0.min.js')}}"></script>
    <script src="{{asset('shards/scripts/shards-dashboards.1.1.0.min.js')}}"></script>
    <script src="{{asset('shards/scripts/app/app-blog-overview.1.1.0.js')}}"></script>

    @yield('script')
  </body>
</html>

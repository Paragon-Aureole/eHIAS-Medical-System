@extends('layouts.app')
@section('content')
 <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle"></span>
                <h3 class="page-title">Patients</h3>
              </div>
            </div>
            <!-- End Page Header -->

            <div id="page-wrapper">
        <div class="header">
            <ol class="breadcrumb">

            <li class="active">List of Patients</li> &nbsp
            <a href="" target="_blank"> <i class="fa fa-print text-success print_all_data" data-toggle="tooltip" title="Print List" style="font-size: 20px; cursor: pointer;"></i></a>

          </ol>
          <button  type="button"  title="Add Project" class="btn btn-success float-right"  style="margin-top: -55px; margin-right: 10px;" data-toggle="modal" data-target="#addproject"><strong >+</strong></button>

        </div>
            <div id="page-inner">



       <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                            <th style="font-size: 12px;">Fullname</th>
                                            <th style="font-size: 12px;">Gender</th>
                                            <th style="font-size: 12px;">Birtdate</th>
                                            <th style="font-size: 12px;">Age</th>
                                            <th style="font-size: 12px;">Address</th>
                                            <th style="font-size: 12px;">Contact Number</th>
                                            <th style="font-size: 12px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($patient as $patients)
                                            <tr>
                                              <td>{{$patients->patient_lastname}}, {{$patients->patient_firstname}} {{$patients->patient_middlename}} </td>
                                              <td>{{$patients->patient_gender}}</td>
                                              <td>{{$patients->patient_birthday}}</td>
                                              <td>{{$patients->patient_age}}</td>
                                              <td>{{$patients->patient_barangay}}, {{$patients->patient_city}}, {{$patients->patient_province}}</td>
                                              <td>{{$patients->patient_contact}}</td>

                                              <td style = "font-size: 13px;">
                                                <a href="{{route('patient.edit', $patients->id)}}"><i class="fa fa-eye" style="font-size: 22px; color: #28B463"></i></a></a>
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
                <!-- /. ROW  -->
                 <!-- /. MODAL  -->


                  <div class="modal fade" id="addproject" tabindex="-1" role="dialog" aria-labelledby=" exampleModalLabel" aria-hidden="true" style="height: 100%;">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content" >
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Patient</h5>

                        </div>
                        <div class="modal-body "  >
                          <form action="{{route('patient.store')}}" method="post">
                            @csrf
                            <div class="container">

                              <div class="row">
                                <h6 class="modal-title" id="exampleModa">Personal Information</h6>

                            </div>
                            <hr/>
                            <div class="row">
                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" name="patient_lastname" required>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Lastname</label>
                                    </div>

                              </div>

                               <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" name="patient_firstname" required>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Firstname</label>
                                    </div>

                              </div>

                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" name="patient_middlename" required>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Middlename</label>
                                    </div>

                              </div>

                            </div>


                            <div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group-sm">

                                       <select class="form-control" id="patient_gender" name="patient_gender">
                                        <option value="">---Select----</option>
                                        <option value='M'>Male</option>
                                        <option value='F'>Female</option>

                                      </select>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Gender</label>
                                    </div>

                              </div>

                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <input type="date" class="form-control" name="patient_birthday" required>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Birthdate</label>
                                    </div>

                              </div>

                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" name="patient_age" required>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Age</label>
                                    </div>

                              </div>

                            </div>

                            <div class="row">
                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <select class="form-control" name="patient_barangay" required>
                                      <option value="">---Select----</option>
                                      <option value="ilocanos">Ilocanos Sur</option>
                                      <option value="barangay 4">Barangay 4</option>

                                    </select>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Barangay</label>
                                    </div>

                              </div>

                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <select class="form-control" name="patient_city" required>
                                      <option value="">---Select----</option>
                                      <option value="san fernando">San Ferndando</option>
                                      <option value="dagupan">Dagupan</option>

                                    </select>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">City/ Municipality</label>
                                    </div>

                              </div>

                               <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <select class="form-control" name="patient_province" required>
                                      <option value="">---Select----</option>
                                      <option value="la union">La Union</option>
                                      <option value="pangasinan">Pangasinan</option>

                                    </select>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Province</label>
                                    </div>

                              </div>




                            </div>

                            <div class="row">

                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <select class="form-control" name="patient_civstat" required>
                                      <option value="">---Select----</option>
                                      <option value="Single">Single</option>
                                      <option value="Married">Married</option>
                                      <option value="Windowed">Widdowed</option>

                                    </select>
                                      <label for="recipient-name" class="form-control-label" style="color: green;"> Status</label>
                                    </div>

                              </div>

                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                     <input type="text" class="form-control" name="patient_contact" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
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

                                      <input type="text" class="form-control" name="patient_height" placeholder="in" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Height</label>
                                    </div>

                              </div>

                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" name="patient_weight" placeholder="lbs" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Weight</label>
                                    </div>

                              </div>

                              <div class="col-sm-4  ">
                                    <div class="form-group-sm">

                                      <input type="text" class="form-control" name="patient_bp" required>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Blood Pressure</label>
                                    </div>

                              </div>



                            </div>





                            </div>
                            <!-- container -->


                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- /. MODAL  -->


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    @endsection

    @section('script')
        <!-- DATA TABLE SCRIPTS -->
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.css" />
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    @endsection

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

            <li class="active">List of Patients</li>

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
                                            <th style="font-size: 12px;">Birthdate</th>
                                            <th style="font-size: 12px;">Age</th>
                                            <th style="font-size: 12px;">Address</th>
                                            <th style="font-size: 12px;">Contact Number</th>
                                            <th style="font-size: 12px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td ></td>
                                              <td ></td>
                                              <td style = "font-size: 13px;"><i data-toggle="modal" data-target="#updateproject" title="Edit" class="fa fa-eye" style="font-size: 22px; color: green; cursor: pointer;"></i> </td>
                                            </tr>


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
                          <form>

                            <div class="container">
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


                                      <select class="custom-select" name="gender" >
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

                                     <input type="text" class="form-control" id="recipient-name" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                      <label for="recipient-name" class="form-control-label" style="color: green;">Contact Number</label>
                                    </div>

                              </div>



                            </div>

                            </div>
                            <!-- container -->

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

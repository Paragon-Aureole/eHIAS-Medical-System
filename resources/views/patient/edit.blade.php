  @extends('layouts.app')

@section('content')


    <div id="page-wrapper">
<div class="header">
  <br/>
    <ol class="breadcrumb">

    <li class="active">Patient Details </li>

     <a onclick="printDiv('form')" value="Print Patient Information"><i class="fa fa-print text-success print_all_data" title="Print History" style="font-size: 20px; cursor: pointer;"></i></a>



  </ol>
  <button  type="button"  title="Add Project" class="btn btn-success float-right"  style="margin-top: -55px; margin-right: 10px;" data-toggle="modal" data-target="#addproject"><strong >Update Details</strong></button>

</div>
    <div id="page-inner">
      <div class="container">



              <form>
                      <div class="row">


                        <div class="col-md-6  ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Name:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_lastname}}, {{$patientData->patient_firstname}} {{$patientData->patient_middlename}}</label>
                                </div>
                        </div>

                        <div class="col-md-6  ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Status:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_civstat}}</label>
                                </div>
                        </div>

                        <div class="col-md-6  ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Birthdate:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_birthday}}</label>
                                </div>
                        </div>

                        <div class="col-md-6  ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Age:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_age}}</label>
                                </div>
                        </div>

                        <div class="col-md-6 ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Address:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_barangay}}, {{$patientData->patient_city}}, {{$patientData->patient_province}}</label>
                                </div>
                        </div>

                        <div class="col-md-6  ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Height:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_height}} in.</label>
                                </div>
                        </div>

                        <div class="col-md-6  ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Contact Number:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_contact}}</label>
                                </div>
                        </div>



                         <div class="col-md-6  ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Weight:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_weight}} lbs.</label>
                                </div>
                        </div>

                        <div class="col-md-6  ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Gender:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_gender}}</label>
                                </div>
                        </div>

                        <div class="col-md-6  ">
                              <div class="form-group-sm">

                                <label for="recipient-name" class="form-control-label font-weight-bold">Blood Pressure:</label>
                                <label for="recipient-name" class="form-control-label ">{{$patientData->patient_bp}}</label>
                                </div>
                        </div>


                      </div>
                      <!-- row -->

                    </div>
              </form>
                <br/>


                    </div>


       <div class="card" style="background-color: rgb(217, 217, 217,.4;">
              <div class="card-header">
                <i class="" style="font-size: 20px;"> Medical Record History </i> 

                <a href="{{route('patient.print', $patientData->id)}}" target="_blank"><i class="fa fa-print text-success print_all_data" title="Print History" style="font-size: 20px; cursor: pointer;"></i></a>



                <a class="btn btn-primary  float-right" data-toggle="modal" data-target="#caseModal" style="color:white;"><i class="fas fa fa-plus" style="color:white;"></i> Add Record</a>
              </div>

              <!-- The Modal -->
              <div class="modal" id="caseModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h5>Add Record</h5>

                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form action="{{route('records.store')}}" method="POST">
                      @csrf
                      <input type="hidden" name="patient_id" value="{{$patientData->id}}">
                      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                      <div class="form-group col-md-12">
                        <label class="small">Diagnosis</label>
                        <div class="input-group mb-3">

                          <select class="custom-select" name="case_id">
                            @php $sickness = App\Sickness::all();@endphp
                            <option>Seelct</option>
                            @foreach($sickness as $diagnosis)
                              <option value="{{$diagnosis->id}}">{{$diagnosis->sicknessName}}</option>
                            @endforeach
                          </select>
                          <div class="input-group-append">
                            <a href="" class="input-group-text">New Sickness</a>
                          </div>
                        </div>

                      </div>


                    <!-- Modal body -->
                    <div class="modal-body">
                      <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Prescription</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Refer Patient</a>
                          </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane container active" id="home">
                            <br>
                              <div class="row">

                                <div class="form-group col-md-7">

                                    <label class="small">Prescription Medicine</label>
                                    <select class="custom-select custom-select-sm" name="drug_id">
                                      @php $drug= App\Drug::all(); @endphp
                                      <option>Select Name</option>
                                      @foreach($drug as $d)
                                      <option value='{{$d->id}}'>{{$d->drugName}}</option>
                                      @endforeach
                                    </select>

                                </div>
                                <div class="form-group col-md-3">
                                  <label class="small">Dosage</label>
                                  <input class="form-control form-control-sm" name="drug_qty" type="text">
                                </div>
                              </div>


                          </div>
                          <div class="tab-pane container fade" id="menu1">

                              <div class="row">

                                <div class="form-group col-md-10">
                                  <label class="small">Notes/Description:</label>
                                  <input type="text" class="form-control form-control-sm" name="refferal_input">
                                </div>  <div class="form-group col-md-10">
                                  <label class="small">Doctor referred to:</label>
                                  <input type="text" class="form-control form-control-sm" name="refferal_doctor">
                                </div><div class="form-group col-md-10">
                                  <label class="small">Contact No:</label>
                                  <input type="text" class="form-control form-control-sm" name="refferal_contact">
                                </div>
                              </div>

                          </div>
                        </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Save</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>

                  <hr/>


                  <div id="details" >

                    <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    <th style="font-size: 12px;">Date</th>
                                    <th style="font-size: 12px;">Case</th>
                                    <th style="font-size: 12px;">Doctor</th>



                                    </tr>
                                </thead>
                                <tbody>
                                  @php $medrec = $patientData->record()->get(); @endphp
                                  @foreach($medrec as $record)
                                    <tr>
                                      <td>{{$record->created_at}}</td>
                                      <td>{{$record->case->sicknessName}}</td>
                                      <td>{{$record->user->employee_name}}</td>
                                      </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
                  </div>
              </div>
          </div>
          <br/>

              </div>
            </div>

                    <!-- container -->



        <!-- /. ROW  -->

         <!-- /. MODAL  -->


          <div class="modal fade" id="addproject" tabindex="-1" role="dialog" aria-labelledby=" exampleModalLabel" aria-hidden="true" style="height: 100%;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content" >
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>

                </div>
                <div class="modal-body "  >
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

     


    
    <div class="container-fluid" style="display:none; color:black;" id="form">
      <br/>
      <br/>
      <div class="row">
        <img  style="display: block;margin-left: auto;margin-right: auto; width: 100px; height: 100px;" src="{{asset('shards/images/sfclogo.png')}}">
        <legend  style="text-align: center; font-size: 15px;">Republic of the Philippines</legend>
        <legend  style="text-align: center; font-size: 15px;">Provice of La Union</legend>
        <legend  style="text-align: center; font-size: 15px;">City of San Fernando</legend>
        <legend  style="text-align: center; font-size: 15px;">City Health Office</legend>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>



        <div class="container" >

          <div class= "row">
            Personal Information

          </div>
          <hr/>



          <div class= "row">
            Patient Name: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:430px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Birthdate: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:300px;">
          </div>

          <div class= "row">
             Address: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:470px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Contact Number: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:247px;">
          </div>

          <div class= "row">
             Gender: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:473px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Status: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:310px;">
          </div>

          <div class= "row">
             Age: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:150px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Height: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:150px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Weight: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:150px;">
            Blood Pressure: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:150px;">
          </div>

        </div>

      </div>
      <br/>
      <div class = "container">
      <div class= "row">
            Medical Prescription

          </div>
          <hr/>

          <div class= "row">
            Medicine Name: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:430px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Quantity: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:290px;">
          </div>
        </div>
        <br/>

        <div class = "container">
      <div class= "row">
            Referral Details

          </div>
          <hr/>

          <div class= "row">
            Referring Doctor: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:430px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Contact Number: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:225px;">
          </div>

          <div class= "row">
            Referring to: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:460px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Contact Number: &nbsp <input type="text" name=""  style="border: none; border-bottom: 1px solid black; width:225px;">
          </div>
          <div class= "row">
            Reason for Referral: &nbsp <input type="text" name="" placeholder="Inon" style="border: none; border-bottom: 1px solid black; width:785px; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            
          </div>

          <br/>
          <br/>

          <div class= "row">
            <input type="text" name="" style="margin-left:700px; border: none; border-bottom: 1px solid black; width:200px;"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            
          </div>
          <div class= "row" style="margin-left:730px; border: none;  width:400px;">
            Referring Doctor
            
            
          </div>
          <div class= "row" style="margin-left:600px; border: none;  width:400px;">
            
            PCR License No.:
            <label></label>
            
          </div>

        </div>


          
    </div>







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
        $('#presTable').dataTable({searching: false, paging: false, info: false});



    });
</script>

<script type="text/javascript">
      function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
@endsection

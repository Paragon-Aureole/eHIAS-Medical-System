@extends('layouts.app')

@section('content')
<!-- Morris -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Dashboard</span>
                <h3 class="page-title">Analytics</h3>
              </div>
            </div>
            <!-- End Page Header -->

<!-- Small Stats Blocks -->
             <div class="row">
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Most Common Disease Case</span>


                        <h6 class="stats-small__value count my-3">100</h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="text-center">Dengue</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                  </div>
                </div>
              </div>

     

               <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Common Age Bracket of Patients</span>
                        <h6 class="stats-small__value count my-3">15-24</h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="text-center">Youth</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Barangay in San Fernando with Most Number of Patient</span>
                        <h6 class="stats-small__value count my-3">101</h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="text-center" >Ilocanos Sur</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-12 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Medicine Most Prescribed to Patients</span>
                        <h6 class="stats-small__value count my-3">286/mo</h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="text-center">Paracetamol</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-5"></canvas>
                  </div>
                </div>
              </div>
            </div>


            <div class="container">


          <div>Common Sickness Per Barangay</div>

        <div id="sicknessPerBarangay" class="card"></div><br/>  
          <?php echo Morris::bar( 'sicknessPerBarangay' )
                     ->xkey( [ 'sicknessName' ] )
                     ->ykeys( [ 'sicknessCount' ] )
                     ->labels( [ 'sicknessCount' ] )
                     ->data( $graphData[0] );
          ?>


          <div>Common Age Bracket of Patient Per Barangay</div>
          <div id="agePerBarangay" class="card"></div><br/>
          <?php echo Morris::bar( 'agePerBarangay' )
                     ->xkey( [ 'patient_barangay' ] )
                     ->ykeys( [ 'patient_age' ] )
                     ->labels( [ 'patient_age' ] )
                     ->data( $graphData[1] );
          ?>



          <div>Most Common Sickness</div>

          <div id="mostCommonSickness" class="card"></div><br/>
          <?php echo Morris::bar( 'mostCommonSickness' )
                     ->xkey( [ 'sicknessName' ] )
                     ->ykeys( [ 'sicknessCount' ] )
                     ->labels( [ 'sicknessCount' ] )
                     ->data( $graphData[2] );
          ?>





        <div>Most Prescribed Medicine</div>
          <div id="mostUsedDrug" class="card"></div><br/>
          <?php echo Morris::bar( 'mostUsedDrug' )
                     ->xkey( [ 'drugName' ] )
                     ->ykeys( [ 'quantity' ] )
                     ->labels( [ 'drugname' ] )
                     ->data( $graphData[3] );
          ?>        <!-- End Small Stats Blocks -->

        </div>
@endsection

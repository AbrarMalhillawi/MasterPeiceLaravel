@include('component/master')
@section('DashboardActive', 'active')
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('component/sidbarAdmin')
        <!-- Menu -->


        <!-- Layout container -->
        <div class="layout-page">

          {{-- navbar --}}
        @include('component/navAdmin')
        {{-- end navbar --}}

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->
<div class="cardFlex">

            {{-- FOR USER INFO --}}
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTAL ALL USER </div>
               <div class="card-body">
                <h5 class="card-title">{{$totalAllUser}}</h5>
              </div>
            </div>
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTAL OF ADMIN</div>
              <div class="card-body">
                <h5 class="card-title">{{$totalAdmin}}</h5>
              </div>
            </div>
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTAL OF USER</div>
              <div class="card-body">
                <h5 class="card-title">{{$totalUser}}</h5>
              </div>
            </div>
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTLA CONTACT</div>
              <div class="card-body">
                <h5 class="card-title">{{$totalContact}}</h5>
              </div>
            </div>
            <br/>
            <br/>
            <br/>
            {{-- FOR HOME INFO --}}
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTAL HOME-SERVICES</div>
              <div class="card-body">
                <h5 class="card-title">{{$totalHomeService}}</h5>
              </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTAL HOME-SERVICES-S</div>
              <div class="card-body">
                <h5 class="card-title">{{$totalHomeService_services}}</h5>
              </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTAL HOME RESERVATION</div>
              <div class="card-body">
                <h5 class="card-title">{{$total_Home_Reservation}}</h5>
              </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">MONTH HOME RESERVATION</div>
              <div class="card-body">
                <h5 class="card-title">{{$thisMonth_Home_Reservation}}</h5>
              </div>
            </div>

            {{-- FOR SALON INFO --}}
            <div class="card text-white  bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTAL SALONS</div>
              <div class="card-body">
                <h5 class="card-title">{{$totalSalonas}}</h5>
              </div>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTAL SALON SERVICES</div>
              <div class="card-body">
                <h5 class="card-title">{{$totalSalonas_Services}}</h5>
              </div>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">TOTAL SALON RESERVATION</div>
              <div class="card-body">
                <h5 class="card-title">{{$total_Salon_Reservation}}</h5>
              </div>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header cardtext">MONTH SALON RESERVATION</div>
              <div class="card-body">
                <h5 class="card-title">{{$thisMonth_Salon_Reservation}}</h5>
              </div>
            </div>


</div>
            <!-- / Content -->

            <!-- Footer -->
            @include('component/footerAdmin')
            <!-- Footer -->
       
  </body>
</html>

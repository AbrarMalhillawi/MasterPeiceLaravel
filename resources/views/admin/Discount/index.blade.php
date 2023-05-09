
@include('component/master')
@section('DiscountActive', 'active')
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      
        <!--menu-->
        @include('component/sidbarAdmin')
        <!--menu-->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('component/navAdmin')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> DISCOUNT</h4>
              <a href="{{route('discount.create')}}"><button type="button" class="btn btn-outline-primary mb-5">New Discount</button></a>
              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">DISCOUNT</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>name</th>
                        <th>code</th>
                        <th>discount_percentage</th>
                      </tr>
                    </thead>
                    @foreach ($discounts as $discount)
                    <tbody class="table-border-bottom-0">
                      
                      <tr>
    
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$discount->name}}</strong></td>
                       
                        {{-- code --}}
                        <td>{{$discount->code}} </td>
                        {{-- code --}}


                    {{-- discount_percentage  --}}
                    <td>{{$discount->discount_percentage}} %</td>
                    {{-- discount_percentage  --}}


                        <td>
                          {{-- <a class="dropdown-item" href="{{route('user.edit', $user->id)}}"
                              ><i class='bx bxs-edit'></i> Edit
                            </a>  --}}
                             <div>
                            <button type="submit" class="btn btn-outline-primary" class="button_E_D_U"><a href="{{route('discount.edit', $discount->id)}}">Edit</a></button>
                            </div> 
                          <div>
                              
                              <br/>
                              <form action="{{Route('discount.destroy',$discount->id)}}" method="POST" >
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-primary" class="button_E_D_U" >Delete</button>
                                {{-- <button type="submit">Delete</button> --}}
                              </form>
                          </div>
                        </td>

                        {{-- <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('user.edit', $user->id)}}">
                                <i class="bx bx-edit-alt me-1" ></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td> --}}
                      </tr>
                      
                    </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->

            </div>
            <!-- / Content -->

            <!-- Footer -->
      @include('component/footerAdmin')
  </body>
</html>

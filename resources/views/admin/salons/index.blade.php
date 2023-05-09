
@include('component/master')
@section('SalonsActive', 'active')
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Salons</h4>
              <a href="{{route('salon.create')}}"><button type="button" class="btn btn-outline-primary mb-5">New salon</button></a>
              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">SALONS</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>

                      <tr>
                        <th>image</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>description</th>
                        <th>work_hours</th>
                        <th>action</th>

                      </tr>

                    </thead>

                
                    @foreach ($salons as $salon)
                    <tbody class="table-border-bottom-0">
                      

                      
                      <tr>
                       
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                            {{-- src="{{URL::asset('storage/salonimage/'.$salon->image)}} --}}
                              <img src="{{URL::asset('storage/salonimage/'.$salon->image)}}" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                          
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$salon->name}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$salon->email}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$salon->phone}}</strong></td>
                        <td>{{$salon->desc}}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$salon->work_hours}}</strong></td>

                        <td>
                          {{-- <a class="dropdown-item" href="{{route('user.edit', $user->id)}}"
                              ><i class='bx bxs-edit'></i> Edit
                            </a> --}}
                            <div>
                            <button type="submit" class="btn btn-outline-primary"><a href="{{route('salon.edit', $salon->id)}}">Edit</a></button>
                            </div>
                          <div>
                              {{-- @csrf
                              @method('DELETE')
                                <a class="dropdown-item" href="{{route('user.destroy',$user->id)}}"
                                ><i class='bx bxs-trash'></i> Delete</a
                              > --}}
                              
                              <form action="{{Route('salon.destroy',$salon->id)}}" method="POST" >
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Delete</button>
                                {{-- <button type="submit">Delete</button> --}}
                              </form>
                          </div>

                          <div>
                            <a href="{{route('salonServices.show',$salon->id)}}"><button type="button" class="btn btn-outline-primary mb-5">New Service</button></a>
                            {{-- <a href="{{route('salonServices.create')}}"><button type="button" class="btn btn-outline-primary mb-5">New Service</button></a> --}}
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

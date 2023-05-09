
@include('component/master')
@section('UserActive', 'active')
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> USERS</h4>
              {{-- <a href="{{route('user.create')}}"><button type="button" class="btn btn-outline-primary mb-5">New User</button></a> --}}
              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">USERS</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>image</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>password</th>
                        <th>role</th>
                        <th>action</th>

                      </tr>
                    </thead>
                    @foreach ($users as $user)
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


                            {{-- @if (auth()->check() && auth()->user()->User_Image == NULL)
                            <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                            <img src="../assets/img/avatars/1.png" class="img-radius" alt="User-Profile-Image" width="100px" >
                            @else
                            <img src="{{ asset('storage/userimage/' . auth()->user()->User_Image) }}" class="img-radius image_profile" alt="User Image">
                            @endif --}}


                            
                              <img src="{{URL::asset('storage/userimage/'.$user->User_Image)}}" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                          
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->name}}</strong></td>
                       
                        {{-- email --}}
                        <td>{{$user->email}}</td>
                        {{-- email --}}


                    {{-- phone  --}}
                    <td>{{$user->phone}}</td>
                    {{-- phone  --}}


                    {{-- address --}}
                    <td>{{$user->address}}</td>
                    {{-- address --}}


                    {{-- password --}}
                    <td>{{$user->password}}</td>
                    {{-- password --}}




                        <td><span class="badge bg-label-primary me-1">{{$user->role}}</span></td>
                        <td>
                          {{-- <a class="dropdown-item" href="{{route('user.edit', $user->id)}}"
                              ><i class='bx bxs-edit'></i> Edit
                            </a> --}}
                            {{-- <div>
                            <button type="submit" class="btn btn-outline-primary" class="button_E_D_U"><a href="{{route('user.edit', $user->id)}}">Edit</a></button>
                            </div> --}}
                          <div>
                              {{-- @csrf
                              @method('DELETE')
                                <a class="dropdown-item" href="{{route('user.destroy',$user->id)}}"
                                ><i class='bx bxs-trash'></i> Delete</a
                              > --}}
                              <br/>
                              <form action="{{Route('user.destroy',$user->id)}}" method="POST" >
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

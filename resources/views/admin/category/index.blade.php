
@include('component/master')
@section('CategoryActive', 'active')
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Categorys</h4>
              <a href="{{route('category.create')}}"><button type="button" class="btn btn-outline-primary mb-5">New category</button></a>
              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">CATEGORYS</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>image</th>
                        <th>name</th>
                        <th>description</th>
                        <th>action</th>

                      </tr>

                    </thead>

                
                    @foreach ($categorys as $category)
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
                              <img src="{{URL::asset("storage/categoryimage/$category->image")}}" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                          
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$category->name}}</strong></td>
                       
                        {{-- desc --}}
                        <td>{{$category->desc}}</td>
                        {{-- desc --}}

                       
                        <td>
                          {{-- <a class="dropdown-item" href="{{route('user.edit', $user->id)}}"
                              ><i class='bx bxs-edit'></i> Edit
                            </a> --}}
                            <div>
                            <button type="submit" class="btn btn-outline-primary"><a href="{{route('category.edit', $category->id)}}">Edit</a></button>
                            </div>
                          <div>
                              {{-- @csrf
                              @method('DELETE')
                                <a class="dropdown-item" href="{{route('user.destroy',$user->id)}}"
                                ><i class='bx bxs-trash'></i> Delete</a
                              > --}}
                              
                              <form action="{{Route('category.destroy',$category->id)}}" method="POST" >
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Delete</button>
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

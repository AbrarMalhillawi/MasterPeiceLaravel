@include('component.master')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('component.sidbarAdmin')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('component.navAdmin')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Home service</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic with Icons</h5>
                      <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        {{-- ///////////////////form --}}
                        <form action="{{route('homeServices.update',$homeservice->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="service name"
                                aria-label="service name"
                                aria-describedby="basic-icon-default-fullname2"
                                name="name"
                                value="{{$homeservice->name}}"
                              />
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-envelope"></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="email"
                                aria-label="email"
                                aria-describedby="basic-icon-default-fullname2"
                                name="email"
                                value="{{$homeservice->email}}"
                              />
                            </div>
                          </div>
                        </div>

                       
                        
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">description</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="menu-icon tf-icons bx bx-detail"></i></span>
                              <input
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control"
                                placeholder="desc for service"
                                aria-label="desc for service"
                                aria-describedby="basic-icon-default-email2"
                                name="desc"
                                value="{{$homeservice->desc}}"
                              />
                            </div>
                            <br>
                        </div>


                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">phone</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                              <input
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control"
                                placeholder="phone number"
                                aria-label="phone number"
                                aria-describedby="basic-icon-default-email2"
                                name="phone"
                                value="{{$homeservice->phone}}"
                              />
                            </div>
                            <br>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">work_hours</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="menu-icon tf-icons bx bx-detail"></i></span>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="work hours"
                                  aria-label="work hours"
                                  aria-describedby="basic-icon-default-fullname2"
                                  name="work_hours"
                                  value="{{$homeservice->work_hours}}"
                                />
                              </div>
                            </div>
                          </div>
                        
                            <br>
                        </div>
                           <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">IMAGE</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class='bx bxs-image-add'></i
                                ></span>
                                <input
                                  type="file"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="image"
                                  aria-label="image"
                                  aria-describedby="basic-icon-default-fullname2"
                                  name="image"
                                />
                              </div>
                            </div>
                          </div>
                         

                       
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('component.footerAdmin')
  </body>
</html>
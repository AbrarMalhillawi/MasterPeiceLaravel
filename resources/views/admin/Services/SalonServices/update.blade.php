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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table/</span>Salons Services</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Salons Services</h5>
                      <small class="text-muted float-end">Salons Services</small>
                    </div>
                    <div class="card-body">
                      <form action="{{route('salonServices.update', $SalonService->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Salon Id</label>
                                <div class="col-sm-10">
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class='bx bx-dumbbell' ></i>
                                    </span>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="basic-icon-default-fullname"
                                      placeholder="salon Id"
                                      aria-label="salon Id"
                                      aria-describedby="basic-icon-default-fullname2"
                                      name="Salon_id"
                                      value="{{$SalonService->SalonId}}"
                                    />
                                  </div>
                                </div>
                              </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Service Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="salon Name"
                                aria-label="salon Name"
                                aria-describedby="basic-icon-default-fullname2"
                                name="Service_name"
                                value="{{$SalonService->ServiceName}}"
                              />
                            </div>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Service Price</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                              ></span>
                              <input
                                type="text"
                                id="basic-icon-default-phone"
                                class="form-control phone-mask"
                                placeholder="658 799 8941"
                                aria-label="658 799 8941"
                                aria-describedby="basic-icon-default-phone2"
                                name="Service_price"
                                value="{{$SalonService->ServicePrice}}"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email"> Service Description</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-comment-detail'></i></span>
                                <input
                                  type="text"
                                  id="basic-icon-default-email"
                                  class="form-control"
                                  placeholder="salon Description"
                                  aria-label="salon Description"
                                  aria-describedby="basic-icon-default-email2"
                                  name="Service_description"
                                  value="{{$SalonService->ServiceDescription}}"
                                />
                              </div>
                              <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                          </div>

                        {{-- <div class="row mb-3">
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
                                  placeholder="Image"
                                  aria-label="Image"
                                  aria-describedby="basic-icon-default-fullname2"
                                  name="image"
                                />
                              </div>
                            </div>
                          </div> --}}
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Service Time</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text">
                                  <i class='bx bx-time-five'></i>
                                </span>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="Work Hours"
                                  aria-label="Work Hours"
                                  aria-describedby="basic-icon-default-fullname2"
                                  name="Service_time"
                                  value="{{$SalonService->ServiceTime}}"
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
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
                      <form class="body_box" action="{{Route('UserHomeBook.store')}}" method="post">
                        @csrf
                        <div class="row_book">
            
                            <div class="col-12">
                                <p>First Name</p>
                                <input type="text"  placeholder="Your Name" name="first_name" value="{{ old('first_name')}}" class="@error('first_name') is-invalid @enderror">
                                <input type="hidden" class="form-control bg-transparent" id="name" placeholder="First Name" name="user_id" value="{{ Auth::user()->id }}">
                                @error('first_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
            
                            <div class="col-12">
                                <p>Last Name</p>
                                <input type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name')}}" class="@error('last_name') is-invalid @enderror">
                                @error('last_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                         
                         
            
                        </div>
                        <div class="row_book">
                            <div class="col-12">
                                <p>Email Address </p>
                                <input type="email" placeholder="Email Address" id="email"  name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                            <div class="col-12">
                                <p>Phone Number </p>
                                <input type="text" placeholder="Phone Number" name="phoneNumber" value="{{ old('phoneNumber')}}" class="@error('phoneNumber') is-invalid @enderror">
                                @error('phoneNumber')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                         
                        </div>
            
                        <div class="row_book">
            
                            <div class="col-12">
                                <p>Select Date</p>
                                <input type="date"  class="form-control bg-transparent datetimepicker-input" id="date_picker" placeholder="Date" data-target="#date3" data-toggle="datetimepicker" name="res_date" value="{{ old('res_date')}}" class="@error('res_date') is-invalid @enderror" />
                                {{-- <input type="date"  id="date" name="res_date" value="{{ old('res_date')}}" class="@error('res_date') is-invalid @enderror"> --}}
                                @error('res_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                            <div class="col-12">
                                <label for="Home_Services_Id">Choose a Services:</label>
        
                                <select name="Home_Services_Id" id="services"  value="{{ old('Home_Services_Id')}}" class="@error('Home_Services_Id') is-invalid @enderror">
                                    @foreach ($services as $value)
                                        
                                    <option value="{{$value->id}}">{{$value->ServiceName}}  price : {{$value->ServicePrice}} JD</option>
                                    @endforeach
                                </select>
                                @error('Home_Services_Id')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        
            
                        </div>
            
                        <div class="row_book">
            
                     <div class="col-12">
                            <p> Messages</p>
                            <textarea id="Messages" cols="3" rows="10" name="comment" value="{{ old('comment')}}"></textarea>
                        </div>
            
                        </div>
               
            
                        <div class="row_book">
                            <div class="col-3">
                                <button type="submit"> Submit </button>
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
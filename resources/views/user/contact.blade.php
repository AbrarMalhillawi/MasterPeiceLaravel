

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/ContactUs.css">
    <title>contact us</title>
</head>
<body>
        <!-- -----------------------------START SECTION FOR LANDING PAGE --------------------------- -->
  <div class="landingPage">

    
    <div class="Head">
        <nav class="navFlex">
            
            <img class="Logo" src="">
                <ul>
                    <li><a href="/homepage">Home</a></li>
                    <li><a href="/SalonUser">Salonat</a></li>
                    <li><a href="/HomeUser">Home Services</a></li>
                    {{-- <li><a href="">PRODUCT</a></li> --}}
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact"  style="color:rgb(166, 29, 116);">Contact</a></li>
                    @if (!Auth::user())
                    <li><a href="/regester">Rergeter</a></li>
                   <li><a href="/login">Login</a></li>

                   @else
                   {{-- <li><a href="/Account">Account</a></li> --}}
                  <li><a href="{{route('logout')}}">Logout</a></li>
                   <a href="/userProfile"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg> </a>

                    @endif
                </ul>
              {{-- search icon in nav bar --}}
              <div class="SearchBar">   
                <input class="searchInp" type="text" placeholder="Search...">
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div> 

        </nav>

        <div class="Subject">
          {{-- <h2>Contact US</h2> --}}
          <h2>Get Touch With Us</h2>
          <p>Through our website, we offer the best salons in Aqaba in terms of services and location</p>
      </div>
    </div>
{{-- start contact --}}

<section style="padding-bottom: 0px;">
  <div class="contact3 py-5">
      <div class="row no-gutters">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="card-shadow">
                          {{-- <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/2.jpg" class="img-fluid"> --}}
                          <img src="{{ URL::asset('../PIC/call_center.jpg') }}" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="contact-box ml-3">
                          <h1 class="font-weight-light mt-2 fw-bold">Quick Contact</h1>
                          <form class="mt-4" action="{{route('Contact.store')}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="form-group mt-2">
                                          <input class="form-control" type="text" placeholder="Please Enter Your Name" name="name">
                                      </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="col-lg-12">
                                      <div class="form-group mt-2">
                                          <input class="form-control" type="email" placeholder="Please Enter Your Email Address" name="email">
                                      </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="col-lg-12">
                                      <div class="form-group mt-2">
                                          <input class="form-control" type="text" placeholder="Please Enter Your Phone Number" name="phone">
                                      </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="col-lg-12">
                                      <div class="form-group mt-2">
                                          <textarea class="form-control" rows="3" placeholder="Please Enter Your Massage" name="message"></textarea>
                                      </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="col-lg-12">
                                      <button type="submit" class="btn btn-danger-gradiant mt-3 text-white border-0 px-3 py-2"><span> SUBMIT</span><button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="card mt-4 border-0 mb-4">
                          <div class="row">
                              <div class="col-lg-4 col-md-4">
                                  <div class="card-body d-flex align-items-center c-detail pl-0">
                                      <div class="mr-3 align-self-center">
                                          {{-- <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png"> --}}
                                          <img src="{{ URL::asset('../PIC/location.png') }}" class="imageIcon1">
                                      </div>
                                      <div class="">
                                          <h6 class="font-weight-medium fw-bold">Address</h6>
                                          <p class=""> The Hashemite Kingdom
                                              <br> Of Jordan</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <div class="card-body d-flex align-items-center c-detail">
                                      <div class="mr-3 align-self-center">
                                          {{-- <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png"> --}}
                                          <img src="{{ URL::asset('../PIC/phone.png') }}" class="imageIcon">
                                      </div>
                                      <div class="">
                                          <h6 class="font-weight-medium fw-bold">Phone</h6>
                                          <p class="">+962 7 9879 1721
                                              <br> +962 7 7807 9521</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <div class="card-body d-flex align-items-center c-detail">
                                      <div class="mr-3 align-self-center">
                                          {{-- <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png"> --}}
                                          <img src="{{ URL::asset('../PIC/email.png') }}" class="imageIcon1">
                                      </div>
                                      <div class="">
                                          <h6 class="font-weight-medium fw-bold">Email</h6>
                                          <p class="">CottonSalon@gmail.com
                                              <br> CottonCandy@gmail.com
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>


{{-- end contact --}}

  <!-- Start Section for footer -->
  @include('component/footer')
  <!-- END Section for footer -->







</body>
</html>
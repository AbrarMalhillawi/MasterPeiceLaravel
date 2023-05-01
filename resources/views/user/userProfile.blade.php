<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- llink for css bootstrab  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


  <!-- llink for js bootstrab  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/f9c0f3458b.js" crossorigin="anonymous"></script>


{{-- font awesom --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--start user profile page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
     <!--end  user profile page -->


  <link rel="stylesheet" href="CSS/userProfile.css">
  <title>user-profile</title>
</head>

<body>

    <div class="Head">
        <nav class="navFlex">
            
            <img class="Logo" src="">
                <ul>
                    <li><a href="/homepage">Home</a></li>
                    <li><a href="/SalonUser">Salonat</a></li>
                        <li><a href="/HomeUser">Home Services</a></li>
                    {{-- <li><a href="">PRODUCT</a></li> --}}
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    @if (!Auth::user())
                    <li><a href="/regester">Rergeter</a></li>
                   <li><a href="/login">Login</a></li>

                   @else
                   {{-- <li><a href="/Account">Account</a></li> --}}
                  <li><a href="{{route('logout')}}">Logout</a></li>
                   <a href="/userProfile" > <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" style="color:rgb(166, 29, 116);">
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
       
        {{-- {{Auth()->user()->User_Image}} --}}
    {{-- just to read information  --}}
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                    <div class="col-xl-6 col-md-12">
                                                    <div class="card user-card-full">
                                                        <div class="row m-l-0 m-r-0">
                                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                                <div class="card-block text-center text-white">
                                                                    <div class="m-b-25">
                                                                        {{-- <img src="{{URL::asset('storage/userimage/'.$user->User_Image)}}" alt="Avatar" class="rounded-circle" /> --}}
                                                                        <img src="{{ asset('storage/userimage/' . Auth::user()->User_Image) }}" class="img-radius image_profile" alt="User Image">
                                                                        
                                                                    </div>
                                                                    <h6 class="f-w-600">{{Auth()->user()->name}}</h6>
                                                                    <a style="font-size:30px;color:aliceblue" href="/editUserProfile"> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i></a>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="card-block">
                                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">Email</p>
                                                                            <h6 class="text-muted f-w-400">{{Auth()->user()->email}}</h6>
                                                                        </div>
                                                                        {{-- <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">Password</p>
                                                                            <h6 class="text-muted f-w-400">{{Auth()->user()->password}}</h6>
                                                                        </div> --}}

                                                                    </div>
                                                                    <br/>
                                                                    <br/>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">Phone</p>
                                                                            <h6 class="text-muted f-w-400">{{Auth()->user()->phone}}</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                          <p class="m-b-10 f-w-600">Address</p>
                                                                          <h6 class="text-muted f-w-400">{{Auth()->user()->address}}</h6>
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
    

    {{-- </div> --}}
    
{{-- footer --}}
    @include('component.footer');


  </body>
</html>
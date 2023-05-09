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


  <link rel="stylesheet" href="../CSS/userProfile.css">
  <title>user-profile</title>
</head>

<body>

  <div class="Head">
        <nav class="navFlex">
            
            <img class="Logo" src="{{ URL::asset('../PIC/roj4.png') }} " >
                <ul>
                    <li><a href="/homepage">Home</a></li>
                    <li><a href="/SalonUser">Salonat</a></li>
                        <li><a href="/HomeUser">Home Services</a></li>
                    {{-- <li><a href="">PRODUCT</a></li> --}}
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    @if (!Auth::user())
                    <li><a href="/regester">Register</a></li>
                   <li><a href="/login">Login</a></li>

                   @else
                   @if (auth()->user()->role!='User')
                   <li><a href="{{ route('ProfileUser.show', auth()->user()->id) }}" style="color:rgb(166, 29, 116);">Profile</a></li>
                   <li><a href="/admin" target="_blank">Dashboard</a></li>
                   <li><a href="{{route('logout')}}">Logout</a></li>

                   @else

                   <li><a href="{{ route('ProfileUser.show', auth()->user()->id) }}" style="color:rgb(166, 29, 116);">Profile</a></li>
                   <li><a href="{{route('logout')}}">Logout</a></li>

                   @endif
                   @endif
                </ul>
                {{-- search icon in nav bar
                 <div class="SearchBar">   
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>  --}}
                

        </nav>
  {{-- </div> --}}
       {{-- {{dd($reservations)}}; --}}
        {{-- {{Auth()->user()->User_Image}} --}}
    {{-- just to read information  --}}
    <div class="page-content page-container" id="page-content" style="width:100%">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                    <div class="col-xl-12 col-md-12">
                                                    <div class="card user-card-full">
                                                        <div class="row m-l-0 m-r-0">
                                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                                <div class="card-block text-center text-white">
                                                                    <div class="m-b-25">
                                                                        
                                                                        @if (auth()->check() && auth()->user()->User_Image == NULL)
                                                                        <img src="../assets/img/avatars/1.png" class="img-radius" alt="User-Profile-Image" width="100px" >
                                                                        @else
                                                                        <img src="{{ asset('storage/userimage/' . auth()->user()->User_Image) }}" class="img-radius image_profile" alt="User Image">
                                                                        @endif
                                                                    
                                                                    </div>
                                                                    {{-- <h6 class="f-w-600">{{Auth()->user()->name}}</h6> --}}
                                                                    <a style="font-size:30px;color:aliceblue" href="/editUserProfile"> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i></a>
                                                                  </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="card-block">
                                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Personal Information</h6>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">Name</p>
                                                                            <h6 class="text-muted f-w-400">{{Auth()->user()->name}}</h6>
                                                                        </div>
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
                                                                {{-- <div>
                                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Personal Information</h6>
                                                                </div> --}}

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>





                                                        {{--/////////////////  --}}




                <div class="card-body">
                          <form>
                            <h6 class="heading-small text-muted mb-4">Booking Information</h6>
                            <hr class="my-4">
                            <!-- Address -->
                            <div class="pl-lg-4">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group focused">
                                    @foreach ($reservations as $res)
                                    {{-- {{dd($res)}}; --}}
                                    <div id="input-address" class="form-control form-control-alternative"> 
                                      <div class="test">
                                        <p> your resrvation At <strong>{{$res->SalonName}}</strong> on Price <strong>{{$res->price}} </strong> is </p>
                                        @if ($res->status == 'Pending')
                                          <button class="Waiting">Pending</button>
                                          @elseif ($res->status == 'Rejected')
                                          <button class="NotAprove"> Rejected</button>
                                          @elseif ($res->status == 'Accepted')
                                          <button class="Aprove">Accepted</button>
                                          @endif
                                        </div>
                                    </div>
                                    @endforeach
                                    @foreach ($Home_Reservation as $res2)
                                    {{-- {{dd($res2)}}; --}}
                                    <div id="input-address" class="form-control form-control-alternative"> 
                                      <div class="test">
                                        <p> your resrvation At <strong>{{$res2->HomeServicesName}}</strong> on Price <strong>{{$res2->price}} </strong> is </p>
                                        @if ($res2->status == 'Pending')
                                          <button class="Waiting">Pending</button>
                                          @elseif ($res2->status == 'Rejected')
                                          <button class="NotAprove"> Rejected</button>
                                          @elseif ($res2->status == 'Accepted')
                                          <button class="Aprove">Accepted</button>
                                          @endif
                                        </div>
                                    </div>
                                    @endforeach

                                  </div>
                                </div>
                              </div>

                            </div>
                          </form>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>






                                                        {{-- ////////////////// --}}
           </div>
                                                    

                    </div> 

            </div>


   
        </div>


        


    </div>
    

    </div>
    
{{-- footer --}}
    @include('component.footer');


  </body>
</html>


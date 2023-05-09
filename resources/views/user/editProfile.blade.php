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
                {{-- search icon in nav bar --}}
                 <div class="SearchBar">   
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div> 

        </nav>
    {{-- just to read information  --}}
    <div class="page-content page-container" id="page-content">
  {{-- ///////////// start form update data //////////////  --}}
  <form action="{{route('ProfileUser.update', (Auth()->user()->id))}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="padding">
        <div class="row container d-flex justify-content-center">


                <div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                  @if (auth()->check() && auth()->user()->User_Image == NULL)
                                                                  {{-- <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> --}}
                                                                  <img src="../assets/img/avatars/1.png" class="img-radius" alt="User-Profile-Image" width="100px" >
                                                                  @else
                                                                  <img src="{{ asset('storage/userimage/' . auth()->user()->User_Image) }}" class="img-radius image_profile" alt="User Image">
                                                                  @endif
                                                                  <span><br/><br/></span>
                                                                  
                                                                  <input 
                                                                      type="file"
                                                                      class="form-control text-muted f-w-400 inputEdit"
                                                                      id="basic-icon-default-fullname"
                                                                      placeholder="image"
                                                                      aria-label="image"
                                                                      aria-describedby="basic-icon-default-fullname2"
                                                                      name="image"
                                                                    />
                                                                
                                                                
                                                                  </div>

                                                                <h6 class="f-w-600">Name</h6>
                                                                <input class="text-muted f-w-400 inputEdit" name="name" value="{{Auth()->user()->name}}" />
                                                                <br>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>

                                                                     <span class="text_editProfile"> Email <span style="color:white ">......</span>  </span><input name="email" value="{{Auth()->user()->email}}" />
                                                                     <br>
                                                                     {{-- <br>
                                                                     <span class="text_editProfile"> password </span><input name="password" value="{{Auth()->user()->password}}" />
                                                                  <br> --}}
                                                                  <br>

                                                                      <span class="text_editProfile"> Phone <span style="color:white ">.....</span></span><input name="phone" value="{{Auth()->user()->phone}}" />
                                                                      <br>
                                                                      <br/>
                                                                      <span class="text_editProfile"> Address <span style="color:white ">..</span></span><input name="address" value="{{Auth()->user()->address}}" />
                                                                      <div >
                                                                        <br/>
                                                                      <button type="submit" class="btn button_save" style="background-color: rgb(166, 29, 116)">Save</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                </div>
        </div>
    </div>
  </form>
    </div>
    
    </div>

  
  <!-- Start Section for footer -->
  @include('component/footer')
  <!-- END Section for footer -->


</body>
</html>
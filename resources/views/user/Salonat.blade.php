<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- llink for css bootstrab  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<!-- llink for js bootstrab  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>



{{-- link for icon in font awesome --}}
<script src="https://kit.fontawesome.com/f9c0f3458b.js" crossorigin="anonymous"></script>


<link rel="stylesheet" href="CSS/Salonat.css">

    <title>Salonat</title>
</head>
<body>


          <!-- -----------------------------START SECTION FOR LANDING PAGE --------------------------- -->
  <div class="landingPage">

    
    <div class="Head">
        <nav class="navFlex">
          
            <img class="Logo" src="">
                <ul>
                    <li><a href="/homepage">Home</a></li>
                    <li><a href="/SalonUser" style="color:rgb(166, 29, 116);">Salonat</a></li>
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
        <div class="title">.</div>
        <div >
            <h2>SALONAT</h2>
        </div>
    </div>
  </div>
  
    <!-- ----------------------------END SECTION FOR LANDING PAGE---------------------------------------- -->

{{-- START SECTION FOR QOUTES --}}
<div class="quote">
    <h1>" The beauty of the sky is within the stars, and the beauty of a woman is in her hair "</h1>
</div>
{{-- END  SECTION FOR QOUTES --}}


 {{-- start section for card  --}}

 <div class="cards">
  @foreach ($salons as $salon)


  
    <div class="card" style="width: 18rem;">
        <img src="{{URL::asset('storage/salonimage/'.$salon->image)}}" class="card-img-top" alt="pic1" height="260" width="250">
        <div class="card-body">
          <h5 class="card-title">{{$salon->name}}</h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-primary" >Book Now</a>
        </div>
      </div>

      @endforeach


</div>
{{--end section for card  --}}


  <!-- Start Section for footer -->
  @include('component/footer')
  <!-- END Section for footer -->


    
</body>
</html>
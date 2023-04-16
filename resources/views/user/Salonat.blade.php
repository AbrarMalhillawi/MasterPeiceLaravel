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
                    <li><a href="/homepage">HOME</a></li>
                    <li><a href="{{route('salon.index')}}" style="color:rgb(166, 29, 116);">Salonat</a></li>
                    <li><a href="{{route('homeServices.index')}}">Home Services</a></li>
                    {{-- <li><a href="">PRODUCT</a></li> --}}
                    <li><a href="/about">ABOUT</a></li>
                    <li><a href="/contact">CONTACT</a></li>
                    <li><a href="/login">LOGIN</a></li>
                </ul>
                {{-- search icon in nav bar --}}
                 <div class="SearchBar">   
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div> 
                   {{--  start icon for navbar --}}
                <div class="icons">
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg> </a>
                    
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="17" cy="19" r="2"></circle>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                    </svg> </a>
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                        <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                        <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                        <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                    </svg> </a>
                </div>
          {{--  end icon for navbar --}}

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

{{--  start section for footer --}}
@include('component/footer')

    
</body>
</html>
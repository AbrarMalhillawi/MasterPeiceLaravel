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


  <link rel="stylesheet" href="CSS/HomePage1.css">
  <title>homePage</title>
</head>

<body>
  <!-- -----------------------------START SECTION FOR LANDING PAGE --------------------------- -->
  <div class="landingPage">

    
    <div class="Head">
        <nav class="navFlex">
            
          <img class="Logo" src="{{ URL::asset('../PIC/roj4.png') }} "  >
                <ul>
                
                    <li><a href="/homepage" style="color:rgb(166, 29, 116);">Home</a></li>
                    {{-- <li><a href="{{route('salon.index')}}">Salonat</a></li> --}}
                    <li><a href="/SalonUser">Salonat</a></li>
                    <li><a href="/HomeUser">Home Services</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    @if (!Auth::user())
                    <li><a href="/regester">Register</a></li>
                    <li><a href="/login">Login</a></li>
                    
                  @else
                  @if (auth()->user()->role!='User')
                  <li><a href="{{ route('ProfileUser.show', auth()->user()->id) }}">Profile</a></li>
                  <li><a href="/INFO" target="_blank">Dashboard</a></li>
                  <li><a href="{{route('logout')}}">Logout</a></li>

                  @else
                  <li><a href="{{ route('ProfileUser.show', auth()->user()->id) }}">Profile</a></li>
                  {{-- <li><a href="/userProfile">Profile</a></li> --}}
                  <li><a href="{{route('logout')}}">Logout</a></li>

                    @endif
                    @endif

                </ul>


        </nav>
              <!-- Title  Landing-->
    <div class="TitleInLandingPage">
        <h1>
            <pre>    ALL OF THE SAKE Of YOUR BEAUTY IN
      <span>COTTON CANDY</span></pre>
        </h1>
      </div>
      <!-- Button Book Now In Landing -->
      <div id="buttonsBookShop">
        <div class="BUTTONLANDING">
          
          <button type="button" class="btn btn-outline-secondary" class="buttonbooknow" ><a href="#target" style="color:white">BOOK NOW<a></button>
          
        </div>

      </div>
    </div>

  </div>
    <!-- ----------------------------END SECTION FOR LANDING PAGE---------------------------------------- -->
  
    



    

  <!-- ----------------------START section for slideShow Brand ----------------->
  <div class="slider">
    <div class="slide-track">


      <div class="slide">
        <img src="../pic/logo_brand/brand3.png" height="60" width="150" alt="brand1">
      </div>


      <div class="slide">
        <img src="../pic/logo_brand/brand6.png" height="60" width="150" alt="brand1">
      </div>
      <div class="slide">
        <img src="../pic/logo_brand/brand7.png" height="60" width="150" alt="brand1">
        <div class="slide">
        </div>
        <img src="../pic/logo_brand/brand8.png" height="60" width="150" alt="brand1">
      </div>
      <div class="slide">
        <img src="../pic/logo_brand/brand9.png" height="60" width="150" alt="brand1">
      </div>
      <div class="slide">
        <img src="../pic/logo_brand/brand10.png" height="60" width="150" alt="brand1">
      </div>
      <div class="slide">
        <img src="../pic/logo_brand/brand11.png" height="60" width="150" alt="brand1">
      </div>


    </div>
  </div>
  <!-- ----------------------------END SLIDSHOW BRAND------------------------------ -->

  <div class="cut_pic">

    <div class="cut">
      <div>
        <img src="../pic/cut_pic_landing/hair.png" width="120" height="110" alt="cut_hair">
        <h3>Styling Hair</h3>
      </div>
    </div>
    <div class="cut">
      <div>
        <img src="../pic/cut_pic_landing/manaker (1).png" width="120" height="110" alt="cut_manaker">
        <h3>Nail Art</h3>
      </div>
    </div>
    <div class="cut">
      <div>
        <img src="../pic/cut_pic_landing/glus.png" width="120" height="110" alt="cut_makeup">
        <h3>Best Mackeup</h3>
      </div>
    </div>
    <div class="cut">
      <div>
        <img src="../pic/cut_pic_landing/products.png" width="110" height="110" alt="cut_product">
        <h3>Skin Care</h3>
      </div>
    </div>
  </div>


  <!-------------------------- START SECTION FOR CATEGORY ---------------------------->

  <div class="sale_product" id="target">
    <h5 style="color: white"> '</h5>
    <h2>Our Category In Cotton Candy</h2>
  </div>
  <div id="category" >
    <!-- SALON SERVICES CATEGORY -->
    <div >
      <a href="/SalonUser">
        <img src="../pic/pic_category/salons.png" height="450" width="450" alt="">
      </a>
    </div>

    <!--HOME SERVICES category  -->
    <div >
      <a href="/HomeUser" >
        <img src="../pic/pic_category/home1.png" height="450" width="450" alt="">
      </a>
    </div>
    
  </div>




  <!-------------------------- END SECTION FOR CATEGORY ---------------------------->






  <!-- start section for deiscaount -->
  <div class="containerDiscount ">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner bg-primary" width="100%">
        <div class="carousel-item active ">
          <img src="../pic/discaount_pic/sale1.png" class="d-block " alt="SALE1">
        </div>
        <div class="carousel-item">
          <img src="../pic/discaount_pic/sale2.png" class="d-block " alt="SALE2">
        </div>
        <div class="carousel-item">
          <img src="../pic/discaount_pic/sale3.png" class="d-block " alt="SALE3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="prev"  aria-hidden="true"><i class="fa-sharp fa-solid fa-arrow-left"></i></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="next" aria-hidden="true"><i class="fa-sharp fa-solid fa-arrow-right"></i></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- end section for deiscaount -->



  <!-- Start Section for footer -->
  @include('component/footer')
  <!-- END Section for footer -->




</body>

</html>



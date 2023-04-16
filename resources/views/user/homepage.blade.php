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


  <link rel="stylesheet" href="CSS/HomePage.css">
  <title>homePage</title>
</head>

<body>
  <!-- -----------------------------START SECTION FOR LANDING PAGE --------------------------- -->
  <div class="landingPage">

    
    <div class="Head">
        <nav class="navFlex">
            
            <img class="Logo" src="">
                <ul>
                 
                    <li><a href="/homepage" style="color:rgb(166, 29, 116);">HOME</a></li>
                    <li><a href="{{route('salon.index')}}">Salonat</a></li>
                    <li><a href="{{route('homeServices.index')}}">Home Services</a></li>
                    {{-- <li><a href="">PRODUCT</a></li> --}}
                    <li><a href="/about">ABOUT</a></li>
                    <li><a href="/contact">CONTACT</a></li>
                    <!-- <li><a href="">REGISTER</a></li> -->
                    @if (!Auth::user())
                    <li><a href="/regester">REGISTER</a></li>
                   <li><a href="/login">LOGIN</a></li>

                   @else
                   {{-- <li><a href="/Account">Account</a></li> --}}
                  <li><a href="{{route('logout')}}">LOGOUT</a></li>
                   <a href="/userProfile"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg> </a>

                    @endif
                    {{-- <li><a href="/login">LOGIN</a></li> --}}
                </ul>
                 <div class="SearchBar">   
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div> 

                <div class="icons">
                    {{-- <a href="{{route('user.index')}}"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg> </a> --}}
                    
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
          <button type="button" class="btn btn-outline-secondary">BOOK NOW</button>
        </div>
        <div class="BUTTONLANDING">
          <button type="button" class="btn btn-outline-secondary">SHOP NOW</button>
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

  <div class="sale_product">
    <h5 style="color: white"> '</h5>
    <h2>Our Category In Cotton Candy</h2>
  </div>
  <div id="category">
    <!--HOME SERVICES category  -->
    <div>
      <a href="/homeServices">
        <img src="../pic/pic_category/home.png" height="350" width="350" alt="">
      </a>

    </div>
    <!-- SALON SERVICES CATEGORY -->
    <div>
      <a href="/Salonat">
        <img src="../pic/pic_category/salons.png" height="350" width="350" alt="">
      </a>
    </div>
    <!-- PRODUCT CATEGORY -->


    <div>
      <a>
        <img src="../pic/pic_category/PRODUCTS.png" height="350" width="350" alt="">
      </a>
    </div>


  </div>




  <!-------------------------- END SECTION FOR CATEGORY ---------------------------->



  <!-- SECTION FOR SALE PRODUCT -->

  <div class="sale_product">
    <h5> our product</h5>
    <h2>Top Product In Cotton Candy</h2>
  </div>
  <div class="SaleProduct">

    <div class="arrow">
      <i class="fa-solid fa-arrow-left"></i>
    </div>
    <div>
      <img src="../pic/product_sale_pic/1.png" width="250" height="250" alt="pic1 ">
      <div>
        <h3>Snowfall Sparkle</h3>
        <h4>30 $</h4>
        <div class="BUTTON">
          <button type="button" class="btn btn-outline-secondary">SHOP NOW</button>
        </div>
      </div>

    </div>


    <div>
      <img src="../pic/product_sale_pic/2.png" width="250" height="250" alt="pic1 ">
      <div>
        <h3>Body Cream</h3>
        <h4>40 $</h4>
        <div class="BUTTON">
          <button type="button" class="btn btn-outline-secondary">SHOP NOW</button>
        </div>
      </div>
    </div>


    <div>
      <img src="../pic/product_sale_pic/3.png" width="250" height="250" alt="pic1 ">
      <div>
        <h3>oil Remover</h3>
        <h4>40 $</h4>
        <div class="BUTTON">
          <button type="button" class="btn btn-outline-secondary">SHOP NOW</button>
        </div>
      </div>
    </div>


    <div>
      <img src="../pic/product_sale_pic/1.png" width="250" height="250" alt="pic1 ">
      <div>
        <h3>Nourshing Oil</h3>
        <h4>25$</h4>
        <div class="BUTTON">
          <button type="button" class="btn btn-outline-secondary">SHOP NOW</button>
        </div>
      </div>
    </div>


    <div class="arrow">
      <i class="fa-solid fa-arrow-right"></i>
    </div>




  </div>
  <!-- END SECTION FOR SALE PRODUCT -->


  <!-- START SECTION FOR  PRICE -->

  <div class="sale_product">
    <h5> our price</h5>
    <h2>Best fixed prices in Cotton Candy</h2>
  </div>

  <div class="sectionPrice">

    <div id="WomanPrice">
      <img src="../pic/PriceSection/PriceWoman.png" height="500" width="500" alt="WomanForPrice">
    </div>


    <div id="PoxPricePairent">

      <div class="card w-75 mb-3">
        <div class="card-body">
          <h3 class="card-title">Price For Salon Beutay:</h3>

          <h4 class="card-text">Manicure<span>______15$</span></h4>
          <h4 class="card-text">Hair Style <span>______35$</span></h4>
          <h4 class="card-text">Mackeup <span>______30$</span></h4>
          <div class="BUTTON">
            <button type="button" class="btn btn-outline-secondary">Book NOW</button>
          </div>
        </div>
      </div>
      <!-- <span>-----------------</span> -->

      <div class="card w-75 mb-3">
        <div class="card-body">
          <h3 class="card-title">Price For Home Services:</h3>

          <h4 class="card-text">Manicure<span>______20$</span></h4>
          <h4 class="card-text">Hair Style <span>______40$</span></h4>
          <h4 class="card-text">Mackeup <span>______35$</span></h4>
          <div class="BUTTON">
            <button type="button" class="btn btn-outline-secondary">Book NOW</button>
          </div>
        </div>
      </div>


    </div>

  </div>


  <!-- END  SECTION FOR PRICE -->



  {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa-solid fa-left-long"></i></span>
    <span class="visually-hidden">Previous</span>
  </button>
   --}}



  <!-- start section for deiscaount -->
  <div class="containerDiscount ">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner bg-primary" width="100%">
        <div class="carousel-item active ">
          <img src="../pic/discaount_pic/sale2.png" class="d-block " alt="SALE1">
        </div>
        <div class="carousel-item">
          <img src="../pic/discaount_pic/sale1.png" class="d-block " alt="SALE2">
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

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->


      <!-- <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div> -->


      <!-- Left -->


    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>COTTON CANDY
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. </p>
                    <!-- socialMedia -->
      <div>
        <a href="" class="me-4 link-secondary icons">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary icons">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary icons">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary icons">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary icons">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary icons">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- socialMedia -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Our Salons
            </h6>
            <p>
              <a href="#!" class="text-reset">Loacation</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contact Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">About Us</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Working Hours
            </h6>
            <p>
              Monday-friday</p>
            <p>09:00-22:00</p>
            <P> .</P>

            <p>Saturday-sunday</p>

            <p>11:00-00:00</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> Jordan, Aqaba</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              cottonCandy@gmail.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2023 Copyright:AbrarAlhillawi
      <!-- <a class="text-reset fw-bold" href="https://mdbootstrap.com/"> </a>-->
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


  <!-- END Section for footer -->




</body>

</html>



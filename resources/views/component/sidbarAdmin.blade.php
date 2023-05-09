
      <!-- / Menu -->
    
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
          
            <span><img src="{{ URL::asset('../PIC/roj2.png') }} " width="220px" height="70px"></span>
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">CottonCandy</span> --}}
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item @yield('DashboardActive')">
            <a href="/INFO" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>

          <!-- Users -->
          <li class="menu-item @yield('UserActive')">
            <a href="/user" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Users</div>
            </a>
          </li>


           <!-- Category -->
          <li class="menu-item @yield('CategoryActive')">
            <a href="/category" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Category</div>
            </a>
          </li>
          
        {{-- ايقونه للفورم  --}}
          {{-- <i class="menu-icon tf-icons bx bx-detail"></i> --}}
          {{-- ايقونه للجوزات  --}}
          {{-- <i class="menu-icon tf-icons bx bx-table"></i> --}}

          <!-- Forms & Tables -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Pages</span></li>
         

          <!-- Forms -->
          
          <li class="menu-item @yield('HomeServicesActive')">
            <a href="/homeServices" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">Home Services</div>
            </a>
          </li>
          {{-- for salonat --}}
          <li class="menu-item  @yield('SalonsActive')">
            <a href="{{route('salon.index')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">Salons</div>
            </a>
          </li>
          {{-- for contact --}}
          <li class="menu-item @yield('ContactActive')">
            <a href="{{route('Contact.index')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">Contact</div>
            </a>
          </li>




          <li class="menu-header small text-uppercase"><span class="menu-header-text">Services</span></li>
          
          {{-- for salonat_services --}}
          <li class="menu-item @yield('SalonServicesActive') ">
            <a href="{{route('salonServices.index')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">Salons-services</div>
            </a>
          </li>

          {{-- for homeServices_services --}}
          <li class="menu-item @yield('homeServices-servicesActive') ">
            <a href="{{route('homeServices_Services.index')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">homeServices-services</div>
            </a>
          </li>

          <li class="menu-header small text-uppercase"><span class="menu-header-text">Reservation</span></li>
          
          {{-- for salonat_reservation --}}
          <li class="menu-item @yield('Salons-ReservationActive')">
            <a href="{{route('SalonReservation.index')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">Salons-Reservation</div>
            </a>
          </li>
          <li class="menu-item @yield('Home-ReservationActive')">
            <a href="{{route('HomeServicesReservation.index')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">HomeServices-Reservation</div>
            </a>
          </li>

          {{-- for homeServices_reservation --}}
          {{-- <li class="menu-item ">
            <a href="{{route('homeServicesReservation.index')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">homeServices-Reservation</div>
            </a>
          </li> --}}

{{-- discount --}}
          <li class="menu-item @yield('DiscountActive')">
            <a href="/discount" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Discount</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Test WEB BiisCorp">
    <meta name="author" content="BootstrapDash">
    <link rel="icon" href="{{ asset('icon.png') }}" sizes="32x32">
    <title>@yield('title')</title>
    <link href="{{ asset('lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/typicons.font/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datetimepicker/css/jquery.datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loading.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  </head>
  <body>
    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="{{ route('home') }}" class="az-logo"><span></span>
            <img src="{{ asset('img/logo.png') }}" />
        </a>
        </div>

        <div class="az-header-right">
          <a href="https://biiscorp.com/" target="_blank" class="az-header-search-link"><i class="fas fa-search"></i></a>

          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="{{ asset('img/profil/dicky.jpg') }}" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="{{ asset('img/profil/dicky.jpg') }}" alt="">
                </div>
                <h6>Dicky DNS</h6>
                <span>Web Programmer</span>
              </div>
              <a href="https://www.linkedin.com/in/dickydns/" target="_blank" class="dropdown-item"><i class="typcn typcn-user-outline"></i> Profile</a>
              <a href="mailto:dickydns1@gmail.com" target="_blank" class="dropdown-item"><i class="typcn typcn-mail"></i> E-mail</a>
              <a href="wa.me/62895325927272" target="_blank" class="dropdown-item"><i class="typcn typcn-phone"></i> Whatsapp</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @yield('content')

    <div class="az-footer ht-40">
      <div class="container ht-100p pd-t-0-f">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Test WEB Programmer - BiisCorp © 2024</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Dickydns </span>
      </div>
    </div>


    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('lib/sweetalert/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('lib/datetimepicker/js/jquery.datetimepicker.js') }}"></script>
    <script src="{{ asset('lib/krajee-fileinput/js/krajee-fileinput.min.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>

    @yield('extrascript')
  </body>
</html>

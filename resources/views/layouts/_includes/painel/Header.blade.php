   
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('titulo')</title>
   <!-- base:css -->
 <link rel="stylesheet" href="{{asset("/assets/vendors/mdi/css/materialdesignicons.min.css")}}">
 <link rel="stylesheet" href="{{asset("/assets/vendors/feather/feather.css")}}">
 <link rel="stylesheet" href="{{asset("/assets/vendors/base/vendor.bundle.base.css")}}">

 <!-- endinject -->
 <!-- plugin css for this page -->
 <link rel="stylesheet" href="{{asset("/assets/vendors/flag-icon-css/css/flag-icon.min.css")}}"/>
 <link rel="stylesheet" href="{{asset("/assets/vendors/font-awesome/css/font-awesome.min.css")}}">
 <link rel="stylesheet" href="{{asset("/assets/vendors/jquery-bar-rating/fontawesome-stars-o.css")}}">
 <link rel="stylesheet" href="{{asset("/assets/vendors/jquery-bar-rating/fontawesome-stars.css")}}">
 <!-- End plugin css for this page -->
 <!-- inject:css -->
 <link rel="stylesheet" href="{{asset("/assets/css/style.css")}}">
 <!-- endinject -->
 <link rel="shortcut icon" href="{{asset("/assets/images/favicon.png")}}" />
</head>
<body>
  <div class="container-scroller">
    @include('layouts._includes.painel.Menu')
    <div class="main-panel">
      <div class="content-wrapper">

        @yield('conteudo')

        @include('layouts._includes.painel.Footer')
      </div>
      <!-- main-panel ends -->
    </div>
      <!-- page-body-wrapper ends -->
  </div>
      <!-- container-scroller -->
</body>
</html>
      
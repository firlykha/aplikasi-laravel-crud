<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Selamat Datang')</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  @include('frontend.layouts.header-script')

</head>

<body>

  @include('frontend.layouts.navbar')

  @yield('content')
  
  @include('frontend.layouts.footer') 
  
  @include('frontend.layouts.footer-script')
  
</body>

</html>

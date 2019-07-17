<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'Laravel 5 Blog')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  		
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


 @include('backend.layouts.header')

 @include('backend.layouts.sidebar')

 @yield('content')

 @include('backend.layouts.footer')
  

</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>@yield('title')</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}" />
  <!--slick slider stylesheet -->
  <link rel="stylesheet"
    href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css') }}" />
  <link rel="stylesheet"
    href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css') }}" />

  <!-- fonts style -->
  <link href="{{ url('https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap') }}" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="{{ url('css/slick-theme.css') }}" />
  <!-- font awesome style -->
  <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('css/responsive.css') }}" rel="stylesheet" />
  <link href="{{ url('css/detail.css') }}" rel="stylesheet" />
  
</head>

<body>
  <div class="main_body_content">
    @include('inc/header')

    @yield('content')
  </div>
  
  @include('inc/footer')

</body>
</html>
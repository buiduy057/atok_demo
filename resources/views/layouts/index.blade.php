<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>Trade Vips  @yield('title')</title>
  <base href="{{asset('')}}">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/banner.css">
  <link rel="stylesheet" href="css/main-content.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    @yield('content')
    @include('layouts.footer')
  <script src="js/bootstrap.bundle.min.js" ></script>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="js/slider.js" type="text/javascript" charset="utf-8"></script>
  <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
  @yield('script')
  <script
    src="https://www.paypal.com/sdk/js?client-id=AccnUjkk6xkLffqpJI53Sydqt1rCU_yQ_hiEq0AYXLczG6f-4Ev_sc5yZI4NdCCciDVLe6vVW3HAKzKL&locale=en_US">
  </script>
  
</body>
</html>
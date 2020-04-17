<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Imperial Boootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  {{-- <link href="favicon.ico" rel="shortcut icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  {{-- <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}

  <!-- Libraries CSS Files -->
  {{-- <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"> --}}
  {{-- <link href="lib/animate-css/animate.min.css" rel="stylesheet"> --}}

  <!-- Main Stylesheet File -->
  {{-- <link href="css/style.css" rel="stylesheet"> --}}

  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>


    <div id="preloader"></div>



@yield('content')



  <!-- Required JavaScript Libraries -->
  {{-- <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script> --}}

  <!-- Template Specisifc Custom Javascript File -->
  {{-- <script src="js/custom.js"></script> --}}

  <script src="{{asset('js/app.js')}}"></script>

  {{-- <script src="contactform/contactform.js"></script> --}}


</body>

</html>
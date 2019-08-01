<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{('styles/bootstrap4/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{('styles/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{('styles/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{('styles/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" href="{{('styles/plugins/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{('styles/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{('styles/single_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{('styles/single_responsive.css')}}">
</head>
<body>

    @include('header')
    @yield('products_content')
    @include('benefit')
    @include('news_letter')
    @include('footer')

    


    <script src="{{('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{('styles/bootstrap4/popper.js')}}"></script>
    <script src="{{('styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{('styles/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{('styles/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{('styles/plugins/easing/easing.js')}}"></script>
    <script src="{{('styles/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
    <script src="{{('js/single_custom.js')}}"></script>    
</body>
</html>
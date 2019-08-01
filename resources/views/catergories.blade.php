<!DOCTYPE html>
<html lang="en">
<head>
<title>Chuol</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/categories_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/categories_responsive.css')}}">
</head>
<body>
        <div class="super_container">
            @include('header')
            @yield('catergories_content')
            @include('benefit')
            @include('news_letter')
            @include('footer')
        </div>
    
    
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
        <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
        <script src="{{asset('styles/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('styles/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
        <script src="{{asset('styles/plugins/easing/easing.js')}}"></script>
        <script src="{{asset('styles/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
        <script src="{{asset('js/categories_custom.js')}}"></script>
    </body>
</html>

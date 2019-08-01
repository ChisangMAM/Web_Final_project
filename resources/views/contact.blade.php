<!DOCTYPE html>
<html>
<header>
	<title>Chuol</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" href="{{asset('styles/plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_responsive.css')}}">
<body>
        <div class="super_container">
            @include ('header')
            @yield ('contact_content')
            {{-- @include('news_letter')
            @include ('footer') --}}
        </div>
            
    
        <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
        <script src="{{asset('styles/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('styles/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
        <script src="{{asset('styles/plugins/easing/easing.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
        <script src="{{asset('styles/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
        <script src="{{asset('js/contact_custom.js')}}"></script>
</body>
</html>
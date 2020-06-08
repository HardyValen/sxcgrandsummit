<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Meta Description --}}
    <meta name="description" content="The biggest annual event held by StudentsxCEOs Bandung Chapter, a platform for selected students across Indonesia to solve real problems related to Sustainable Development Goals (SDGs) and propose it to company & non-government organization">

    {{-- Icon --}}
    <link rel="icon" type="image/png" sizes="340x340" href="{{URL::asset('assets/logo/favicon.png')}}">
    <meta name="theme-color" content="#024597">
    <meta name="msapplication-navbutton-color" content="#024597">
    <meta name="apple-mobile-web-app-status-bar-style" content="#024597">

    {{-- CSS --}}    
    <link rel="stylesheet" href="{{URL::asset('css/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css?id=2')}}">
    
    {{-- JS --}}
    
    
    {{-- Title --}}
    <title>@yield('title')</title>
    
    {{-- Style --}}
    @yield('style') 
</head>

<body>
    @yield('content')
</body>

</html>

@yield('script')
<script type="text/javascript" src="{{URL::asset('js/smooth-scroll.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/links-redirect.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/navigation.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/summit-add-member.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/slider.js')}}"></script>

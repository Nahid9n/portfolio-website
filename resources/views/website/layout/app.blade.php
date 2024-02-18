<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanvir Hasan Nahid | @yield('title')</title>

    @include('website.layout.style')
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
    @include('website.layout.header')
<!-- Header End -->

            @yield('body')

<!-- Footer Section Begin -->
    @include('website.layout.footer')
<!-- Footer Section End -->

@include('website.layout.script')
</body>


</html>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    @include('layouts.head')
</head>

<body class="slides scroll default firstSlide stage-1">
    @include('layouts.navbarhome')
    @yield('contents')
    @include('sweetalert::alert')
    @include('layouts.Footerhome')
    @include('layouts.scripthome')
    @include('layouts.script')
</body>

</html>
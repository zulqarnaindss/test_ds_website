<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="slides animated smooth scroll default firstSlide stage-1">
@include('layouts.navbarhome')
    @yield('contents')
    @include('sweetalert::alert')
    @include('layouts.Footerhome')
    @include('layouts.scripthome')
    @include('layouts.script')
</body>

</html>
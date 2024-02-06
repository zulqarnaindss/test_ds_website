<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    @include('layouts.head')
</head>

<body class="slides scroll default firstSlide stage-1">
    <div id="myScrollableElement">
        @include('layouts.Navbar_For_BC_Landing')
        @yield('contents')
        @include('sweetalert::alert')
        @include('layouts.Footer_For_Rem')
    </div>
    @include('layouts.scripthome')
    @include('layouts.script')
</body>

</html>
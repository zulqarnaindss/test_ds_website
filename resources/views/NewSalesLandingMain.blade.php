<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    @include('layouts.head')
</head>

<body class="slides scroll default firstSlide stage-1">
    <div id="myScrollableElement">
        @include('layouts.navbarhome')
        @yield('contents')
        @include('sweetalert::alert')
        @include('layouts.Footer_For_Sales_Landing')
    </div>
    @include('layouts.scripthome')
    @include('layouts.script')
</body>

</html>
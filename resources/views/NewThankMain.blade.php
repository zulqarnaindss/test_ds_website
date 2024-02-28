<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    @include('layouts.head')
</head>

<body class="slides scroll default firstSlide stage-1">
    <div id="myScrollableElement">
        @include('layouts.navbarhome')
        @yield('contents')
        @include('layouts.Footer_For_Thank')
    </div>
    @include('layouts.scripthome')
    @include('layouts.script')
</body>

</html>
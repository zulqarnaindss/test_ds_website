<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.thank_head')
</head>
<body class="slides scroll default firstSlide stage-1">
@include('layouts.navbar_fo_landing')
    @yield('contents')
    @include('sweetalert::alert')
    @include('layouts.script')
</body>
</html>
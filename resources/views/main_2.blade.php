<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="slides scroll default firstSlide stage-1">
    @include('layouts.navbar')

    @yield('contents')
    @include('layouts.script')
</body>

</html>
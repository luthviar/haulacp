<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body id="body">
@include('layouts.header')
@yield('content')
@include('layouts.footer')
@include('layouts.script')
@yield('script')
</body>
</html>

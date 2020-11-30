
<html>

<head>
    <title>Laravel</title>
</head>

<body>

    @section('header')
        Hier ist unser Header.
        @show
        {{-- @show ist das gleiche wie : @yield('header') @endsection --}}
        
    <div class="main-content">
        na mal sehen

        @yield('content')
    </div>

    @yield('footer')

</body>
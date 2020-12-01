
<html>

<head>
    <title>Laravel</title>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
    integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q="
    crossorigin="anonymous"
    />
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"
    integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI="
    crossorigin="anonymous"
    ></script>
</head>

<body>
<!-- 
    @section('header')
        Hier ist unser Header.
        @show
        {{-- @show ist das gleiche wie : @yield('header') @endsection --}}
        
    <div class="main-content">
        na mal sehen

        @yield('content')
    </div>

    @yield('footer')

    <hr>

    {{-- Die Datei footer.blade.php aus dem Verzeichnis resources/views/layouts/ wird eingebunden --}}
    @include('layouts.footer') -->

    @include('layouts/header')

    <div class = "ui container">
        @yield('content')
    </div>

</body>
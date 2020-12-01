<!-- Chield View -->
<!-- Gespeichert in resources/views/child.blade.php -->

@extends('layouts.app') {{-- Erweitert die app.blade.php --}}

@section('header')
@parent
{{-- Nimmt den Teil "Hier ist unser Header" - würde @parent weggelassen werden, würde der Inhalt der Parent Section überschrieben werden. Die Ausgabe der gesamten Section wäre dann nicht mehr: 'Hier ist unser Header. Unser Header ist schön' sondern nur noch 'Unser Header ist schön'  --}}
<p>Unser Header ist schön</p> {{-- fügt den Text "unser Header ist schön zur Section header hinzu  --}}
@endsection

{{-- An dieser Stelle definieren wir den Inhalt, der in der app.blade.php an der Stelle @yield('content') eingesetzt wird. --}}

@section('content')
<p>Dieser Inhalt wird eingesetzt</p>
@endsection

@section('footer')
<p>dies ist der Footer eingefügt mit '@ yield' von child.blade.php </p>

@endsection
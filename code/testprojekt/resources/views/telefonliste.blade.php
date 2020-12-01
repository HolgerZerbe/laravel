<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> -->

  

        <!-- <style>
            body {
                font-family: 'Verdana';
                margin: 0;
                padding: 0;
            }
            .container {
                height: 100vH;
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .headline1 {
                text-align: center;
           
            }

            table {
                background: darkgrey;
            }

            tr {
                background: lightgrey;
            }
            th, td {
                padding: 5px;
            }

        </style> -->
    <!-- </head>
    <body> -->
 
<!--  
    <div class='container'>
            <h1 class='headline1'>Telefonliste</h1>
                <p>Alter < 18 und keine Telefonnummer => grün<br>
                Alter ≥18 und keine Telefonnumer => blau<br>
                Alter < 18 und Telefonnummer => rot<br>
                Alter ≥ 18 und Telefonnummer => magenta </p>
            <table>
                <thead>
                    <tr>
                        <th>Name</th><th>Alter</th><th>Telefonnummer</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($users as $user)

                @if ($user['age'] < 18 && !(@isset($user['phone'])))
                <tr style = "color: green"> <td>{{ $user['name'] }}</td><td>{{ $user['age'] }}</td><tr>
                @elseif ($user['age'] >= 18 && !(@isset($user['phone'])))
                <tr style = "color: blue"> <td>{{ $user['name'] }}</td><td>{{ $user['age'] }}</td><tr>
                @elseif ($user['age'] < 18 && (@isset($user['phone'])))
                <tr style = "color: red"> <td>{{ $user['name'] }}</td><td>{{ $user['age'] }}</td><td>{{ $user['phone']}}</td><tr>
                @else
                <tr style = "color: magenta"> <td>{{ $user['name'] }}</td><td>{{ $user['age'] }}</td><td>{{ $user['phone']}}</td><tr>
                @endif

            

            @endforeach
            </tbody>
        </table>
        
        
    </div> -->


    <!-- </body>
</html> -->

@extends('layouts.app')

@section('content')
    <div class="ui grid">
        @foreach ($users as $user)
            <div class="four wide column">
                <div class="ui card">
                    <div class="content">
                        <p class="header"> {{$user['name']}}</p>
                        <div class="description">{{$user['email']}}<br>Alter: {{$user['age']}}</div>
                    </div>
                    @isset($user['phone'])
                    <div class="extra content">
                        <a>
                            <i class="phone icon"></i>
                            {{$user['phone']}}
                        </a>
                    </div>
                    @endisset
                </div>
            </div> 
        @endforeach       
    </div>
@endsection

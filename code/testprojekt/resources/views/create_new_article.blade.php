<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

  

        <style>
 

        </style>
    </head>
    <body>

    <div class='container'>
<!-- 
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->


            <form action="/article/store" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    
                    <input type="text" name="title" class="form-control input-lg @error('title')  border border-danger @enderror" placeholder="title" required>
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    <input type="text" name="text" class="form-control input-lg @error('title')  border border-danger @enderror" placeholder="text" required>
                    <input type="number" name="interest_id" class="form-control" min = 1 max = 6>
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i>Speichern
                    </button>
                
            </form>
           
    </div>
    </body>
</html>

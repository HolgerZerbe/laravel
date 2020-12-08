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

            <form action="/article/storeUpdate" method="POST" class="form-horizontal">
                    @csrf
                    @method('PUT')

                    
                    <input type="hidden" name="id" class="form-control" value="{{$article['id']}}">
                    <input type="text" name="title" class="form-control" value="{{$article['title']}}">
                    <input type="text" name="text" class="form-control" value="{{$article['text']}}">
                    <input type="number" name="interest_id" class="form-control" min = 1 max = 6 placeholder="{{$article['interest_id']}}">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i>Speichern
                    </button> 
                
            </form>
           
    </div>
    </body>
</html>

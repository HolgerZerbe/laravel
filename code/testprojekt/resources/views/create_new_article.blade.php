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


            <form action="/article/store" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <!-- <input type="hidden" name="id" class="form-control" value=""> -->
                    <input type="text" name="title" class="form-control" placeholder="title">
                    <input type="text" name="text" class="form-control" placeholder="text">
                    <input type="number" name="interest_id" class="form-control" min = 1 max = 6>
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i>Speichern
                    </button>
                
            </form>
           
    </div>
    </body>
</html>

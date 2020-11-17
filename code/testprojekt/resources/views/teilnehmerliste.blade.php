<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

  

        <style>
            body {
                font-family: 'Verdana';
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
 

        </style>
    </head>
    <body>

    <div class='container'>
            <h1 class='headline1'>Teilnehmerliste</h1>
            <ul>
            <?php
            sort($alleTeilnehmer);
            foreach($alleTeilnehmer as $einzelneTeilnehmer) {
                ?>
                <li><?=(ucfirst($einzelneTeilnehmer)); ?></li>
                <?php
            }
            ?> 
            </ul>
    </div>
    </body>
</html>

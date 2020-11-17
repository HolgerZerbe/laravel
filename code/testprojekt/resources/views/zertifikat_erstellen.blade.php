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
                color: green;
                text-shadow: 5px 5px 3px yellowgreen;
            }
            .headline2 {
                text-align: center;
            }

        </style>
    </head>
    <body>

    <div class='container'>
            <h1 class='headline1'>Hallo <?=$user; ?></h1>
            <h2 class='headline2'>Neues Zertifikat erstellt</h2>

            <?php 
            $frameworkText = isset($framework) ? 'Dein Framework ist: ' . $framework : null;
            ?>
            <p><?=$frameworkText; ?></p>
    </div>
    </body>
</html>

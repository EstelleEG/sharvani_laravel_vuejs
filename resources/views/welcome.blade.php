<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sharvani</title>

    </head>

    <body>
        <!-- <h1>this is the body</h1> -->
        <div id="app">
            <!-- we load the component -->
            <mainapp></mainapp>

        </div>
    </body>
    <script src="{{mix('/js/app.js')}}"></script> 
</html>
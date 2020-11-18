<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MeinTerminplaner</title>

        <script src="{{asset('js/app.js')}}" defer></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    </head>
    <body class="bg-dark">
        <div class="container-fluid">
            <div class="row justify-content-center" style="height: 300px; padding-top: 150px">
                <h1><a href="{{ url('/') }}" class="text-light">MeinTerminplaner</a></h1>
            </div>    
            <div class="row justify-content-center">
                <div class="col-sm-4 col-lg-4 bg-white border border-white rounded">
                {{ $slot }}
                </div>
            </div> 
        </div>
    </body>
</html>

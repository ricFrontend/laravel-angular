<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> 

        <!-- Styles -->
        <style>
            body        { padding-top:30px; }
            form        { padding-bottom:20px; }
            .comment    { padding-bottom:20px; }
            .capitalize    { text-transform:capitalize; }
        </style>

    </head>
    <body class="container" ng-app="demoApp" ng-controller="mainController as miController">
        <div class="col-md-8 col-md-offset-2">

            
            <div class="page-header">
                <h2>Laravel y Angular demo</h2>
                <h4>Ingresa un nombre y escoge el género cinematográfico de tu preferencia</h4>
            </div>
            
            @include('form')
            @include('posts')

        </div>
        <!-- JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
        <script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>

        <script type="text/javascript">
            var config = {
                apiKey: "{{ config('services.firebase.api_key') }}",
                authDomain: "{{ config('services.firebase.auth_domain') }}",
                databaseURL: "{{ config('services.firebase.database_url') }}",
                storageBucket: "{{ config('services.firebase.storage_bucket') }}",
            };
            firebase.initializeApp(config);
        </script>

        <script src="js/controllers/mainCtrl.js"></script> 
        <script src="js/services/commentService.js"></script> 
        <script src="js/app.js"></script>

    </body>
</html>

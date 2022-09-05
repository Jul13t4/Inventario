<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon; charset=binary">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon; charset=binary">

    <title>Inventario Almacen Unisalud</title>
    <meta name="revisit-after" content="1 hour">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<style>
     ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgb(0 0 0 / 17%);
            box-shadow: inset 0 0 6px rgb(0 0 0 / 17%);
            /* border-radius: 10px; */
            background-color: #fff;
        }
        
         ::-webkit-scrollbar {
            width: 8px;
            -webkit-box-shadow: inset 0 0 6px rgb(0 0 0 / 17%);
            /* border-radius: 10px; */
            background-color: #fff;
        }
        
         ::-webkit-scrollbar-thumb {
            /* border-radius: 10px; */
            -webkit-box-shadow: inset 0 0 6px rgb(0 0 0 / 17%);
            background-color: #005883 !important;
        }
</style>
<body>   
    <div id="app">
        <v-app>
            <v-main>

            <!-- Provides the application the proper gutter -->
                <v-container fluid>

                <!-- If using vue-router -->
                <!-- <router-view></router-view> -->                
                <!-- <example-component></example-component> -->
            </v-container>
            </v-main>
        </v-app>

    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .v-text-field input {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<div id="app">
    <v-app dark>
            <v-container>
                <v-app-bar app dark>
                    <!-- -->
                    <v-toolbar-title>S'COOL</v-toolbar-title>
                    <v-spacer></v-spacer>

                    <v-list>
                        <v-list-item>
                            <v-btn >home</v-btn>
                            <v-btn >profile</v-btn>
                            <v-btn >about us</v-btn>
                            <v-btn >contact us</v-btn>
                        </v-list-item>
                    </v-list>
                </v-app-bar>
            </v-container>









        <login-form ></login-form>
        <!-- Sizes your content based upon application components  -->
        <v-content>




            <!-- Provides the application the proper gutter -->
            <v-container fluid>
                <side-bar></side-bar>
                <!-- If using vue-router -->
            </v-container>
        </v-content>
        <crud v-bind:teachers="{{$teachers}}" ></crud>
        <crud-student :students="{{$students}}"></crud-student>
        <crud-admin :admins="{{$admins}}"></crud-admin>
        <crud-user v-bind:users="{{$users}}" ></crud-user>

    </v-app>


</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

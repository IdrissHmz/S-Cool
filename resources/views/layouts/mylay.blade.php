@extends('layouts.app')

@section('content')



<div id="app">
    <v-app dark>



        <div class="dashboard-grid">
            <div class="dashboard-sideBar">
                <v-container fluid>
                    <side-bar></side-bar>
                    <!-- If using vue-router -->
                </v-container>
            </div>
            <div class="dashboard-main">
                <crud v-bind:teachers="{{$teachers}}" ></crud>
                <crud-student :students="{{$students}}"></crud-student>
                <crud-admin :admins="{{$admins}}"></crud-admin>
                <crud-user v-bind:users="{{$users}}" ></crud-user>
            </div>
        </div>
        <!-- Sizes your content based upon application components  -->





            <!-- Provides the application the proper gutter -->




    </v-app>


</div>

@endsection

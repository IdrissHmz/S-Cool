@extends('layouts.app')

@section('content')



    <div id="app">





            <div class="dashboard-grid">
                <div class="dashboard-sideBar">
                    <div class="profile-info">
                        <div class="logo" ></div>
                        <span class="info-email"> {{Auth::user()->email}} </span>
                    </div>
                    <div class="links">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Dashboard</a>
                                <ul class="sub">
                                    <li><a href="">Users</a></li>
                                    <li><a href="">Admins</a></li>
                                    <li><a href="">Teachers</a></li>
                                    <li><a href="">Students</a></li>
                                    <li><a href="">Marks</a></li>
                                    <li><a href="">Alerts</a></li>
                                    <li><a href="">Demands</a></li>
                                </ul>
                            </li>
                            <li><a href="">About Us</a></li>
                        </ul>
                    </div>
                </div>




                <div class="dashboard-main">
                    <v-app dark>
                    <crud v-bind:teachers="{{$teachers}}" ></crud>
                    <crud-student :students="{{$students}}"></crud-student>
                    <crud-admin :admins="{{$admins}}"></crud-admin>
                    <crud-user v-bind:users="{{$users}}" ></crud-user>
                    <crud-mark v-bind:marks="{{$marks}}"></crud-mark>
                    </v-app>
                </div>

            </div>
            <!-- Sizes your content based upon application components  -->





            <!-- Provides the application the proper gutter -->







    </div>

@endsection

@extends('layouts.app')
@section('head')
    <META charset="utf-8"></META>
@stop

@section('heading')
    <div class='h1'>
        Ma Base de donnees contient :
    </div>
@stop
@section('content')

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>

        </tr>
        @foreach($admins as $admin)
            <tr>
                <td>{{$admin->user->first_name ?? ''}}</td>
                <td>{{$admin->user->last_name ?? ''}}</td>
                <td>{{$admin->user->email ?? ''}}</td>

                {!! Form::open(['action'=>['StudentController@destroy',$admin],'method'=>'POST']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete')}}
                {!! Form::close() !!}
            </tr>
        @endforeach
    </table>

    <div class='h2'>
        "je suis administrateur"
    </div>

@stop
@section('footer')
    ceci est mon test concernant les views et les migrations
@stop





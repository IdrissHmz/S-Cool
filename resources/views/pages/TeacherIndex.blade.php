@extends('pages.layout')
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
            <th>Module</th>
        </tr>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->user->first_name ?? ''}}</td>
                <td>{{$teacher->user->last_name ?? ''}}</td>
                <td>{{$teacher->user->email ?? ''}}</td>
                <td>{{$teacher->module ?? ''}}</td>

                {!! Form::open(['action'=>['TeacherController@destroy',$teacher],'method'=>'POST']) !!}
                {{ Form::hidden('_method','DELETE')}}
                {{ Form::submit('Delete')}}
                {!! Form::close() !!}
            </tr>
        @endforeach
    </table>

    <div class='h2'>
        "je suis enseignant"
    </div>

@stop
@section('footer')
    ceci est mon test concernant les views et les migrations
@stop



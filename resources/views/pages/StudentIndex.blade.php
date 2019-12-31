@extends('layouts.mylay')
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
            <th>Matricule</th>
            <th>Group</th>
            <th>Promo</th>
        </tr>
        <div>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->user->first_name ?? ''}}</td>
                    <td>{{$student->user->last_name ?? ''}}</td>
                    <td>{{$student->user->email ?? ''}}</td>
                    <td>{{$student->matricule ?? ''}}</td>
                    <td>{{$student->group ?? ''}}</td>
                    <td>{{$student->promo ?? ''}}</td>

                    {!! Form::open(['action'=>['StudentController@destroy',$student],'method'=>'POST']) !!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete')}}
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </div>

    </table>

    <div class='h2'>
        "je suis etudiant"
    </div>

@stop
@section('footer')
    ceci est mon test concernant les views et les migrations
@stop




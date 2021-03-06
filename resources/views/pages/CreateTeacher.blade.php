@extends('layouts.app')
@section('head')
    <META charset="utf-8"></META>
@stop

@section('heading')
    <div class='h1'>
        Creer un enseignant :
    </div>
@stop
@section('content')
    {!! Form::open(['url' => 'admin\dashboard\teachers' , 'method'=>'POST']) !!}
    <div>
        <fieldset>
            {!! Form::label('first_name', 'First Name'); !!}
            {!! Form::text('first_name'); !!}
            <br>
            {!! Form::label('last_name', 'Last Name'); !!}
            {!! Form::text('last_name'); !!}
            <br>
            {!! Form::label('email', 'Email Adresse'); !!}
            {!! Form::email('email', $value = null, $attributes = []); !!}
            <br>
            {!! Form::label('password', 'Password'); !!}
            {!! Form::password('password'); !!}
            <br>
            <br>
            {!! Form::label('module', 'Module'); !!}
            {!! Form::select('module',[
            'ARCHI1' => 'ARCHI1' ,
            'ARCHI2' => 'ARCHI2' ,
            'ANA1' => 'ANA1' ,
            'ALG1' => 'ALG1' ,
            'SYC1' => 'SYC1' ,
        ]); !!}
            <input type="submit" id="submit" name="submit" >
        </fieldset>
    </div>




    {!! Form::close() !!}


@stop

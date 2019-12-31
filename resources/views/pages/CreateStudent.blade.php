@extends('layouts.app')
@section('head')
    <META charset="utf-8"></META>
@stop

@section('heading')
    <div class='h1'>
        Creer un etudiant :
    </div>
@stop
@section('content')
    {!! Form::open(['url' => 'admin\dashboard\students' , 'method'=>'POST']) !!}
    <div>
        <test-vue></test-vue>
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
            {!! Form::label('matricule', 'Matricule'); !!}
            {!! Form::text('matricule'); !!}
            <br>
            {!! Form::label('group', 'Group'); !!}
            {!! Form::selectRange('group', 1, 11); !!}
            <br>
            {!! Form::label('promo', 'Promo'); !!}
            {!! Form::select('promo',[
            '1CP' => '1cp' ,
            '2CP' => '2cp' ,
            '1CS' => '1cs' ,
            '2CS' => '2cs' ,
            '3CS' => '3cs' ,
        ]); !!}
            <input type="submit" id="submit" name="submit" >
        </fieldset>
    </div>




 {!! Form::close() !!}


@stop

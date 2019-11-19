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
            <th>Name</th>
            <th>category</th>
            <th>Email</th>
            <th>password</th>
        </tr>
        @foreach($customers as $cust)
            <tr>
                <td>{{$cust->name ?? ''}}</td>
                <td>{{$cust->category ?? ''}}</td>
                <td>{{$cust->email ?? ''}}</td>
                <td>{{$cust->password ?? ''}}</td>
            </tr>
        @endforeach
    </table>

    <div class='h2'>
        ca marche !!!
    </div>

@stop
@section('footer')
    ceci est mon test concernant les views et les migrations
@stop

@extends('layouts.main')

@section('content')

    @foreach($cds as $cd)


        <h1>{{$cd->id}}</h1>
        <h1>{{$cd->name}}</h1>
        <h1>{{$cd->description}}</h1>
        <h1>{{$cd->price}}</h1>


    @endforeach

@endsection
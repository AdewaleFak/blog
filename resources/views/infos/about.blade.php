@extends('layouts.main')

@section('title', "about page")
@section('content')

<?php
        echo $country;
        foreach ($mydata as $k => $v)
            {
                echo "<li>".$k. " ; " . $v . "</li>";
            }
?>
    <h1>About Page</h1>

@foreach($mydata as $k => $v)
    <li>{($k)}</li>
    @endforeach
@endsection
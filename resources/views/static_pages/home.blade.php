@extends('layouts.default')
@section('title', 'home')
@section('content')
@if (session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
        Now what u see is <a href="#">APP</a>
    </p>
    <p>
        All start from here。
    </p>
    <p>
        Now <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">Sign Up</a>
    </p>
</div>
@stop
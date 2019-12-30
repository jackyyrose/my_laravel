@extends('layouts.default')
@section('title', 'home')
@section('content')
@if (session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
@if (Auth::check())
<div class="row">
    <div class="col-md-8">
        <section class="status_form">
            @include('shared._status_form')
        </section>
    </div>
    <aside class="col-md-4">
        <section class="user_info">
            @include('shared._user_info',['user'=>Auth::user()])
        </section>
    </aside>
</div>
@else
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
@endif
@stop
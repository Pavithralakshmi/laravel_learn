@extends('layouts.app')
@section('title', 'Header')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Our @if($totalmembers > 20) Big @endif Team</h1> <p class="lead">Team Page Content</p>
    </div>
</div>
<a class="btn btn-primary btn-lg" style="float:right;" href="home" role="button">Go To About Us</a>
@endsection

@section('footer')
<nav class="container navbar fixed-bottom navbar-light bg-light" style="text-align-last: center;">
    <a class="navbar-brand" href="#">© 2013-2020 {{$company}}.<br>Designed with </a>
</nav>
@endsection
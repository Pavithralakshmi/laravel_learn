@extends('layouts.app')
@section('title', 'Post')

@section('header')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Post</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>
@endsection
@section('content')
<a class="btn btn-primary btn-lg" style="float:right;" href="create" role="button">create Data</a>
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
{{ $posts->links() }}

<div class="card-deck">
    @foreach($posts as $post)
    <div class="col-lg-4" style="margin-bottom: 20px;">
        <div class="card">
            <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap" height="230px">
            <div class="card-body">
                <h2>{{ $post->title }}</h2>
                <p class="card-text">{!! Illuminate\Support\Str::words( $post->desc, 10, ' ...') !!} </p>
                <!-- <p class="card-text">{{$post->desc}} </p> -->
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection

@section('footer')
<nav class="container navbar fixed-bottom navbar-light bg-light" style="text-align-last: center;">
    <a class="navbar-brand" href="#">© 2013-2020 {{$company}}.<br>Designed with </a>
</nav>
@endsection
@extends('layouts.front')

@section('banner')
    <div class="alert alert-dismissible alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Already have account? Login <a href="{{ route('login') }}" class="alert-link">here</a> instead.</strong>
    </div>
	<div class="jumbotron">
        <div class="container">
            <h1>Join Nettrack Community</h1>
            <p>Help and get help</p>
            <p>
                <a href="#" class="btn btn-primary btn-lg">Join The Community</a>
            </p>
        </div>
    </div>
@endsection
@section('heading',"Threads")

@section('content')
	@include('thread.partials.thread-list')
@endsection
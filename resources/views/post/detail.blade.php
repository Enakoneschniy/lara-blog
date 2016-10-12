@extends('layouts.app')

@section('content')
    <div class="media">
        <div class="media-body">
            <h2 class="page-header">{{$post->title}}</h2>
            {{$post->detail_text}}
            <div class="social">
                <button class="btn btn-success btn-xs like">Like</button>
                <button class="btn btn-primary btn-xs share">Share</button>
            </div>
        </div>
    </div>
@endsection
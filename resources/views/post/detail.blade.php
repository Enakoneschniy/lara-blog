@extends('layouts.app')

@section('content')
    <div class="media">
        <div class="media-body">
            <h2 class="page-header">{{$post->title}}</h2>
            {{$post->detail_text}}
            <div class="social col-md-2 col-md-offset-10">
                <div class="pull-right">
                    <button id="{{$post->id}}" class="btn btn-primary btn-xs like">
                        Like
                        <span class="badge">{{$post->likes}}</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
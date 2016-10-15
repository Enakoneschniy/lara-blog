@extends('layouts.app')

@section('content')
    <h1 class="page-header">Posts list</h1>
    <ul class="media-list">
        @foreach($posts as $post)
            <li class="media">
                <div class="media-body">
                    <a href="{{url('/posts',$post->id)}}">
                        <h2 class="media-heading">{{$post->title}}</h2>
                    </a>
                    {{$post->preview_text}}
                    <div class="social col-md-2 col-md-offset-10">
                        <div class="pull-right">
                            <button id="{{$post->id}}" class="btn btn-primary btn-xs like">
                                Like
                                <span class="badge">{{$post->likes}}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{$posts->links()}}
@endsection
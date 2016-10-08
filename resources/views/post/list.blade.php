@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <div class="col-md-12">
            <a href="#">
                <h3>{{$post->title}}</h3>
            </a>
            <div>
                {!! $post->preview_text !!}
            </div>
        </div>
        <hr>
    @endforeach
@endsection
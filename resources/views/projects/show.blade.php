@extends('layouts.app')
@section('title', $project->name)

@section('content')
    <h1>{{ $project->name }}</h1>

    <img src="/assets/img/{{ $project->img }}"></a>
    <p>{{ $project->content }}</p>

    @foreach ($project->tags as $tag )
        <a class="circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
    @endforeach
@endsection
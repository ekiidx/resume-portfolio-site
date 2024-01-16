
@extends('layouts.app')
@section('title', $tag->name)

<h1>{{ $tag->name }}</h1>
<p>{{ $tag->projects_count }} Projects</a>

@section('content')
    @foreach ($tag->projects as $project )
        <a style="display: block;" href="/projects/{{ $project->slug }}">{{ $project->name }}</a>
        <a href="/projects/{{ $project->slug }}">
        <img style="max-width: 20rem; height: auto;" src="/assets/img/{{ $project->img }}"></a>
        <p>{{ $project->content }}</p>

        @foreach ($project->tags as $tag )
        <a class="circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
        @endforeach
    @endforeach
@endsection
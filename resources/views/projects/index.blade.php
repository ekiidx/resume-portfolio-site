@extends('layouts.app')
@section('title', 'Projects')

@section('content')
    <h1>Projects</h1>
    <p>{{ $projects->count() }} Projects</p>
    @foreach ( $projects as $project )
        <a style="display: block;" href="/projects/{{ $project->slug }}">{{ $project->name }}</a>
        <a href="/projects/{{ $project->slug }}">
            <img style="max-width: 20rem; height: auto;" src="/assets/img/{{ $project->img }}"></a>
        <p>{{ $project->content }}</p>
        
        @foreach ($project->tags as $tag )
            <a class="circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
        @endforeach
    @endforeach
@endsection
@extends('layouts.app')
@section('title', $project->name)

@section('content')
    <section>
        <h1 style="font-size: 3rem;">{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>

        <div style="margin-bottom: 1rem;">
            @foreach ($project->tags as $tag )
                <a class="circle-btn btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
            @endforeach
        </div>

        <img style="margin-bottom: 1rem;" src="/assets/img/{{ $project->img }}"></a>
        <p style="white-space: pre-wrap;">{{ $project->content }}</p>
        <a href="/projects" class="btn circle-btn">All Projects (25)</a>
    </section>
@endsection
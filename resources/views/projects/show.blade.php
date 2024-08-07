@extends('layouts.app')
@section('title', $project->name)

@section('content')
    <section class="projects project-show">
        <div class="container">
            <h1 style="font-size: 3rem;">{{ $project->name }}</h1>
            <p style="margin-bottom: 1rem;">{{ $project->description }}</p>

            <div style="margin-bottom: 1rem;">
                @foreach ($project->tags as $tag )
                    <a class="circle-btn btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                @endforeach
            </div>

            <img src="/assets/img/{{ $project->img }}"></a>
            <p style="white-space: pre-wrap;">{!! $project->content !!}</p>
            <a href="/projects" class="btn circle-btn">All Projects ({{ $all_projects->count() }})</a>
        </div>
    </section>
@endsection
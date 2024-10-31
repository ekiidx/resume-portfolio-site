@extends('layouts.app')
@section('title', $project->name)

@section('content')
    <section class="projects project-show">
        <div class="container">
            <a href="https://{{ $project->link }}">
                <h1 style="font-size: calc(1.325rem + .9vw)">{{ $project->name }}</h1>
            </a>

            <p class="project-subtitle">{{ $project->description }}</p>
                
            <a class="project-link" href="https://{{ $project->link }}"><span>{{ $project->link }}</span>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 32.5 32.5" class="link-arrow" xml:space="preserve">
                <g>
                    <path class="link-arrow-path" d="M6.2,30.6c-1.5,1.5-3.2,2.9-5.1,1.1c-2.2-2-0.7-3.8,0.9-5.5c16-16,3.3-3.3,20.6-20.5C17.1,5.8,13.2,6,9.2,6.1
                    c-1.9,0-3.8-0.3-3.9-2.8C5.2,0.4,7.2,0,9.3,0c6.3,0,12.7,0,19,0c3,0,4.2,1.3,4.2,4.2c-0.1,6.3,0,12.7,0,19c0,1.9-0.2,3.8-2.8,4
                    c-2.8,0.2-3.3-1.8-3.2-4c0.1-3.9,0.3-7.9,0.6-13.5L6.2,30.6z"/>
                </g>
                </svg>
            </a>

            <div style="margin-bottom: 1rem;">
                @foreach ($project->tags as $tag )
                    <a class="circle-btn btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                @endforeach
            </div>

            <a href="https://{{ $project->link}}"><img src="/assets/img/{{ $project->img }}"></a>
            <p style="white-space: pre-wrap; font-size: 0.85rem;">{!! $project->content !!}</p>
            <a href="/projects" class="btn circle-btn">All Projects ({{ $all_projects->count() }})</a>
        </div>
    </section>
@endsection
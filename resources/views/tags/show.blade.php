@extends('layouts.app')
@section('title', $tag->name)

@section('content')

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-3 project-img">

                    <h1>{{ $tag->name }}</h1>
                    <p>{{ $tag->projects_count }} Projects</a>
                </div>
                <div class="col-9">
                </div>
            </div>

            @foreach ($tag->projects as $project )
                <div class="item">
                    <div class="row">
                        <div class="col-3 project-img">
                         
                            <a href="/projects/{{ $project->slug }}">
                                <img style="margin-bottom: 2rem;" src="/assets/img/{{ $project->img }}">
                            </a>
                        </div>
                        <div class="col-9">
                            {{-- <p>{{ $project->content }}</p> --}}
                            <a style="display: block;" href="/projects/{{ $project->slug }}">{{ $project->name }}</a>

                            @foreach ($project->tags as $tag )
                                <a class="circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
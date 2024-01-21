@extends('layouts.app')
@section('title', 'Projects')

@section('content')

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-3 project-img">

                    <h1 class="text-uppercase">Projects</h1>
                    <p>{{ $projects->count() }} Projects</p>
                </div>
                <div class="col-9">
                </div>
            </div>

            @foreach ( $projects as $project )
                <div class="item">
                    <div class="row">
                        <div class="col-3 project-img">
                            <a href="/projects/{{ $project->slug }}">
                                <img src="/assets/img/{{ $project->img }}">
                            </a>
                        </div>
                        <div class="col-9">

                            <a style="display: block;" href="/projects/{{ $project->slug }}">{{ $project->name }}</a>
                            
                            {{-- <p>{{ $project->content }}</p> --}}
                            <div>
                                @foreach ($project->tags as $tag )
                                    <a class="circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
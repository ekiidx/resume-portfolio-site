@extends('layouts.app')
@section('title', 'Projects')

@section('content')
    <section id="projects">
        <h2 class="text-uppercase">Projects</h2>
        <p>{{ $projects->count() }} Projects</p>
        
        <table class="project-table">
            <tr>
                <th>Year</th>
                <th></th>
                <th>Name</th>
                <th>Company</th>
                <th>Tags</th>
                <th>Link</th>
            </tr>

            @foreach ( $projects as $project )
                <tr>
                    <td>{{ $project->year }}</td>
                    <td><a href="/projects/{{ $project->slug }}"><img style="max-width: 7rem;" src="/assets/img/{{ $project->img }}"></a></td>
                    <td><a style="display: block; font-weight: 700;" href="/projects/{{ $project->slug }}">{{ $project->name }}</a></td>
                    <td><p>{{ $project->company }}</p></td>
                    <td><div>
                        @foreach ($project->tags as $tag )
                            <a class="btn circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                        @endforeach
                    </div></td>
                    <td class="link"><a class="project-link" href="https://{{ $project->link }}">{{ $project->link }}
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 32.5 32.5" class="link-arrow" xml:space="preserve">
                        <g>
                            <path class="link-arrow-path" d="M6.2,30.6c-1.5,1.5-3.2,2.9-5.1,1.1c-2.2-2-0.7-3.8,0.9-5.5c16-16,3.3-3.3,20.6-20.5C17.1,5.8,13.2,6,9.2,6.1
                            c-1.9,0-3.8-0.3-3.9-2.8C5.2,0.4,7.2,0,9.3,0c6.3,0,12.7,0,19,0c3,0,4.2,1.3,4.2,4.2c-0.1,6.3,0,12.7,0,19c0,1.9-0.2,3.8-2.8,4
                            c-2.8,0.2-3.3-1.8-3.2-4c0.1-3.9,0.3-7.9,0.6-13.5L6.2,30.6z"/>
                        </g>
                        </svg>
                    </a></td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
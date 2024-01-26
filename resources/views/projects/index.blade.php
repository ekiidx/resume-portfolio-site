@extends('layouts.app')
@section('title', 'Projects')

@section('content')

    <section id="projects">
        <div class="container">

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
                                <a class="circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                            @endforeach
                        </div></td>
                        <td class="link"><a href="https://{{ $project->link }}">{{ $project->link }}</a></td>
                    </tr>
                @endforeach
            </table>

        </div>
    </section>
@endsection
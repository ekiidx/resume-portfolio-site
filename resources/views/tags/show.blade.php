@extends('layouts.app')
@section('title', $tag->name)

@section('content')
    <section id="projects" class="projects">
        <div class="container">
            <div class="d-flex align-items-start justify-content-between">
                <h2 class="text-uppercase">{{ $tag->name }}</h2>
                <a class="circle-btn btn-all-projects" href="/projects">All Projects ({{ $all_projects->count() }})</a>
            </div>
            <p class="project-amount">{{ $tag->projects_count }} Projects</p>

            <table id="projects-table" class="project-table">
                <tr>
                    <th onclick="mySort(0)" class="mouse-pointer">Year</th>
                    <th></th>
                    <th onclick="mySort(1)" class="mouse-pointer">Name</th>
                    <th onclick="mySort(2)" class="d-none-md mouse-pointer">Company</th>
                    <th class="d-none-sm">Tags</th>
                    <th>Link</th>
                </tr>

                @foreach ($tag->projects as $project )
                    <tr>
                        <td>{{ $project->year }}</td>
                        <td><a href="/projects/{{ $project->slug }}"><img src="/assets/img/{{ $project->img }}"></a></td>
                        <td><a style="display: block; font-weight: 700;" href="/projects/{{ $project->slug }}">{{ $project->name }}</a></td>
                        <td class="d-none-md">{{ $project->company }}</td>
                        <td class="d-none-sm"><div>
                            @foreach ($project->tags as $tag )
                                <a class="btn circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                            @endforeach
                        </div></td>
                        <td class="link">
                            <a class="project-link" href="https://{{ $project->link }}"><span class="d-none">{{ $project->link }}</span>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 32.5 32.5" class="link-arrow" xml:space="preserve">
                                <g>
                                    <path class="link-arrow-path" d="M6.2,30.6c-1.5,1.5-3.2,2.9-5.1,1.1c-2.2-2-0.7-3.8,0.9-5.5c16-16,3.3-3.3,20.6-20.5C17.1,5.8,13.2,6,9.2,6.1
                                    c-1.9,0-3.8-0.3-3.9-2.8C5.2,0.4,7.2,0,9.3,0c6.3,0,12.7,0,19,0c3,0,4.2,1.3,4.2,4.2c-0.1,6.3,0,12.7,0,19c0,1.9-0.2,3.8-2.8,4
                                    c-2.8,0.2-3.3-1.8-3.2-4c0.1-3.9,0.3-7.9,0.6-13.5L6.2,30.6z"/>
                                </g>
                                </svg>
                            </a>
                        </td>  
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

    <script>
        function mySort(n) {
            var table, rows, i, x, y, isSorting, isSorted, dir, count = 0
            table = document.getElementById("projects-table")
            isSorting = true
            dir = "asc"

            while(isSorting){
                isSorting = false
                rows = table.rows

                for(i = 1; i < (rows.length -1); i++) {
                    isSorted = false
                    x = rows[i].getElementsByTagName("TD")[n]
                    y = rows[i+1].getElementsByTagName("TD")[n]

                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            isSorted = true
                            break
                        }
                    }else if (dir == "desc") {
                        if(x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            isSorted = true
                            break
                        }
                    }
                }
                if (isSorted) {
                    rows[i].parentNode.insertBefore(rows[i+1], rows[i])
                    count ++
                    isSorting = true
                }else{
                    if(count == 0 && dir == "asc") {
                        dir = "desc"
                        isSorting = true
                    }
                }
            }
        }
    </script>
@endsection
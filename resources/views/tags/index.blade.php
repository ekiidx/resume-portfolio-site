@extends('layouts.app')
@section('title', 'Tags')

@section('content')

    <section>
        <h1>Tags</h1>

        @foreach ( $tags as $tag )
            <a class="circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
        @endforeach
    </section>
@endsection
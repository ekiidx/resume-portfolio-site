<?php 
include("../public/header.php"); ?>

<h1>Tags</h1>

@foreach ( $tags as $tag )
    <a class="circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
@endforeach

<?php include("../public/footer.php");
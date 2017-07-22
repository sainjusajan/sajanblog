@extends('layouts.blog-master')



@section('content')
<header class="header-block row">
    <div class="blog-title">
        <h1>read.</h1>
    </div>

</header>

<section class="post-list row">



    @foreach($posts as $post)
        <div class="col-xs-12 col-sm-12 col-lg-12 post-line">
            <span class="post-titles"><a href="{{ route('posts.show', $post->id) }}"><h1>{{ $post->title }}</h1></a></span>
            <time class="dates"><br/>{{ $post->created_at->diffForHumans() }}</time>
        </div>
    @endforeach

    <div class="pagination-wrapper">

        <nav class="pagination" role="pagination">

            <a class="older-posts" href="#"> <span class="glyphicon glyphicon-menu-down"></span> </a>
        </nav>


    </div>

</section>

@endsection
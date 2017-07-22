@extends('layouts.blog-master')



@section('content')

    <header class="header-block row">
        <div class="blog-title">
            <a href=""><h1>read.</h1></a>
        </div>

    </header>



    <section class="post-list post-content"><div class="post-data">
            <h1 class="post-page-title">{{ $post->title }}</h1>

            <p class="post-meta-data">{{ date('d F Y', strtotime($post->created_at)) }}</p>

           {!! $post->content !!}
        </div>
    </section>

@endsection